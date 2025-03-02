<?php
/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
    composer require midtrans/midtrans-php
                                
    Alternatively, if you are not using **Composer**, you can download midtrans-php library 
    (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
    the file manually.   

    require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

    require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

    // Set konfigurasi Midtrans Sandbox
    \Midtrans\Config::$serverKey = 'SB-Mid-server-RMBpSHHxv4XyZlCroiKAAiYj';
    \Midtrans\Config::$isProduction = false;
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    // Parameter transaksi contoh
    $params = array(
        'transaction_details' => array(
            'order_id' => uniqid(), // Biar unik setiap transaksi
            'gross_amount' => 50000 // Ubah sesuai harga
        ),
        'customer_details' => array(
            'first_name' => 'Agil',
            'last_name' => 'Musthafa',
            'email' => 'agil@example.com',
            'phone' => '08123456789'
        ),
        'item_details' => array(
            array(
                'id' => 'item1',
                'price' => 50000,
                'quantity' => 1,
                'name' => 'Kopi Kenangan Mantan'
            )
        )
    );

    // Generate Snap Token
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    echo json_encode(['token' => $snapToken]);

?>