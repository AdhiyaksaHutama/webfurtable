<?php

namespace App\Http\Controllers;

use App\Models\Barang;
// use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $barang = Barang::oldest();

        //category
        $barang->when($request->category, function($query) use ($request){
            return $query->where('category', $request->category);
        });

        //flashsale
        $barang->when($request->flashsale, function($query) use ($request){
            return $query->where('flashsale', $request->flashsale);
        });

        //search
        if(request('search')){
            $barang->where('nama_barang', 'like', '%' . request('search') . '%')
                    ->orWhere('sku', 'like', '%' . request('search') . '%')
                    ->orWhere('ukuran', 'like', '%' . request('search') . '%')
                    ->orWhere('deskripsi_produk', 'like', '%' . request('search') . '%')
                    ->orWhere('category', 'like', '%' . request('search') . '%')
                    ->orWhere('warna', 'like', '%' . request('search') . '%')
                    ->orWhere('bahan', 'like', '%' . request('search') . '%')
                    ->orWhere('stok', 'like', '%' . request('search') . '%')
                    ->orWhere('flashsale', 'like', '%' . request('search') . '%')
                    ->orWhere('harga', 'like', '%' . request('search') . '%')
                    ->orWhere('harga_diskon', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.barangs.index', [
            'barangs' => $barang->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'sku' => 'required|unique:barangs',
            'warna' => 'required|max:255',
            'category' => 'required',
            'stok' => 'numeric|min:0|required',
            'gambar.*' => 'image|file|max:2048',
            'kategori' => 'required',
            'flashsale' => 'required',
            'harga' => 'required|max:20',
            'harga_diskon' => 'max:20',
            'deskripsi_produk' => 'required',
            'ukuran' => 'required',
           
        ]);

        //gambar
        $files = [];
        if($request->hasfile('gambar'))
         {
            foreach($request->file('gambar') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('gambar'), $name);  
                $files[] = $name;  
            }
         }
        
         $file= new Barang();
       
         $file->nama_barang = $request->nama_barang;
         $file->sku = $request->sku;
         $file->warna = $request->warna;
         $file->bahan = $request->category;
         $file->stok = $request->stok;
         $file->gambar = $files;
         $file->kategori = $request->kategori;
         $file->flashsale = $request->flashsale;
         $file->harga = $request->harga;
         $file->harga_diskon = $request->harga_diskon;
         $file->deskripsi_produk = $request->deskripsi_produk;
         $file->ukuran = $request->ukuran;
         $file->save();

    

        

        return redirect('/dashboard/barangs')->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('dashboard.barangs.detail',[
            'barang' => $barang
        ]);
    }
   
    public function detailBarang(Request $request){
            // edit data ajax
            $id = $request->id;
            $emp = Barang::find($id); //mengambil data berdasarkan id
            return response()->json($emp);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barangs.edit',[
            'barang' => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama_barang' => 'required|max:255',
            'warna' => 'required|max:255',
            'gambar.*' => 'image|file|max:2048',
            'gambarWarna.*' => 'image|file|max:2048',
            'flashsale' => 'required',
            'harga' => 'required|max:20',
            'harga_diskon' => 'max:20',
            'deskripsi_produk' => 'required',
            'ukuran' => 'required',
            'category' => 'required',
        ];

        //update sku
        if($request->sku != $barang->sku){
            $rules['sku'] = 'required|unique:barangs';
        };

        $validatedData = $request->validate($rules);

        //update image dan hapus yang lama
        if($request->hasfile('gambar'))
        {
           foreach($request->file('gambar') as $file)
           {
               $name = time().rand(1,50).'.'.$file->extension();
               $file->move(public_path('gambar'), $name);  
               $files[] = $name;  
           }
           $validatedData['gambar'] = $files;
        }
       
        //update image dan hapus yang lama
        /*if($request->hasFile('gambarWarna')){
            $gambarPaths = [];
            foreach($request->file('gambarWarna') as $gambar){
                $gambarPath = $gambar->store('post-gambar');
                array_push($gambarPaths, $gambarPath);
            }
            $validatedData['gambarWarna'] = json_encode($gambarPaths);
        }*/

        // Barang::where('id', $barang->id)->update($validatedData);

        Barang::where('id', $barang->id)->update([
            'nama_barang' => $validatedData['nama_barang'],
            'warna' => $validatedData['warna'],
            'gambar' => $validatedData['gambar'] ,
            'flashsale' => $validatedData['flashsale'],
            'harga' => $validatedData['harga'],
            'harga_diskon' => $validatedData['harga_diskon'],
            'deskripsi_produk' => $validatedData['deskripsi_produk'],
            'ukuran' => $validatedData['ukuran'],
            'bahan' => $validatedData['category'],
        ]);

        return redirect('/dashboard/barangs')->with('success', 'Barang berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //hapus image
        if($barang->gambar){
            Storage::delete($barang->gambar);
        }

        if($barang->gambarWarna){
            Storage::delete($barang->gambarWarna);
        }

        Barang::destroy($barang->id);

        return redirect('/dashboard/barangs')->with('success', 'Barang telah berhasil dihapus!');
    }
}
