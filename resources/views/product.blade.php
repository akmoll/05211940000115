<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">List Product</h1>


            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/ps5.jpg" width="75%" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/stick.jpg" width="55%" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/img3.jpg" width="95%" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/ps5.jpg" width="30%" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">Playstation 5</a>
                                </h4>
                                <h5>Rp8.000.000</h5>
                                <p class="card-text">Tersedia hanya warna putih.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/ps4.jpg" width="50%" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">Playstation 4</a>
                                </h4>
                                <h5>Rp4.500.000-Rp4.000.000</h5>
                                <p class="card-text">Tersedia warna hitam, putih, merah, dan biru </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/stickcontrol.jpg" width="10%" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">Console Joystick</a>
                                </h4>
                                <h5>750.000-2.000.000</h5>
                                <p class="card-text">PS5: Tersedia warna putih
                                                     PS4: Tersedia warna hitam, putih, merah, dan biru</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/kasetps5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">Kaset PS5</a>
                                </h4>
                                <h5>1.000.000-1.250.000</h5>
                                <p class="card-text">Tersedia : Spiderman : Miles Morales, NBA 2K21, FIFA 21, Demon's Souls, Sackboy A big adventure</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/kasetps4.png" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">Kaset PS4</a>
                                </h4>
                                <h5>500.000-850.000</h5>
                                <p class="card-text">Tersedia : Spiderman, Tekken 7, Red Death Redemption, NBA 2K21, FIFA 21, Naruto : Ultimate Ninja Storm 4</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/psaccesorries.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ url('form') }}">PS Accessories</a>
                                </h4>
                                <h5>Rp 1.500.000-2.500.000</h5>
                                <p class="card-text">Tersedia : Headset, VR, Wireless charging stick, Driver steering wheel (Buat game racing) dll</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    @endsection


