<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendapatan;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
        //ambil data tabel pendapatan
        $pendapatan = pendapatan::paginate(5);

        //kirim data ke view
        return view('pendapatan', ['pendapatan' => $pendapatan]);

    }

    //method tampilkan form tambah
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->get();
        //ke view tambah
        return view('tambahpendapatan' , ['pegawai' => $pegawai]);
    }

    public function insert(Request $request)
    {
        //insert data tabel pendapatan
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->idp,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);

        //alihkan ke halaman awal
        return redirect('/pendapatan');
    }

    public function edit($id)
    {
        //ambil data pendapatan berdasar id
        $pegawai = DB::table('pegawai')->get();
        $pendapatan = DB::table('pendapatan')->where('ID', $id)->get();

        //passing ke view edit
        return view('editpendapatan',['pendapatan' => $pendapatan ], ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        //update data pendapatan
        DB::table('pendapatan')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idp,
            'Bulan' => $request->bulan,
            'Tahun' => $request->tahun,
            'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
        ]);

        //alihkan ke halaman utama
        return redirect('/pendapatan');
    }

    public function hapus($id)
    {
        //hapus data pendapatan berdasar id yang dipilih
        DB::table('pendapatan')->where('ID', $id)->delete();

        //alihkan ke halaman pendapatan
        return redirect('/pendapatan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pendapatan = DB::table('pendapatan')
		->where('IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('pendapatan',['pendapatan' => $pendapatan]);

	}
}
