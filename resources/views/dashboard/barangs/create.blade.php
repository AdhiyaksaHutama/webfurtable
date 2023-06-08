@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Barang</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/barangs" class="mb-5" enctype="multipart/form-data"> {{-- mengarah ke method store --}}
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input name="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" required autofocus value="{{ old('nama_barang') }}">
            @error('nama_barang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category"  id="category" onchange="updateSku()">
                <option value="">Pilih Bahan</option>
                <option value="Jati">Jati</option>
                <option value="Jepara">Jepara</option>
                <option value="Kalimantan">Trembesi</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input name="sku" type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" value="{{ old('sku') }}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Pilih Kategori</label>
            <select class="form-select" name="kategori"  id="kategori">
                <option value="">Pilih Kategori</option>
                <option value="Ruang Tamu">Ruang Tamu</option>
                <option value="Kamar">Kamar</option>
                <option value="Dapur">Dapur</option>
                <option value="Teras">Teras</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input name="stok" type="number" min="0" class="form-control @error('stok') is-invalid @enderror" id="stok" required autofocus value="{{ old('stok') }}">
            @error('stok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input name="warna" type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" required value="{{ old('warna') }}">
            @error('warna')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Detail</label>
            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar[]" multiple required>
            @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="flashsale" class="form-label">Flashsale</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="flashsale" id="yes" type="radio" value="yes">
                    <label for="yes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flashsale" id="no" value="no">
                    <label for="no" class="form-check-label">No</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input name="harga" type="number" min="0" class="form-control @error('harga') is-invalid @enderror" id="harga" required value="{{ old('harga') }}">
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3" id="harga_diskon" style="display: none">
            <label for="harga_diskon" class="form-label">Harga Diskon</label>
            <input name="harga_diskon" type="number" min="0" class="form-control @error('harga_diskon') is-invalid @enderror" id="harga_diskon" value="{{ old('harga_diskon') }}">
            @error('harga_diskon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <textarea name="deskripsi_produk" type="text-are" class="form-control @error('deskripsi_produk') is-invalid @enderror" id="deskripsi_produk">{{ old('deskripsi_produk') }}</textarea>
            @error('deskripsi_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <textarea name="ukuran" type="text-area" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" >{{ old('ukuran') }}</textarea>
            @error('ukuran')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input id="ukuran" type="hidden" name="ukuran" value="{{ old('ukuran') }}">
            <trix-editor input="ukuran"></trix-editor>
            @error('ukuran')
                <p class="text-danger"><small>{{ $message }}</small></p>
            @enderror
        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function updateSku() {
        var category = document.getElementById("category").value;
        var skuInput = document.getElementById("sku");

        if (category === "Jati") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-JT-" + randNum;

        } else if (category === "Jepara") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-JP-" + randNum;

        } else if (category === "Kalimantan") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-KN-" + randNum;
        } else {
            skuInput.value = "MJ-";
        }
    }

    function previewImage(){
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'blok';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.file[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

        // const blob = URL.createObjectURL(image.files[0]);
        // imgPreview.src = blob;
    }

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    var flashsale = document.getElementsByName("flashsale");
    var harga_diskon = document.getElementById("harga_diskon");
        // Memasang event listener pada radio button
    for(var i=0; i<flashsale.length; i++) {
        flashsale[i].addEventListener('click', function() {
            // Jika pilihan 'yes' dipilih, tampilkan form field baru
            if(this.value == 'yes') {
                harga_diskon.style.display = 'block';
            }
            // Jika pilihan 'no' dipilih, sembunyikan form field baru
            else {
                harga_diskon.style.display = 'none';
            }
        });
    }

</script>

@endsection
