<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ApiBarangController extends Controller
{
    public function flashSale(Request $request)
    {
        $transaksi = Barang::where('flashsale', $request->flashsale)->first();
        if ($transaksi) {
            $row['id'] = $transaksi->id;
            $row['nama_barang'] = $transaksi->nama_barang;
            $row['bahan'] = $transaksi->bahan;
            $row['sku'] = $transaksi->sku;
            $row['stok'] = $transaksi->stok;
            $row['warna'] = $transaksi->warna;
            $row['gambar'] = $transaksi->gambar;
            $row['kategori'] = $transaksi->kategori;
            $row['flashsale'] = $transaksi->flashsale;
            $row['harga'] = $transaksi->harga;
            $row['harga_diskon'] = $transaksi->harga_diskon;
            $row['deskripsi_produk'] = $transaksi->deskripsi_produk;
            $row['ukuran'] = $transaksi->ukuran;
            return response()->json($transaksi);
        } else {
            return response()->json('data tidak ada');
        }
    }
    public function kategori(Request $request)
    {
        $transaksi = Barang::where('kategori', $request->kategori)->first();
        if ($transaksi) {
            $row['id'] = $transaksi->id;
            $row['nama_barang'] = $transaksi->nama_barang;
            $row['bahan'] = $transaksi->bahan;
            $row['sku'] = $transaksi->sku;
            $row['stok'] = $transaksi->stok;
            $row['warna'] = $transaksi->warna;
            $row['gambar'] = $transaksi->gambar;
            $row['kategori'] = $transaksi->kategori;
            $row['flashsale'] = $transaksi->flashsale;
            $row['harga'] = $transaksi->harga;
            $row['harga_diskon'] = $transaksi->harga_diskon;
            $row['deskripsi_produk'] = $transaksi->deskripsi_produk;
            $row['ukuran'] = $transaksi->ukuran;
            return response()->json($transaksi);
        } else {
            return response()->json('data tidak ada');
        }
    }
}
