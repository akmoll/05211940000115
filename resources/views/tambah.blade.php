@extends('template')

@section('konten')

<div class="container">
    <h3> Data Pegawai </h3>

    <a href="/pegawai"> Kembali </a>

    <form action="/pegawai/store" method="post">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="bulan">Nama</label>
            <input  class="form-control" id="nama" type="text" name="nama" required="required">
          </div>
        <div class="form-group">
            <label for="bulan">Jabatan</label>
            <input  class="form-control" id="jabatan" type="text"  name="jabatan" required="required">
          </div>
        <div class="form-group">
            <label for="bulan">Umur</label>
            <input  class="form-control" id="umur" type="text" name="umur" required="required">
          </div>
        <div class="form-group">
            <label for="bulan">Alamat</label>
            <input  class="form-control" id="alamat" type="text" name="alamat" required="required">
          </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
</div>
@endsection
