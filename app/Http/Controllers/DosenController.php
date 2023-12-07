<?php

namespace App\Http\Controllers; //package

use Illuminate\Http\Request; //import

class DosenController extends Controller
{
    public function index(){
        return "<h2>halo ini adalah method index</h2>";
    }

    public function biodata(){
    //PASSING VARIABLE
        //usually there's a programming logic here
        $nama = "Andika";
        $lagufav = "How to Dissappear Completely";
        $usia = "19";
        $album = ["AM","Freudian","Blonde"];
        //the right one is used for a variable in this file
        //the left variable is use to call the variable in .blade.php file
    	return view('biodata', ['nama' => $nama, 'lagufav' => $lagufav, 'usia' => $usia, 'album' => $album]);
    }

    public function showjam($jam){

    	return "<h3>sekarang jam " . $jam . "</h3>";

    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah mengisikan Nama : " . $nama . ", Alamat : " . $alamat . ", NRP : " . $nrp . "<br> Isi asli dari class request" . $request;
    }

    public function formulir(){
        return view('formulir');
    }
}
