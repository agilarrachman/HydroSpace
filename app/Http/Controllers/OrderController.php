<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('customer_id', Auth::id())
            ->where('status', '!=', 'Keranjang')
            ->with('orderItems.product')
            ->get();

        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('orders', [
            "title" => "HydroSpace | Pesanan Saya",
            "active" => "Pesanan Saya",
            'orders' => $orders,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages,
        ]);
    }

    public function indexAdmin()
    {
        $orders = Order::where('status', '!=', 'Keranjang')
            ->with('orderItems.product')
            ->when(request()->filled('search'), function ($query) {
                $search = request()->input('search');
                $query->where('id', 'like', "%$search%")
                    ->orWhere(function ($subQuery) use ($search) {
                        $subQuery->where('status', '!=', 'Keranjang') // Tambahkan kondisi ini
                            ->whereHas('customer', function ($q) use ($search) {
                                $q->where('name', 'like', "%$search%");
                            });
                    })
                    ->orWhere(function ($subQuery) use ($search) {
                        $subQuery->where('status', '!=', 'Keranjang') // Tambahkan kondisi ini
                            ->whereHas('orderItems.product', function ($q) use ($search) {
                                $q->where('name', 'like', "%$search%");
                            });
                    });
            })
            ->latest()
            ->paginate(10);

        return view('dashboard.orders.index', [
            "title" => "HydroSpace | Daftar Pesanan",
            "active" => "Pesanan",
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function checkout(Request $request)
    {
        $selectedItems = $request->input('items', []);

        if (empty($selectedItems)) {
            return redirect()->back()->with('error', 'Silakan pilih minimal satu item untuk checkout!');
        }

        // Simpan item yang dipilih ke dalam session
        session()->put('selected_items', $selectedItems);

        return redirect()->route('pesanan.create'); // Pastikan ini benar sesuai dengan resource route
    }

    public function cancelOrder()
    {
        // Hapus data order dari session
        session()->forget('selected_items');

        return redirect('/produk');
    }


    public function create()
    {
        // Ambil data dari session
        $selectedItems = session('selected_items', []);

        if (empty($selectedItems)) {
            return redirect('/produk')->with('error', 'Silakan pilih item terlebih dahulu.');
        }

        // Ambil detail produk dari database berdasarkan item yang dipilih
        $orderItems = OrderItem::whereIn('id', $selectedItems)->get();
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();
        $customer = Auth::user();

        $user = Auth::user();
        $totalOrder = Order::where('customer_id', $user->id)->count();

        return view('checkout', [
            "title" => "HydroSpace | Buat Pesanan",
            "active" => "Buat Pesanan",
            'customer' => $customer,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages,
            'totalPrice' => $orderItems->sum('total_price'),
            'totalItem' => $orderItems->sum('quantity'),
            "orderItems" => $orderItems, // Kirim data item ke view
            'totalOrder' => $totalOrder,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer|exists:users,id',
            'status' => 'nullable|in:Keranjang,Belum Bayar,Dikemas,Diantar,Selesai,Dibatalkan',
            'recipient' => 'required|string|max:255',
            'phone_number' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/'],
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'full_address' => 'required|string',
            'total_amount' => 'required|integer|min:1',
            'midtrans_transaction_id' => 'required|string|max:255',
            'midtrans_response' => 'required|json',
            'payment_method' => 'required|string|max:255',
            'selected_items' => 'required|array|min:1',
            'order_id' => 'required|string|max:255|unique:orders,id'
        ]);

        DB::beginTransaction();
        try {
            // Dapatkan order lama (Keranjang) milik user
            $oldOrder = Order::where('customer_id', Auth::id())
                ->where('status', 'Keranjang')
                ->first();

            // Gunakan order_id yang diterima dari frontend
            $newOrderId = $request->order_id;

            // Buat order baru dengan status 'Belum Bayar'
            $newOrder = Order::create([
                'id' => $newOrderId,
                'customer_id' => Auth::id(),
                'status' => 'Dikemas',
                'total_amount' => $request->total_amount,
                'midtrans_transaction_id' => $request->midtrans_transaction_id,
                'midtrans_response' => $request->midtrans_response,
                'payment_method' => $request->payment_method,
                'recipient' => $request->recipient,
                'phone_number' => $request->phone_number,
                'province' => $request->province,
                'city' => $request->city,
                'district' => $request->district,
                'village' => $request->village,
                'full_address' => $request->full_address,
            ]);

            if ($oldOrder) {
                // Pindahkan hanya order_items yang dipilih dari order lama ke order baru
                OrderItem::where('order_id', $oldOrder->id)
                    ->whereIn('id', $request->selected_items) // Perhatikan: kita memfilter berdasarkan ID order_item
                    ->update(['order_id' => $newOrderId]);

                // Periksa apakah order lama masih memiliki order items
                if (!OrderItem::where('order_id', $oldOrder->id)->exists()) {
                    // Jika tidak ada order items lagi, hapus order lama
                    $oldOrder->delete();
                }
            }

            $request->session()->forget('selected_items');

            DB::commit();
            return response()->json(['order_id' => $newOrderId]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Gagal memproses pesanan: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load('orderItems.product');
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('orderDetail', [
            "title" => "HydroSpace | Pesanan " . $order->id,
            "active" => "Pesanan Saya",
            "order" => $order,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages
        ]);
    }

    public function showAdmin(Order $order)
    {
        $order->load('orderItems.product');
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('dashboard.orders.show', [
            "title" => "HydroSpace | Detail Pesanan",
            "active" => "Pesanan",
            "order" => $order,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:orders,id',
            'status' => 'required|in:Keranjang,Belum Bayar,Dikemas,Diantar,Selesai,Dibatalkan',
        ]);

        Order::where('id', $validatedData['id'])->update(['status' => $validatedData['status']]);
        return redirect('/dashboard/orders/' . $validatedData['id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function addCart(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Mendapatkan informasi pengguna yang sedang login
        $user = Auth::user();

        // Mencari order yang sedang berjalan (status "Keranjang") untuk customer ini
        $order = Order::where('customer_id', $user->id)
            ->where('status', 'Keranjang')
            ->first();

        // Jika tidak ada order yang sedang berjalan, buat order baru
        if (!$order) {
            $order = Order::create([
                'customer_id' => $user->id,
                'status' => 'Keranjang',
            ]);
        }

        // Mencari produk yang akan ditambahkan ke keranjang
        $product = Product::findOrFail($validated['product_id']);

        // Menambahkan item ke order_items
        $orderItem = OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $validated['quantity'],
            'total_price' => $product->price * $validated['quantity'], // Menghitung total harga berdasarkan quantity
        ]);

        // Menghitung total amount untuk order
        $orderTotal = $order->orderItems->sum('total_price');
        $order->update(['total_amount' => $orderTotal]);

        // Mengembalikan respon jika berhasil
        return redirect()->route('keranjang')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}
