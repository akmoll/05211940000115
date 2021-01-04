@extends('template')

@section('konten')


    <div class="container">
    <p>Cari Data Pendapatan :</p>
	<form action="/pendapatan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari ID Pegawai" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

    <h3>Data Pendapatan</h3>
    <a href="/pendapatan/tambah"> + Tambah Pendapatan Baru </a>
    <br>
    <br>

    <table class="table table-hover">
        <tr>
            <th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi </th>
        </tr>
        @foreach($pendapatan as $p)
        <tr>
            <td>{{ !empty($p->pegawai) ? $p->pegawai->pegawai_nama:'' }}</td>
			<td>{{ $p->Bulan }}</td>
            <td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
            <td>
                <a href="/pendapatan/edit/{{ $p->ID}}"> Edit </a>
                <a href="/pendapatan/hapus/{{ $p->ID}}"> Hapus </a>
            </td>
        </tr>
            @endforeach
        </table>

        <br>
        Halaman : {{ $pendapatan->currentPage() }} <br/>
	    Jumlah Data : {{ $pendapatan->total() }} <br/>
        Data Per Halaman : {{ $pendapatan->perPage() }} <br/>

        {{ $pendapatan->links() }}

    </div>

    @endsection
