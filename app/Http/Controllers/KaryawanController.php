<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function indexkaryawan()
	{
        //mengambil data dari table pegawai
        $karyawan = DB::table('karyawan')->get();
        // mengirim data pegawai ke view index
        return view('indexkaryawan',['karyawan' => $karyawan]);
	}

	// method untuk hapus data pegawai
	public function hapuskaryawan($kodekaryawan)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodekaryawan',$kodekaryawan)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/indexkaryawan');
	}

    public function addkaryawan()
	{
		// memanggil view add
		return view('addkaryawan');
	}

	// method untuk insert data ke database
	public function storekaryawan(Request $request)
	{
// Check if kodekaryawan already exists
$existingkodekaryawan = DB::table('karyawan')->where('kodekaryawan', $request->kodekaryawan)->first();

if ($existingkodekaryawan) {
    return redirect('/indexkaryawan/addkaryawan')->withErrors(['error' => ' kodepegawai SUDAH ADA di tabel']);
}

        if ($existingkodekaryawan) {
            return redirect('indexkaryawan/addkaryawan');
        }
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodekaryawan' => $request->kodekaryawan,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman awal
		return redirect('/indexkaryawan');

	}


}
