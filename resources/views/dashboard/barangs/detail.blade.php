@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Barang</h1>
</div>
<div class="detail-barang">
    {{-- button --}}
    <a href="/dashboard/barangs" class="btn btn-success btn-sm"><span data-feather="arrow-left"></span> Back</a>
    <a href="/dashboard/barangs/{{ $barang->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/barangs/{{ $barang->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
    </form>
    <h2 class="mb-1 mt-3">{{ $barang->nama_barang }}</h2>
    <div class="row">
        {{-- image --}}
        <div class="detail-right col-lg-6 mt-2">
            <div style="max-width: 10rem;">
            <?php foreach (($barang->gambar)as $picture) { ?>
                 <img src="{{ asset('/gambar/'.$picture) }}" style="height:120px; width:200px"/>
                <?php } ?>
                {{-- <img src="{{ asset('storage/' . $barang->gambar) }}" alt="{{ $barang->category }}" class="img-fluid"> --}}
            </div>

        </div>
        {{-- detail barang --}}
        <div class="detail-left col-lg-6 mt-2">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $barang->nama_barang }}</td>
                        </tr>
                        <tr>
                            <td>SKU</td>
                            <td>{{ $barang->sku }}</td>
                        </tr>
                        <tr>
                            <td>Bahan</td>
                            <td>{{ $barang->bahan }}</td>
                        </tr>
                        <tr>
                            <td>Kategori Ruang</td>
                            <td>{!! $barang->kategori !!}</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>{{ $barang->warna }}</td>
                        </tr>
                        <tr>
                            <td>Flashsale</td>
                            <td>{{ $barang->flashsale }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>{{ $barang->harga}}</td>
                        </tr>
                        <tr>
                            <td>Harga Diskon</td>
                            <td>{{ $barang->harga_diskon}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>{{ $barang->deskripsi_produk }}</td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>{!! $barang->ukuran !!}</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
