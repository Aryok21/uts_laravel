<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('tambah', function () {
    return view('tambah');
});

Route::get('profile', function () {
    $Kodeproduk = ['BRG001,BRG002'];
    $jumlah = count($Kodeproduk);
    return view('profile', compact('Kodeproduk', 'jumlah'));
});
