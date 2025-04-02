<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
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
