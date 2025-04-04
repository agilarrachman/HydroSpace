<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders', [
            "title" => "HydroSpace | Pesanan Saya",
            "active" => "Pesanan Saya",
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
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
        ]);

        $selectedItems = Session::get('checkout_items', []);

        if (empty($selectedItems)) {
            return redirect('/keranjang')->with('error', 'Silakan pilih item untuk checkout.');
        }

        $user = Auth::user();

        // Buat Order Baru
        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'belum dibayar',
            'total_price' => OrderItem::whereIn('id', $selectedItems)->sum('total_price'),
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
        ]);

        // Update order_id pada item yang dicheckout
        OrderItem::whereIn('id', $selectedItems)->update(['order_id' => $order->id, 'status' => 'dipesan']);

        // Hapus session checkout
        Session::forget('checkout_items');

        return redirect()->route('orders.show', $order->id)->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orderDetail', [
            "title" => "HydroSpace | Pesanan Saya",
            "active" => "Pesanan Saya",
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
    public function update(Request $request, Order $order)
    {
        //
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
