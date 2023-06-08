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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('bahan');
            $table->string('sku');
            $table->integer('stok');
            $table->string('warna');
            $table->string('gambar');
            $table->string('kategori');
            $table->string('flashsale');
            $table->string('harga');
            $table->string('harga_diskon')->nullable();
            $table->string('deskripsi_produk');
            $table->string('ukuran');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
