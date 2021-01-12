@extends('template')

@section('konten')
<div class="container">
<a href="/minuman"> Kembali Ke Menu Utama </a>
<br/>

@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="nrp">NRP</label>
            <input  class="form-control" id="nrp" type="number" required="required" name="nrp" value="{{ $m->NRP }}" disabled>
          </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input  class="form-control" id="nama" type="text" required="required" name="nama" value="{{ $m->Nama }}">
          </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input  class="form-control" id="jurusan" type="text" required="required" name="jurusan" value="{{ $m->Jurusan }}">
          </div>
          <div class="form-group">
            <label for="ipk">IPK</label>
            <input  class="form-control" id="ipk" type="float" required="required" name="ipk" value="{{ $m->IPK }}">
          </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

</div>
@endsection
