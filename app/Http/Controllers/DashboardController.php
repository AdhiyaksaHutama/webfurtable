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
            'barang_flashsale' => Barang::select("*")->where("flashsale", "=", "yes")->paginate(4),
            'barang_latest' => Barang::latest()->paginate(4),
            'barang_count' => Barang::count(),
            'user' => User::count()
        ]);
    }

}
