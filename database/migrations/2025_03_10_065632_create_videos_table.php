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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->references('id')->on('users');
            $table->foreignId('category_id')->references('id')->on('video_categories');
            $table->string('slug', 255)->unique();
            $table->string('title', 255);
            $table->string('thumbnail', 255);
            $table->text('video');
            $table->text('description');
            $table->integer('duration');
            $table->enum('difficulty_level', ['Pemula', 'Menengah', 'Ahli']);
            $table->string('delivery_style', 255);
            $table->string('objective_heading1', 255);
            $table->string('objective_description1', 255);
            $table->string('objective_heading2', 255)->nullable();
            $table->string('objective_description2', 255)->nullable();
            $table->string('objective_heading3', 255)->nullable();
            $table->string('objective_description3', 255)->nullable();
            $table->string('objective_heading4', 255)->nullable();
            $table->string('objective_description4', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
