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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('product_categories');
            $table->string('slug', 255)->unique();
            $table->string('name', 255);
            $table->string('picture1', 255);
            $table->string('picture2', 255)->nullable();
            $table->string('picture3', 255)->nullable();
            $table->string('picture4', 255)->nullable();
            $table->string('picture5', 255)->nullable();
            $table->integer('price')->default(0);
            $table->integer('stock')->default(0);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
