@extends('template')

@section('konten')


    <div class="container">
    <p>Cari Data Minuman :</p>
	<form action="/minuman/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Minuman" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

    <h3>Data Stok Minuman</h3>
    <a href="/minuman/tambah"> + Tambah Minuman Baru </a>
    <br>
    <br>

    <table class="table table-hover">
        <tr>
            <th>Merk Minuman</th>
			<th>Stok Minuman</th>
            <th>Tersedia ?</th>
            <th>Opsi</th>
        </tr>
        @foreach($minuman as $m)
        <tr>
            <td>{{ $m->merkminuman }}</td>
            <td>{{ $m->stockminuman }}</td>
            <td>{{ $m->tersedia }}</td>
            <td>
                <a href="/minuman/edit/{{ $m->kodeminuman}}"> Edit </a>
                -
                <a href="/minuman/hapus/{{ $m->kodeminuman}}"> Hapus </a>
            </td>
        </tr>
            @endforeach
        </table>

        <br>
        Halaman : {{ $minuman->currentPage() }} <br/>
	    Jumlah Data : {{ $minuman->total() }} <br/>
        Data Per Halaman : {{ $minuman->perPage() }} <br/>

        {{ $minuman->links() }}

    </div>

    @endsection
