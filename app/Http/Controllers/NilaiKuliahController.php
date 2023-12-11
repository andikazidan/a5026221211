<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function indexnilaikuliah()
	{
    	// mengambil data dari table pegawai
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('indexnilaikuliah',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function addnilaikuliah()
	{

		// memanggil view tambah
		return view('addnilaikuliah');

	}

	// method untuk insert data ke table pegawai
	public function storenilaikuliah(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/indexnilaikuliah');

	}
}
