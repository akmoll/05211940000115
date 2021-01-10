<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MinumanController extends Controller
{
    public function index()
    {
        //ambil data tabel minuman
        $minuman = DB::table('minuman')->paginate(5);

        //kirim data ke view
        return view('minum.minum', ['minuman' => $minuman]);

    }

    //method tampilkan form tambah
    public function tambah()
    {
        $minuman = DB::table('minuman')->paginate(5);
        //ke view tambah
        return view('minum.tambah' , ['minuman' => $minuman]);
    }

    public function insert(Request $request)
    {
        //insert data tabel minuman
        DB::table('minuman')->insert([
            'merkminuman' => $request->memi,
            'stockminuman' => $request->smi,
            'tersedia' => $request->tersedia
        ]);

        //alihkan ke halaman awal
        return redirect('/minuman');
    }

    public function edit($id)
    {
        //ambil data minuman berdasar id
        $minuman = DB::table('minuman')->where('kodeminuman', $id)->get();

        //passing ke view edit
        return view('minum.edit',['minuman' => $minuman ]);
    }

    public function update(Request $request)
    {
        //update data minuman
        DB::table('minuman')->where('kodeminuman', $request->id)->update([
            'merkminuman' => $request->memi,
            'stockminuman' => $request->smi,
            'tersedia' => $request->tersedia
        ]);

        //alihkan ke halaman utama
        return redirect('/minuman');
    }

    public function hapus($id)
    {
        //hapus data minuman berdasar id yang dipilih
        DB::table('minuman')->where('kodeminuman', $id)->delete();

        //alihkan ke halaman pendapatan
        return redirect('/minuman');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table minuman sesuai pencarian data
		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();

    		// mengirim data minuman ke view awal
		return view('minum.minum',['minuman' => $minuman]);

	}
}
