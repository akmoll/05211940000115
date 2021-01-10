@extends('template')

@section('konten')

<div class="container">
    <h3> Data Minuman </h3>

    <a href="/minuman"> Kembali </a>

    <form action="/minuman/input" method="post">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="memi">Merk Minuman</label>
            <input  class="form-control" id="memi" type="text" name="memi" required="required">
          </div>

        <div class="form-group">
            <label for="bulan">Stok Minuman</label>
            <input  class="form-control" id="smi" type="number"  name="smi" required="required">
          </div>
          <div class="form-group">
            <label for="tersedia">Tersedia ?</label>
            <select id="tersedia" name="tersedia" required="required" class="form-control"> <br/>
                <option value="Y"> Y </option>
                <option value="N"> N </option>
            </select>
          </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
</div>
@endsection
