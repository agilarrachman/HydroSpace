<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function showCart()
    {
        // Mengambil item keranjang yang dimiliki oleh user yang sedang login
        $orderItems = OrderItem::where('user_id', Auth::id()) // berdasarkan user_id
            ->where('status', 'keranjang') // hanya yang status 'keranjang'
            ->get();

        return view('produk', compact('orderItems'));
    }

    public function addToCart(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not logged in'], 401);
        }

        $user = Auth::user();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Cek apakah user sudah memiliki order dengan status 'Keranjang'
        $order = Order::where('customer_id', $user->id)->where('status', 'Keranjang')->first();

        if (!$order) {
            $randomNumber = mt_rand(1000, 9999);
            $orderId = 'HYD0' . $randomNumber;

            $order = Order::create([
                'id' => $orderId,
                'customer_id' => $user->id,
                'status' => 'Keranjang',
                'total_amount' => 0,
            ]);
        }

        // Cek apakah produk sudah ada di keranjang
        $orderItem = OrderItem::where('order_id', $order->id)->where('product_id', $productId)->first();

        if ($orderItem) {
            $orderItem->quantity += $quantity;
            $orderItem->total_price = $orderItem->quantity * $product->price;
            $orderItem->save();
        } else {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $quantity,
                'total_price' => $product->price * $quantity,
                'is_selected' => false,
            ]);
        }

        // **Update total harga order dengan mengambil ulang OrderItem dari DB**
        $order->total_amount = OrderItem::where('order_id', $order->id)->sum('total_price');
        $order->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }



    public function updateCart(Request $request, $orderItemId)
    {
        $orderItem = OrderItem::find($orderItemId);

        if (!$orderItem) {
            return response()->json(['success' => false, 'error' => 'Item tidak ditemukan']);
        }

        if ($request->type === 'quantity') {
            if ($request->action === 'increase') {
                $orderItem->quantity += 1;
            } elseif ($request->action === 'decrease' && $orderItem->quantity > 1) {
                $orderItem->quantity -= 1;
            }

            $orderItem->total_price = $orderItem->quantity * $orderItem->product->price;
            $orderItem->save();
        }

        // **Pastikan total amount di tabel orders diperbarui**
        $order = Order::find($orderItem->order_id);
        if ($order) {
            $order->total_amount = OrderItem::where('order_id', $order->id)->sum('total_price');
            $order->save();
        }

        // Hitung total harga semua item dalam keranjang
        $totalPrice = OrderItem::where('order_id', $orderItem->order_id)->sum('total_price');
        $totalItem = OrderItem::where('order_id', $orderItem->order_id)->sum('quantity');

        return response()->json([
            'success' => true,
            'new_quantity' => $orderItem->quantity,
            'new_price' => $orderItem->total_price,
            'total_price' => $totalPrice,
            'total_item' => $totalItem
        ]);
    }
}
