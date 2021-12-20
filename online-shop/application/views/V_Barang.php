<!DOCTYPE html>
<html>
    <head>
        <title>
            E-Commerce
        </title>

        <!-- Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        <!-- MyCSS -->
        <style type="text/css">
            .small-img-group{
                display: flex;
                justify-content: space-between;
            }

            .small-img-col{
                flex-basis: 24%;
                cursor: pointer;
            }

            .body-section .small-img-col img {
                height: 100%;
            }

            .body-section input{
                width: 50px;
                height: 50px;
                padding-left: 10px;
                margin-bottom: 15px;
                font-size: 16px;
                margin-right: 10px;
                margin-left: 10px;
            }

            .buy-btn {
                position: block;
                border: none;
                background: #198754;
                color: #fff;
                opacity: 1;
                transition: 0.3s all;
                width: 180px;
                height: 40px;
            }

            .btn-kurang {
                background-color: #198754;
                width: 40px;
                height: 40px;
                border: none;
                outline: none;
                border-radius: 8px;
                font-size: 20px;
            }

            .btn-tambah {
                background-color: #198754;
                width: 40px;
                height: 40px;
                border: none;
                outline: none;
                border-radius: 8px;
                font-size: 20px;
            }

            .barang-lainnya .product img {
                height: 65%
            }

            .footer .container .about a{
                color: #000;
                text-decoration: none;
            }

            .white-font{
                color: #fff;
            }

            .footer .small-img-col img {
                height: 100%
            }
        </style>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?=base_url("assets/img-coffee/new-logo.png")?>" width="90px" height="32px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Body -->
        <section class="body-section my-5 pt-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-12 col-12">
                        <img class="img-fluid rounded w-100 pb-2" id="main-img" src="<?=base_url("assets/img-coffee/kopi1.jpg")?>" >

                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="<?=base_url("assets/img-coffee/kopi1.jpg")?>" width="100%" class="small-img rounded" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="<?=base_url("assets/img-coffee/kopi2.jpg")?>" width="100%" class="small-img rounded" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="<?=base_url("assets/img-coffee/kopi3.jpg")?>" width="100%" class="small-img rounded" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="<?=base_url("assets/img-coffee/kopi4.jpg")?>" width="100%" class="small-img rounded" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <h2>Bubuk Kopi Java Jampit</h2>
                        <h4 class="py-3">Rp51.000</h4>
                        <div class="barang col-lg-6 col-md-12 col-12">
                            <button class="btn btn-success btn-kurang">-</button>
                            <input type="number" class="jumlah" value="1" readonly>
                            <button class="btn btn-success btn-tambah">+</button>
                        </div>
                        <button class="btn btn-success rounded">Masukkan Keranjang</button>
                        <h4 class="mt-4 mb-4">Deskripsi</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                    </div>
                </div>
              </div>
        </section>
        <!-- Akhir Body -->

        <!-- Barang Lainnya -->

        <section class="barang-lainnya my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Kopi Lainnya</h3>
                <hr class="mx-auto">
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="product text-center col-lg-3 col-md-6 col-12">
                        <img class="img-fluid rounded mb-3" src="<?=base_url("assets/img-coffee/sidikalang.png")?>" alt="">
                        <h5>Kopi Robusta Sidikalang</h5>
                        <h6>Rp 45.000</h6>
                        <div class="my-2"><button class="btn btn-secondary rounded">Details</button></div>
                        <div><button class="btn btn-success rounded">Buy</button></div>
                    </div>
                    <div class="product text-center col-lg-3 col-md-6 col-12">
                        <img class="img-fluid rounded mb-3" src="<?=base_url("assets/img-coffee/lampung.png")?>" alt="">
                        <h5>Kopi Robusta Lampung</h5>
                        <h6>Rp 60.000</h6>
                        <div class="my-2"><button class="btn btn-secondary rounded">Details</button></div>
                        <div><button class="btn btn-success rounded">Buy</button></div>
                    </div>
                    <div class="product text-center col-lg-3 col-md-6 col-12">
                        <img class="img-fluid rounded mb-3" src="<?=base_url("assets/img-coffee/flores.png")?>" alt="">
                        <h5>Kopi Manggarai Robusta</h5>
                        <h6>Rp 53.000</h6>
                        <div class="my-2"><button class="btn btn-secondary rounded">Details</button></div>
                        <div><button class="btn btn-success rounded">Buy</button></div>
                    </div>
                    <div class="product text-center col-lg-3 col-md-6 col-12">
                        <img class="img-fluid rounded mb-3" src="<?=base_url("assets/img-coffee/bengkulu.png")?>" alt="">
                        <h5>Kopi Robusta Bengkulu</h5>
                        <h6>Rp 35.000</h6>
                        <div class="my-2"><button class="btn btn-secondary rounded">Details</button></div>
                        <div><button class="btn btn-success rounded">Buy</button></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Akhir Barang Lainnya -->

        <!-- Footer -->
        <footer class="footer">
            <div class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm mt-5 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <a class="navbar-brand" href="#">
                                <img src="<?=base_url("assets/img-coffee/new-logo.png")?>" width="90px" height="32px">
                            </a>
                            <h6 class="mt-2 ms-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                        </div>
                        <div class="about col-lg-3 col-md-6 col-12">
                            <h5 class="white-font">About</h5>
                            <div class="mt-3">
                                <a href="#"><h6>About E-Commerce</h6></a>
                            </div>
                            <div class="mt-2">
                                <a href="#"><h6>Blog</h6></a>
                            </div>
                            <div class="mt-2">
                                <a href="#"><h6>Syarat dan Ketentuan</h6></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5 class="white-font">Contact Us</h5>
                            <h6 class="white-font">Address</h6>
                            <div>Telkom Bandung</div>
                            <h6 class="white-font">Phone</h6>
                            <div>(+62) 824-7892-9821</div>
                            <h6 class="white-font">Email</h6>
                            <div>Email@example.com</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5 class="white-font">Instagram Collections</h5>
                            <div class="small-img-group">
                                <div class="small-img-col">
                                    <img src="<?=base_url("assets/img-coffee/ig1.jpg")?>" width="100%" class="small-img rounded" alt="">
                                </div>
                                <div class="small-img-col">
                                    <img src="<?=base_url("assets/img-coffee/ig2.jpg")?>" width="100%" class="small-img rounded" alt="">
                                </div>
                                <div class="small-img-col">
                                    <img src="<?=base_url("assets/img-coffee/ig3.jpg")?>" width="100%" class="small-img rounded" alt="">
                                </div>
                                <div class="small-img-col">
                                    <img src="<?=base_url("assets/img-coffee/ig4.jpg")?>" width="100%" class="small-img rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!-- Jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <!-- My Javascript -->
        <script type="text/javascript">
            var tambah;
            var kurang;

            var buttonTambah = $(".btn-tambah");
            var buttonKurang = $(".btn-kurang");

            var tambah = buttonTambah.click(function() {
                var $nilai = $(this).parent(".barang").find(".jumlah");
                $nilai.val(Number($nilai.val())+1 );
            });

            var kurang = buttonKurang.click(function() {
                var $nilai = $(this).parent(".barang").find(".jumlah");
                var amount = Number($nilai.val());
                if (amount > 1){
                    $nilai.val(amount-1);
                }
            });

            var MainImg = document.getElementById('main-img');
            var SmallImg = document.getElementsByClassName('small-img');

            SmallImg[0].onclick = function() {
                MainImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function() {
                MainImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function() {
                MainImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function() {
                MainImg.src = SmallImg[3].src;
            }
        </script>
    </body>
</html>