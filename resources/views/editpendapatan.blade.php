@extends('template')

@section('konten')

<div class="container">
    <a href="/pendapatan"> Kembali ke metu Utama </a>
    <br/>

    @foreach($pendapatan as $p)
    <form action="/pendapatan/update" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label id="idp">ID Pegawai</label>
            <select id="idp" name="idp" required="required" class="form-control"> <br/>
                @foreach ($pegawai as $x)
                <option value="{{$x -> pegawai_id}}" @if ($p->IDPegawai == $x->pegawai_id) selected="selected" @endif> {{$x -> pegawai_nama}} </option>
                @endforeach
            </select>
         </div>
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <input  class="form-control" id="bulan" type="number"  name="bulan" required="required" value="{{ $p->Bulan}}">
          </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input  class="form-control" id="tahun" type="number" name="tahun" required="required" value="{{ $p->Tahun}}">
          </div>
        <div class="form-group">
            <label for="gaji">Gaji</label>
            <input  class="form-control" id="gaji" type="number" name="gaji" required="required" value="{{ $p->Gaji}}">
          </div>
        <div class="form-group">
            <label for="tunjangan">Tunjangan</label>
            <input  class="form-control" id="tunjangan" type="number" name="tunjangan" required="required" value="{{ $p->Tunjangan}}">
          </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
    @endforeach
</div>

    @endsection


