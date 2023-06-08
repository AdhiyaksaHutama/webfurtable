<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function tentang(){
        // dd($request->all());
        return view('catalog.tentang',[
            'populer' => Barang::orderBy('stok', 'desc')->paginate(4)
        ]);
    }
}
