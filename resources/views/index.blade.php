<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')


  <div class="container" style="margin-top: 100px; margin-bottom:50px; text-align:center">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-4">PlayStation 5</h1>
        <p>Rasakan pengalaman baru yang belum pernah dirasakan dalam bermain dengan PlayStation 5</p><br>
      </div>
      <div class="col-lg-12">
        <img class="img-fluid rounded" src="img/ps5.jpg" alt=""><br>
        <button type="button" class="btn btn-primary"><a href="{{ url('form') }}" class="text-white">Pesan Sekarang</a></button>
      </div>
    </div>

    <div style="margin-top: 100px; text-align:center">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-4">Marvel's Spider-Man: Miles Morales</h1>
          <p>Berantas kejahatan bersama Miles Morales si Spider-Man</p><br>
        </div>
        <div class="col-lg-12">
          <img class="img-fluid rounded" src="img/kasetps5.jpg" alt="" width="400px" length="730px"><br>
          <button type="button" class="btn btn-primary"><a href="{{ url('form') }}" class="text-white">Pesan Sekarang</a></button>
        </div>
      </div>
    </div>

    <h1 class="display-4" style="margin-top:100px">Terbaru</h1>
    <div class="row" style="margin-bottom:30px">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="{{ url('form') }}"><img class="card-img-top; img-fluid" src="img/psaccesorries.jpg" alt="" width="190px" length="340px"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{ url('form') }}">PlayStation VR</a>
            </h4>
            <h6>Rp7.000.000</h6>
            <p class="card-text">Rasakan sensasi baru dalam bermain PlayStation dengan PlayStation VR</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="{{ url('form') }}"><img class="card-img-top; img-fluid" src="img/asasinkred.jpg" alt="" width="200px" length="377px"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{ url('form') }}">Assassins Creed: Valhalla</a>
            </h4>
            <h6>Rp750.000</h6>
            <p class="card-text">Bermain di dalam dunia penuh petualangan Assassins Creed</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="{{ url('form') }}"><img class="card-img-top; img-fluid" src="img/detstrending.jpg" alt="" width="210px" length="310px"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{ url('form') }}">Death Stranding</a>
            </h4>
            <h6>Rp850.000</h6>
            <p class="card-text">Sebuah ledakan misterius menciptakan kejadian supernatural di bumi</p>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ url('product') }}" style="text-align:center; font-size:120%">Lainnya</a>
  </div>

  @endsection
