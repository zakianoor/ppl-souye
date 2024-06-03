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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('id_cart');
            $table->string('nama_brg');
            $table->string('harga_brg');
            $table->integer('qty_brg');
            $table->string('img_brg');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_brg');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_transaksi')->nullable();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_brg')->references('id_brg')->on('barang');
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
