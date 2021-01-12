@extends('template')

@section('konten')


<div class="container">
    <p>Cari Data Mahasiswa : </p>
	<form action="/mahasiswa/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Mahasiswa" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

    <h3>Data Mahasiswa</h3>
    <a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru </a>
    <br>
    <br>

    <table class="table table-hover">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
			<th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->NRP }}</td>
            <td>{{ $m->Nama }}</td>
            <td>{{ $m->Jurusan }}</td>
            <td>{{ $m->IPK }}</td>
            <td>
                <a href="/mahasiswa/hapus/{{ $m->NRP}}"> Hapus </a>
            </td>
        </tr>
            @endforeach
        </table>

        <br>
        Halaman : {{ $mahasiswa->currentPage() }} <br/>
	    Jumlah Data : {{ $mahasiswa->total() }} <br/>
        Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>

        {{ $mahasiswa->links() }}

    </div>

    @endsection
