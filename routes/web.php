<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    // return view("welcome");
    return view('layouts.beranda');
});

Route::get("/beranda", function () {
    // return view("welcome");
    return view('layouts.beranda');
});

Route::get("/about", function () {
    // return view("welcome");
    return view('layouts.about');
});

Route::get("/salam", function () {
    return "Assalamualaikum";
});

Route::get("/pegawai/{nama}/{divisi}", function ($nama, $divisi) {
    return "Nama pegawai : " . $nama . " divisi : " . $divisi;
});

Route::get("/kabar", function () {
    return view("kondisi");
});

Route::get("/nilai", function () {
    return view("nilai");
});

Route::get("/daftarnilai", function () {
    return view("daftar_nilai");
});

Route::resource('pengarang', 'PengarangController');
Route::resource('penerbit', 'PenerbitController');
Route::resource('kategori', 'KategoriController');
Route::resource('buku', 'BukuController');
Route::resource('anggota', 'AnggotaController');
Route::resource('peminjaman', 'PeminjamanController');
