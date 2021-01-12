<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //ambil data tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->paginate(5);

        //kirim data ke view
        return view('mahasiswa.mhs', ['mahasiswa' => $mahasiswa]);

    }

    //method tampilkan form tambah
    public function tambah()
    {
        $mahasiswa = DB::table('mahasiswa')->paginate(5);
        //ke view tambah
        return view('mahasiswa.tambah' , ['mahasiswa' => $mahasiswa]);
    }

    public function insert(Request $request)
    {
        //insert data tabel mahasiswa
        DB::table('mahasiswa')->insert([
            'NRP' => $request->nrp,
            'Nama' => $request->nama,
            'Jurusan' => $request->jurusan,
            'IPK' => $request->ipk

        ]);

        //alihkan ke halaman awal
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        //ambil data mahasiswa berdasar id
        $mahasiswa = DB::table('mahasiswa')->where('NRP', $id)->get();

        //passing ke view edit
        return view('mahasiswa.edit',['mahasiswa' => $mahasiswa ]);
    }

    public function hapus($id)
    {
        //hapus data mahasiswa berdasar id yang dipilih
        DB::table('mahasiswa')->where('NRP', $id)->delete();

        //alihkan ke halaman pendapatan
        return redirect('/mahasiswa');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table mahasiswa sesuai pencarian data
		$mahasiswa = DB::table('mahasiswa')
		->where('Nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data minuman ke view awal
		return view('mahasiswa.mhs',['mahasiswa' => $mahasiswa]);

	}
}
