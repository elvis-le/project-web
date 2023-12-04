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
        Schema::create('product_drives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drive_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('drive_id')->references('id')->on('drives')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_drives');
    }
};
