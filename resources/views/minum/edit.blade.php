@extends('template')

@section('konten')
<div class="container">
<a href="/minuman"> Kembali Ke Menu Utama </a>
<br/>

@foreach($minuman as $m)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodeminuman }}"> <br/>
        <div class="form-group">
            <label for="memi">Merk Minuman</label>
            <input  class="form-control" id="memi" type="text" required="required" name="memi" value="{{ $m->merkminuman }}">
          </div>
        <div class="form-group">
            <label for="smi">Stok Minuman</label>
            <input  class="form-control" id="smi" type="number" required="required" name="smi" value="{{ $m->stockminuman }}">
          </div>
          <div class="form-group">
            <label for="memi">Tersedia ?</label>
            <select id="tersedia" name="tersedia" required="required" class="form-control"><br/>
                <option value="Y"> Y </option>
                <option value="N"> N </option>
            </select>
          </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

</div>
@endsection
