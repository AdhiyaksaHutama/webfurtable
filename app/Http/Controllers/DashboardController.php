<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        // dd($request->all());
        return view('dashboard.index',[
            'barang_flashsale' => Barang::select("*")->where("flashsale", "=", "yes")->get(),
            'barang_latest' => Barang::latest()->paginate(5),
            'barang_count' => Barang::count(),
            'user' => User::count()
        ]);
    }

}
