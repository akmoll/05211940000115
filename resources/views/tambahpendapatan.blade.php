@extends('template')

@section('konten')

<div class="container">
    <h3>Data Pendapatan</h3>
    <a href="/pendapatan"> Kembali ke metu Utama </a>
    <br>
    <br>

    <form action="/pendapatan/input" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="idp">ID Pegawai</label>
            <select id="idp" name="idp" required="required" class="form-control"> <br/>
                @foreach ($pegawai as $x)
                <option value="{{$x -> pegawai_id}}"> {{$x -> pegawai_nama}} </option>
                @endforeach
            </select>
          </div>
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <input  class="form-control" id="bulan" type="number"  name="bulan" required="required">
          </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input  class="form-control" id="tahun" type="number" name="tahun" required="required">
          </div>
        <div class="form-group">
            <label for="gaji">Gaji</label>
            <input  class="form-control" id="gaji" type="number" type="number" name="gaji" required="required">
          </div>
        <div class="form-group">
            <label for="tunjangan">Tunjangan</label>
            <input  class="form-control" id="tunjangan" type="number" type="number" name="tunjangan" required="required">
          </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

</div>
@endsection
