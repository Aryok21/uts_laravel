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

Route::get('profile', function () {
    $Kodeproduk = ['BRG001,BRG002'];
    return view('profile', compact('Kodeproduk'));
});

Route::get('array', function () {
    for ($i = 1; $i <= 5; $i++) {
        echo 'hello world ' . $i . 'x<br>';
    }
});
