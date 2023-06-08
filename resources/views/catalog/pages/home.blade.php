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
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}"/>

    <!-- Title of Site -->
    <title>Home | FURTABLE</title>

    <!-- Logo Web -->
    <link rel="shortcut icon" type="image/icon" href="img/header/logo.png" />

</head>
<body> 
    <!-- Navbar start -->
    <nav class="navbar">
        <div>
            <a href="#" class="navbar-logo">
                <img src="img/header/logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                FURTABLE
            </a>
    
            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="/product">Product</a>
                <a href="/tentang">Tentang</a>
            </div> 
        </div>

        <div class="navbar-extra">
            <div class="search-box">
                <a><img src="img/header/search.svg" /></a>
                <input type="search" placeholder="Search" />
            </div>
            <a href="#" id="hamburger-menu" class="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <main class="content">
            <p>Penawaran terbaik pekan ini, elegant klasik bisa anda dapatkan dengan harga terjangkau!</p>
            <a href="https://play.google.com/store/apps?hl=id" class="cta">Belanja Sekarang!</a>
            <a href="https://play.google.com/store/apps?hl=id"><img src="img/home/playstore.png"></a>
        </main>
        <div class="imghero">
            <img src="img/home/heroTop.png">
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Step user Start -->
    <section class="step">
        <h2>Mau Furniture Kami?</h2>
        <p>Kalian bisa mendapatkan furniture kami, baik yang unggulan maupun yang rare!
            <br />Gimana caranya? Begini caranya</p>
            <div class="container">
                <div class="step-card">
                    <div class="card">
                        <img src="img/home/download.png">
                    </div>
                    <p>Download Aplikasi Furtable pada PlayStore, lakukan pendaftaran atau login akun</p>
                </div>
                <div class="step-card">
                    <div class="card">
                        <img src="img/home/searching.png">
                    </div>
                    <p>Pilih produk yang anda sukai atau cari produk sesuai kebutuhan anda</p>
                </div>
                <div class="step-card">
                    <div class="card">
                        <img src="img/home/keranjang.png">
                    </div>
                    <p>Tambahkan produk yang anda sukai ke keranjang</p>
                </div>
                <div class="step-card">
                    <div class="card">
                        <img src="img/home/location.png">
                    </div>
                    <p>Masukan atau pilih alamat pengiriman</p>
                </div>
                <div class="step-card">
                    <div class="card">
                        <img src="img/home/cod.png">
                    </div>
                    <p>Barang dikemas dan siap bayar secara COD</p>
                </div>
            </div>
    </section>
    <!-- Step user End -->

    <!-- Why Furtabe start -->
    <section class="why">
        <h2>Kenapa Harus Furtable?</h2>
        <p>Ada beberapa fitur unggulan yang spesial untuk furniture lovers, sehingga membuat 
        <br />kalian nyaman dan senang saat berbelanja disini</p>
        <div class="container">
            <div class="card">
                <div class="inner-card">
                    <img src="img/why/card.svg">
                    <h3>Pembayaran mudah</h3>
                    <p>Pembayaran sangat mudah dan cepat sehingga mempercepat transaksimu</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/why/discount.svg">
                    <h3>Banyak promo</h3>
                    <p>Ada banyak sekali promo tiap minggu yang menanti anda selalu</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/why/delivery.svg">
                    <h3>Pengemasan cepat</h3>
                    <p>Pengemasan dan <br />pengiriman dilakukan <br />dihari yang sama</p>
                </div>
            </div>
            <div class="card">
                <div class="inner-card">
                    <img src="img/why/location.svg">
                    <h3>Seluruh Indonesia</h3>
                    <p>Furtable mampu mengirimkan sampai seluruh Indonesai tanpa terkecuali</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Furtabe End -->

    <!-- row 1 start -->
    <section id="row1" class="row1">
        <div class="row1-img">
            <img src="img/home/row1.png">
        </div>
        <div class="content">
            <h2>Kursi klasik dengan kesan elegant</h2>
            <p>Tidak selamanya yang klasik pasti kuno atau ketinggalan jaman, di industri 4.0 sekarang semua model baik klasik mupun modern bisa tetap menghiasi ruanganmu dengan mewah, dan tidak selamanya yang clasic adalah barang lama.</p>   
            <a href="#" class="cta">Cek barang</a>
        </div>
    </section>
    <!-- row 1 End -->
    
    <!-- row 2 start -->
    <section id="row2" class="row2">
        <div class="content">
            <h2>Desain minimalis dengan warna hitam putih</h2>
            <p>Anda menyukai desain minimalis dengan warna yang elegant? kami juga menyediakan beberapa pilihan dengan desain minimalist modern elegan dan yang pasti akan membuat ruangan anda menjadi lebih mewah dan memberikan vibe positif bak modern home</p>   
            <a href="#" class="cta">Cek barang</a>
        </div>
        <div class="row2-img">
            <img src="img/home/row2.png">
        </div>
    </section>
    <!-- row 2 End -->
    
    <!-- row 3 start -->
    <section id="row3" class="row3">
        <div class="row3-img">
            <img src="img/home/row3.png">
        </div>
        <div class="content">
            <h2>Kayu jati adalah kayu terbaik untuk furniture</h2>
            <p>Apakah anda pecinta kayu jati yang khas dengan serat kayunya? anda bisa cek disini untuk tau ukiran ukiran yang anda sukai tanpa rasa ragu, selain terkenal serat yang indah kayu jati ini juga diukir oleh pengrajin yang handal</p>   
            <a href="#" class="cta">Cek barang</a>
        </div>
    </section>
    <!-- row 3 End -->

    <!-- row 4 start -->
    <section id="row4" class="row4">
        <div class="content">
            <h2>Desain minimalis dengan warna hitam putih</h2>
            <p>Anda menyukai desain minimalis dengan warna yang elegant? kami juga menyediakan beberapa pilihan dengan desain minimalist modern elegan dan yang pasti akan membuat ruangan anda menjadi lebih mewah dan memberikan vibe positif bak modern home</p>   
            <a href="#" class="cta">Cek barang</a>
        </div>
        <div class="row4-img">
            <img src="img/home/row2.png">
        </div>
    </section>
    <!-- row 4 End -->
    
    <!-- Produk populer start -->
    <section class="populer">
        <h1>Produk Populer</h1>
        <div class="container">
            <div class="card">
                <img src="img/populer/populer1.png">
                <div class="deskripsi">
                    <h4>Kursi kayu jati</h4>
                    <h3>Kursi kayu jati</h3>
                    <h2>Rp 6.500.000</h2>
                </div>
                <a href="#">Lihat detail</a>
            </div>
            <div class="card">
                <img src="img/populer/populer2.png">
                <div class="deskripsi">
                    <h4>Kursi kayu jati</h4>
                    <h3>Kursi kayu jati</h3>
                    <h2>Rp 6.500.000</h2>
                </div>
                <a href="#">Lihat detail</a>
            </div>
            <div class="card">
                <img src="img/populer/populer3.png">
                <div class="deskripsi">
                    <h4>Kursi kayu jati</h4>
                    <h3>Kursi kayu jati</h3>
                    <h2>Rp 6.500.000</h2>
                </div>
                <a href="#">Lihat detail</a>
            </div>
            <div class="card">
                <img src="img/populer/populer4.png">
                <div class="deskripsi">
                    <h4>Kursi kayu jati</h4>
                    <h3>Kursi kayu jati</h3>
                    <h2>Rp 6.500.000</h2>
                </div>
                <a href="#">Lihat detail</a>
            </div>
        </div>
        <div class="cta">
            <a href="#">Lihat Semua</a>
        </div>
    </section>
    <!-- Produk populer end-->

    <!-- Diskon Start -->
    <section id="diskon" class="Diskon">
        <img src="img/poster.png">
    </section>
    <!-- Diskon End -->

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
                            <img src="img/footer/logowhite.png">
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
                            <img src="img/footer/playstore.png">
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