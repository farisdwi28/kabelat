<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/BuatAkun', function () {
    return view('BuatAkun');
});

Route::get('/ProgramDispusip', function () {
    return view('ProgramDispusip');
});

Route::get('/Pengumuman', function () {
    return view('Pengumuman');
});