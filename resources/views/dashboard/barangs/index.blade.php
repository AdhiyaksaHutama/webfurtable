@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barang</h1>
    </div>

    {{-- alert tambah barang berhasil --}}
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- button tambah barang --}}
    <div class="button-tambah">
        <a href="/dashboard/barangs/create" class="btn btn-primary mb-3">Tambah Barang</a>
    </div>

    {{-- searching
    <div class="row">
        <div class="col-md-4 ">
            <form action="/dashboard/barangs">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-outline-secondary" type="submit" id="search" value="{{ request('search') }}">Search</button>
                </div>
            </form>
        </div>
    </div> --}}

    {{-- filter --}}
    <form action="/dashboard/barangs">
        <div class="row">
            <div class="col-md-5">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="search" value="{{ request('search') }}">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="/dashboard/barangs">
        <div class="row mt-3 mb-3" id="filter">
            <div class="col-md-2 mb-2 category form-group">
                <select name="category" id="category" class="form-select">
                    <option value="">Pilih Category</option>
                    <option value="Jati">Jati</option>
                    <option value="Jepara">Jepara</option>
                    <option value="Kalimantan">Kalimantan</option>
                </select>
            </div>
            <div class="col-md-2 flashsale form-group">
                <select name="flashsale" id="flashsale" class="form-select">
                    <option value="">Pilih Flashsale</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-md-3 form-group mt-1">
                <button type="submit" class="btn btn-primary btn-sm"><span data-feather="check-circle"></span></button>
            </div>
        </div>
    </form>

    {{-- tabel barang --}}
    @if($barangs->count())
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Bahan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Flashsale</th>
                        <th scope="col">Action</th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->sku }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>{{ $barang->bahan}}</td>
                            <td>{{ $barang->kategori}}</td>
                            <td> <?php foreach (($barang->gambar)as $picture) { ?>
                 <img src="{{ asset('/gambar/'.$picture) }}" style="height:120px; width:200px"/>
                <?php } ?>
           </td>
                            <td>{{ $barang->flashsale }}</td>
                            <td>
                                <a href="/dashboard/barangs/{{ $barang->id }}" class="badge bg-info"><span data-feather="eye"></span></a>

                                <a href="/dashboard/barangs/{{ $barang->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                                <form action="/dashboard/barangs/{{ $barang->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus?')"><span data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        {{-- jika tidak ada post --}}
        <p class="text-center mt-5 fs-6">Barang tidak ditemukan.</p>
    @endif

    {{-- pagination --}}
    <div class="d-flex justify-content-end mt-2">
        {{ $barangs->links() }}
    </div>


@endsection
