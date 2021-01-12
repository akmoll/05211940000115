@extends('template')

@section('konten')

<div class="container">
    <h3> Data Mahasiswa </h3>

    <a href="/mahasiswa"> Kembali </a>

    <form action="/mahasiswa/input" method="post">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input  class="form-control" id="nrp" type="number" name="nrp" required="required">
          </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input  class="form-control" id="nama" type="text"  name="nama" required="required">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input  class="form-control" id="jurusan" type="text"  name="jurusan" required="required">
          </div>
          <div class="form-group">
            <label for="ipk">IPK</label>
            <input  class="form-control" id="ipk" type="float"  name="ipk" required="required">
          </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
</div>
@endsection
