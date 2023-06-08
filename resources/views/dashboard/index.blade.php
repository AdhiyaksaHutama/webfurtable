@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
    </div>

    {{-- analytic count --}}
    <div class="analytic-jumlah">
        <div class="row">
            <div class="card" >
                <div class="card-body">
                    <div class="card-main">
                        <div class="card-left">
                            <h5 class="card-title">Barang</h5>
                            <h1>{{ $barang_count }}</h1>
                        </div>
                        <div class="card-right">
                            <span data-feather="box" class="feather-size4"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" >
                <div class="card-body">
                    <div class="card-main">
                        <div class="card-left">
                            <h5 class="card-title">Cart</h5>
                            <h1>20</h1>
                        </div>
                        <div class="card-right">
                            <span data-feather="shopping-cart" class="feather-size4"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" >
                <div class="card-body">
                    <div class="card-main">
                        <div class="card-left">
                            <h5 class="card-title">Transaksi</h5>
                            <h1>20</h1>
                        </div>
                        <div class="card-right">
                            <span data-feather="dollar-sign" class="feather-size4"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" >
                <div class="card-body">
                    <div class="card-main">
                        <div class="card-left">
                            <h5 class="card-title">User</h5>
                            <h1>{{ $user }}</h1>
                        </div>
                        <div class="card-right">
                            <span data-feather="user" class="feather-size4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="analytic-produk mt-4">
        <div class="row ">
            {{-- Flashsale Products --}}
            <div class="card-flashsale col-lg-6">
                <div class="col-md-15 mb-3 border">
                    <div class="padding" style="padding: 1rem">
                        <h5>Flashsale Products</h5>
                        @if($barang_flashsale->count())
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Harga Diskon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang_flashsale as $barang )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->sku }}</td>
                                            <td>{{ $barang->harga }}</td>
                                            <td>{{ $barang->harga_diskon }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            {{-- jika tidak ada post --}}
                            <p class="text-center mt-5 fs-6">Barang tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Recently Added Products --}}
            <div class="card-latest col-lg-6">
                <div class="col-md-15 border">
                    <div class="padding" style="padding: 1rem">
                        <h5>Recently Added Products</h5>
                        @if($barang_latest->count())
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">SKU</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang_latest as $barang )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->sku }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            {{-- jika tidak ada post --}}
                            <p class="text-center mt-5 fs-6">Barang tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection