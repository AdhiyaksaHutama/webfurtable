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
        //
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('barang_id');
            $table->string('status');
            $table->string('alamat');
            $table->integer('ongkir');
            $table->string('catatan');
            $table->integer('total_harga');
            $table->integer('qty');
            $table->string('tanggal');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('transaksis');
    }
};
