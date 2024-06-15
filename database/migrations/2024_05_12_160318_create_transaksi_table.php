<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedInteger('total_transaksi');
            $table->dateTime('tgl_transaksi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('norek_buyer')->nullable();
            $table->string('namarek_buyer')->nullable();
            $table->string('bank_buyer')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->string('nama_buyer');
            $table->text('alamat_buyer');
            $table->string('nohp_buyer');
            $table->string('order')->nullable();
            $table->ipAddress('snap_token')->nullable();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
