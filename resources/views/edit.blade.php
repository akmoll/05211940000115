@extends('template')

@section('konten')
<div class="container">
<a href="/pegawai"> Kembali Ke Menu Utama </a>
<br/>

@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="bulan">Nama</label>
            <input  class="form-control" id="nama" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
          </div>
        <div class="form-group">
            <label for="bulan">Jabatan</label>
            <input  class="form-control" id="jabatan" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
          </div>
        <div class="form-group">
            <label for="bulan">Umur</label>
            <input  class="form-control" id="umur" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
          </div>
        <div class="form-group">
            <label for="bulan">Alamat</label>
            <input  class="form-control" id="alamat" required="required" name="alamat" value="{{ $p->pegawai_alamat }}"></textarea> <br/>
          </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

</div>
@endsection
