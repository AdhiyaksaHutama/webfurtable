<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@300;400;700&family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
        crossorigin="anonymous"
    />

    <!--Style-->
    <link rel="stylesheet" href="{{asset('css/tentangStyle.css')}}" />

    <!-- Title of Site -->
    <title>Tentang Kami | FURTABLE</title>

    <!-- Logo Web -->
    <link rel="shortcut icon" type="image/icon" href="img/tentang/logo.png" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <div>
            <a href="#" class="navbar-logo">
                <img src="img/tentang/logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                FURTABLE
            </a>

            <div class="navbar-nav">
                <a href="/home">Home</a>
                <a href="/product">Product</a>
                <a href="#Tentang">Tentang</a>
            </div>
        </div>

        <div class="navbar-extra">
            <div class="search-box">
                <a><img src="img/tentang/assets(svg)/icon-search-search-normal.svg" /></a>
                <input type="search" placeholder="Search" />
            </div>
            <a href="#" id="hamburger-menu" class="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    <!--header orang -->
    <section class="hero">
        <img src="./img/tentang/Tentang(png)/hero.png" alt="">
        <div class="text">
            <h1>Sekilas Tentang Furtable dan Teamnya</h1>
            <p>Apa sih furtable, tujuannya apa, dan siapa saja anggotanya?</p>
        </div>
    </section>

    <!-- apa itu furtable -->
    <section class="apaitu">
        <h1>Apa Itu Furtable?</h1>
        <div class="desc">
            <img src="./img/tentang/Tentang(png)/furtable.png" alt="">
            <p>Furtable merupakan sebuah aplikasi berupa platform yang menjadi tempat jual beli furniture secara online yang menawarkan berbagai jenis furniture yang dapat memenuhi kebutuhan pengguna dalam mendekorasi dan melengkapi ruangan mereka dari berbagai jenis bahan dan kualitas. Furtable juga menyediakan produk-produk kustom, di mana konsumen dapat memesan barang yang dipersonalisasi sesuai dengan kebutuhan dan preferensi mereka. Selain itu, pada Furtable dapat melacak lokasi barang yang memungkinkan pengguna untuk melacak status pengiriman dan memantau pergerakan barang yang mereka beli.</p>
        </div>
    </section>

    <!-- goals dari furtable -->
    <section class="goals">
        <h1>Goals dari Furtable</h1>
        <div class="isi">
            <img src="./img/tentang/Tentang(png)/goals.png" alt="">
            <p>Tujuan dari terbentuknya Furtable adalah sebagai penyedia layanan yang handal dengan pengiriman keseluruh indonesia sehinga membuat para pelanggan merasa tidak terbebani dengan pengiriman, pelanggan juga bisa meng custom desain dari furniture yang mereka akan beli, sehingga tidak perlu khawatir dengan furniture lama yang telah rusak, furniture anda rusak? ganti dengan baru yang sama 90% dengan furniture lama anda.</p>
        </div>
    </section>

    <!-- Bertemu Kami -->
    <section class="bertemu">
        <h2>Ayo Bertemu Kami</h2>
        <div class="judul">
            <h4>Kalian penasaran dengan team furtable? Ini dia orang dibalik layar yang membuat aplikasi furtable berjalan dengan stabil tanpa ada bug, See you!</h4>
        </div>
        <div class="container">
            <div class="card">
                <div class="inner-card">
                    <img src="img/tentang/Tentang(png)/adhi-tentang.png">
                </div>
                <div class="tulisan">
                    <h3>Adhiyaksa Satria H</h3>
                    <p>Programmer/Maha Raja</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/tentang/Tentang(png)/arjun-tentang.png">
                </div>
                <div class="tulisan">
                    <h3>Arjun</h3>
                    <p>IT Support/Sapto Prabu</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/tentang/Tentang(png)/najib-tentang.png">
                </div>
                <div class="tulisan">
                    <h3>Najib Jamil A</h3>
                    <p>Designer/Maha Patih</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/tentang/Tentang(png)/rahma-tentang.png">
                </div>
                <div class="tulisan">
                    <h3>Rahmalia Rahadi</h3>
                    <p>Programmer/Maha Ratu</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/tentang/Tentang(png)/ara-tentang.png">
                </div>
                <div class="tulisan">
                    <h3>Tiara Firdausa A</h3>
                    <p>Programmer/Raden Ajeng</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sosmed section -->
    <section class="sosmed">
        <h1>Ikuti Kami di Sosial Media</h1>
        <div class="judul">
            <h2>Dapatkan promo terbaru setiap harinya dengan mengikuti sosial media kita, akan ada berita terbaru tentang produk yang diskon!</h2>
        </div>
        <div class="container">
            <div class="kotak">
                <img src="./img/tentang/assets-icon/fb.png" alt="">
                <p>FurtableIndonesia</p>
            </div>
            <div class="kotak">
                <img src="./img/tentang/assets-icon/ig.png" alt="">
                <p>FurtableIndonesia</p>
            </div>
            <div class="kotak">
                <img src="./img/tentang/assets-icon/twt.png" alt="">
                <p>FurtableIndonesia</p>
            </div>
            <div class="kotak">
                <img src="./img/tentang/assets-icon/tiktok.png" alt="">
                <p>FurtableIndonesia</p>
            </div>
        </div>
    </section>

    <!-- Download Aplikasi -->
    <section class="download">
        <div class="content">
            <h2>Download Aplikasi Kami!</h2>
            <p>Belanja sekarang, Dapatkan Promo sekarang! Download sekarang, Dapatkan barang impianmu! </p>
            <a href="#" class="cta">Belanja Sekarang</a>
        </div>
        <div class="down-img">
            <img src="./img/tentang/Tentang(png)/dwonload.png">
        </div>
    </section>

    <!-- Produk populer start -->
    <section class="populer">
        <h1>Produk Populer</h1>
        <div class="container">
            @foreach ($populer as $barang )
            <div class="card">
                <img src="img/tentang/assets(png)/populer4.png">
                <div class="deskripsi">
                    <h4>Kursi kayu jati</h4>
                    <h3>{{ $barang->nama_barang }}</h3>
                    <h2>Rp {{ $barang->harga }}</h2>
                </div>
                <p>Lihat detail</p>
            </div>
            @endforeach
        </div>
        <div class="cta">
            <a href="#" >Lihat Semua</a>
        </div>
    </section>
    <!-- Produk populer end-->

        <!-- Footer start -->
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <!--Column1-->
                        <div class="footer-pad">
                            <h4>BANTUAN</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Hubungi Kami</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <!--Column1-->
                        <div class="footer-pad">
                            <img src="./img/tentang/assets-icon/logowhite.png">
                            <ul class="list-unstyled">
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Sosial Media</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Aplikasi Kami</h4>
                            <div class="list-unstyled" >
                                <h5>Download Furtable di Playstore dan dapatkan diskon melimpah.</h5>
                            </div>
                            <a href="https://play.google.com/store/apps?hl=id""><img src="img/tentang/assets-icon/playstore.png"></a>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2023 - Furtable.  All rights reserved.</p>
                    </div>
                 </div>
            </div>
        </div>
      </footer>
    <!-- Footer end -->



    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- Hamburger menu -->
    <script src="js/script.js"></script>

</body>
</html>
