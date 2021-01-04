@extends('template')

@section('konten')

<div class="container">
    <h3>Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>
    <br>
    <br>


    <table class="table table-hover">
        @foreach($pegawai as $p)

            <tr>
                <td>Nama</td>
                <td>{{$p->pegawai_nama}}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>{{$p->pegawai_jabatan}}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>{{$p->pegawai_umur}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$p->pegawai_alamat}}</td>
            </tr>
        @endforeach

    </table>
    <h4> Daftar Pendapatan</h4>

    <table class="table table-hover">

        <tr>
            <th>Bulan</th>
			<th>Tahun</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
        </tr>

        @foreach($pendapatan as $p)

        <tr>
            <td>{{ $p->Bulan }}</td>
            <td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
        </tr>
        @endforeach

    </table>
</div>
    @endsection


