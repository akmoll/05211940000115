<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playstation Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ url('index') }}">PlayStation Store</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('product') }}">Our Product</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


          <!--Isi Index dikerjakan oleh Muhammad Andre Hanafi-05211940000105-->
          <!--Format HTML Template Carousel: "https://startbootstrap.com/template/shop-homepage"-->
          <header>
            <div id="carouselHome" class="carousel slide sm-6" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselHome" data-slide-to="1"></li>
                  <li data-target="#carouselHome" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <img class="d-block img-fluid" src="img/playstation-store-ps-store.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block img-fluid" src="img/ps5-ps4.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block img-fluid" src="img/spidermanheader2.jpg" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          </header>


@yield('konten')


<footer>
    <footer class="bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-4" style="text-align:center">
              <h5 class="text-white" style="margin-top:50px; margin-bottom:20px">Hubungi Kami</h5>
              <a class="text-white" href="{{ url('contact') }}" >Muhammad Andre Hanafi</a><br>
              <a class="text-white" href="{{ url('contact') }}" >Ivan Pramudhana Bernadi</a><br>
              <a class="text-white" href="{{ url('contact') }}">Muhammad Taqi Akmaluddin</a><br>
              <br>
            </div>
            <div class="col-sm-4" style="text-align:center">
              <h5 class="text-white" style="margin-top:50px; margin-bottom:20px">Produk Kami</h5>
              <a class="text-white" href="{{ url('product') }}" >PlayStation 5</a><br>
              <a class="text-white" href="{{ url('product') }}" >PlayStation 4</a><br>
              <a class="text-white" href="{{ url('product') }}" >Downloadable Content</a><br>
              <a class="text-white" href="{{ url('product') }}" >PlayStation Controller</a><br>
              <a class="text-white" href="{{ url('product') }}" >Lainnya</a><br>
              <br>
            </div>
            <div class="col-sm-4" style="text-align:center">
              <h5 class="text-white" style="margin-top:50px; margin-bottom:20px">Sumber</h5>
              <a class="text-white" href="https://startbootstrap.com/template/shop-homepage" >Start Bootstrap</a><br>
            </div>
          </div>
          <div class="row" style="margin-top:25px">
            <div class="col-sm-12" style="text-align:center">
              <p style="color: white"><b>Pemrograman Web C &copy; 2020</b></p>
            </div>
          </div>
        </div>
</footer>

</body>
</html>
