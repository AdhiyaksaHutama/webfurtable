<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ApiTransaksiController extends Controller
{
    public function cekstatus(Request $request)
    {
        $transaksi = Transaksi::where('user_id', $request->user_id)->first();
        if ($transaksi) {
            $row['id'] = $transaksi->id;
            $row['nama_lengkap'] = $transaksi->customer->name;
            $row['email'] = $transaksi->customer->email;
            $row['nama_barang'] = $transaksi->barang->nama_barang;
            $row['qty'] = $transaksi->qty;
            $row['tanggal_pembelian'] = $transaksi->tanggal;
            $row['status_pesanan'] = $transaksi->status;
            $row['alamat'] = $transaksi->alamat;
            return response()->json($transaksi);
        } else {
            return response()->json('data tidak ada');
        }
    }

    public function pesan(Request $request)
    {

        $tanggalhariini = Carbon::now()->Format('Y-m-d'); //tanggal hari ini
        $transaksi = Transaksi::create([
            'barang_id' => $request->barang_id,
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'ongkir' => $request->ongkir,
            'total_harga' => $request->total_harga,
            'catatan' => $request->catatan,
            'qty' => $request->qty,
            'status' => 'diproses',
            'tanggal' => $tanggalhariini,
        ]);
        if ($transaksi) {
            return response()->json(['data berhasil ditambahkan']);
        } else {
            return response()->json(['gagal']);
        }
    }
}
