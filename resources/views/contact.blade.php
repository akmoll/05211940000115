<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')
    <!--Isi Contact Us dikerjakan oleh Muhammad Taqi Akmaluddin-05211940000115-->
  <!-- Format HTML Template Team dari https://startbootstrap.com/previews/agency -->
  <section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/andre.jpg" alt="" />
                    <h4>Muhammad Andre Hanafi</h4>
                    <p class="text-muted">05211940000105</p>
                    <p>Merupakan Mahasiswa S-1 Sistem Informasi kelahiran Jakarta, 27 Februari 2001. Saat ini berdomisili di Bekasi</p>
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/mendekatkan"><i class="fab fa-twitter"></i></a>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/ivan.jpg" alt="" />
                    <h4>Ivan Pramudhana Bernadi</h4>
                    <p class="text-muted">05211940000112</p>
                    <p>Merupakan Mahasiswa S-1 Sistem Informasi kelahiran Malang, 27 September 2001. Saat ini berdomisili di Malang</p>
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/ivanpramudhana?s=06"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100008168258188"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/akmal.png" alt="" />
                    <h4>M Taqi Akmaluddin</h4>
                    <p class="text-muted">05211940000115</p>
                    <p>Merupakan Mahasiswa S-1 Sistem Informasi kelahiran Surabaya, 29 September 2000. Saat ini berdomisili di Surabaya</p>
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/akmooll"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/akmalcuyz"><i class="fab fa-facebook-f"></i></a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
        </div>
    </div>
</section>
@endsection





