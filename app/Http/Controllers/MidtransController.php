<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function placeOrder(Request $request)
    {
        // Set konfigurasi Midtrans menggunakan variabel lingkungan (env)
        Config::$serverKey = env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-RMBpSHHxv4XyZlCroiKAAiYj');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Ambil data dari request
        $order_id = uniqid();
        $gross_amount = 30000; // Ganti dengan nilai dari request atau $request->amount

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $gross_amount,
            ],
            'customer_details' => [
                'first_name' => 'Budi',
                'last_name' => 'Pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json([
                'token' => $snapToken,
                'environment' => Config::$isProduction ? 'Production' : 'Sandbox',
                'method' => 'POST',
                'url' => Config::$isProduction
                    ? 'https://app.midtrans.com/snap/v1/transactions'
                    : 'https://app.sandbox.midtrans.com/snap/v1/transactions'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
