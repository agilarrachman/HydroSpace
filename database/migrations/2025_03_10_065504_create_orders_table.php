<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('customer_id')->references(column: 'id')->on(table: 'users');
            $table->enum('status', ['Keranjang', 'Belum Bayar', 'Dikemas', 'Diantar', 'Selesai', 'Dibatalkan'])->default('Keranjang');
            $table->integer('total_amount')->nullable();
            $table->string('midtrans_transaction_id')->nullable();
            $table->json('midtrans_response')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('recipient')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('village')->nullable();
            $table->text('full_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
