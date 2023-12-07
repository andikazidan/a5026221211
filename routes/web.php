<?php

use Illuminate\Support\Facades\Route;
//import java.io.*;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//System.out.println();
Route::get('/',
    function() {
        return view('welcome');
    }
);

Route::get('jumlah', function () {
    $hasil = 2 + 3;
    return "hasil penjumlahan 2 dan 3 = " . (string)$hasil;
});

Route::get('welcome', function () {
	return view('welcome');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('get-week1', function () {
	return view('week1');
});

Route::get('get-week2', function () {
	return view('week2');
});

Route::get('get-week3', function () {
	return view('week3');
});

Route::get('get-week4', function () {
	return view('week4');
});

Route::get('get-week5', function () {
	return view('week5');
});

//@ is a seperator for calling a method
Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampilkan/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');