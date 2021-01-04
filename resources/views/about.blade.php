<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')



  <div class ="container" style="margin-top:30px; margin-bottom:30px">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h1 class="display-4" style="margin-bottom:70px">Tentang Kami</h1>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div style="margin-bottom:20px">
              <h2>Tentang PlayStation Store</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <p1><b>PlayStation Store</b> merupakan anak perusahaan dari PlayStation. <b>PlayStation Store</b> merupakan situs toko online bagi pengguna Sony PlayStation 3, PlayStation 4, dan PlayStation 5.
                Selain itu, <b>PlayStation Store</b> juga merupakan situs untuk membeli segala yang berkaitan dengan konsol game PlayStation,
                 mulai dari konsol PlayStation, PlayStation Controller, Bundle Game PlayStation terbaru, baik berbayar mau pun gratis, dan produk PlayStation lainnya.</p1>
              <br>
              <p1>Kunjungi produk kami untuk mengetahui lebih lanjut.</p1>
              <br><br>
              <button type="button" class="btn btn-primary"><a href="{{ url('product') }}" class="text-white">Produk Kami</a></button>
            </div>
            <div class="col-sm-6">
              <br>

              <!--Format HTML Template Carousel: "https://startbootstrap.com/template/shop-homepage"-->
              <div id="carouselAbout" class="carousel slide sm-6" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselAbout" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselAbout" data-slide-to="1"></li>
                    <li data-target="#carouselAbout" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="img/playstation-store-ps-store.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/playstation-store-stuff.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/PS-Logo.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
