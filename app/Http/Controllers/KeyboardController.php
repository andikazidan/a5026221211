<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeyboardController extends Controller
{
    //INDEX
	public function indexkeyboard()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $keyboard = DB::table('keyboard')->get();

    	// mengirim data pegawai ke view index
		return view('indexkeyboard',['keyboard' => $keyboard]);

	}
    //READ
	// method untuk menampilkan view form add pegawai
	public function addkeyboard()
	{
		// memanggil view tambah
		return view('addkeyboard');
	}

    //CREATE
	// method untuk insert data ke table pegawai
	public function storekeyboard(Request $request)
	{
		// insert data ke table pegawai
        //if statement untuk ketersediaan
        if($request->stockkeyboard > 0) {
            $request->tersedia='Y';
        }else {
            $request->tersedia='N';
        }
		DB::table('keyboard')->insert([
			'kodekeyboard' => $request->kodekeyboard,
			'merkkeyboard' => $request->merkkeyboard,
			'stockkeyboard' => $request->stockkeyboard,
            'tersedia' => $request->tersedia
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/indexkeyboard');

	}

    //UPDATE
	// method untuk keyboard
	public function editkeyboard($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$keyboard = DB::table('keyboard')->where('kodekeyboard',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkeyboard',['keyboard' => $keyboard]);

	}

    //UPDATE
	// update data pegawai
	public function updatekeyboard(Request $request)
	{
        //if statement untuk ketersediaan
        if($request->stockkeyboard > 0) {
            $request->tersedia='Y';
        }else {
            $request->tersedia='N';
        }
		// update data pegawai
		DB::table('keyboard')->where('kodekeyboard',$request->kodekeyboard)->update([
			'kodekeyboard' => $request->kodekeyboard,
			'merkkeyboard' => $request->merkkeyboard,
			'stockkeyboard' => $request->stockkeyboard,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/indexkeyboard');
	}

    //DELETE
	// method untuk hapus data pegawai
	public function hapuskeyboard($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keyboard')->where('kodekeyboard',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/indexkeyboard');
	}

    public function carikeyboard(Request $request)
	{
		// menangkap data pencarian
		$carikeyboard = $request->carikeyboard;

    		// mengambil data dari table pegawai sesuai pencarian data
		$keyboard = DB::table('keyboard')
		->where('merkkeyboard','like',"%".$carikeyboard."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkeyboard',['keyboard' => $keyboard, 'carikeyboard'=> $carikeyboard]);

	}

    public function viewkeyboard($id)
    {
        $keyboard = DB::table('keyboard')
		->where('kodekeyboard', $id)
        ->get();

        return view('viewkeyboard',['keyboard' => $keyboard]);

    }
}
