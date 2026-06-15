<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-office/home');
});


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('back-office.login');
    });

     Route::get('/hero-backoffice', function () {
        return view('back-office.hero');
    })->name('backoffice.hero');

    Route::get('/edit-hero', function () {
        return view('back-office.edit-hero');
    })->name('backoffice.edit-hero');


     Route::get('/tambah-hero', function () {
        return view('back-office.tambah-hero');
    })->name('backoffice.tambah-hero');


    Route::get('/backoffice-tentangsaya', function () {
        return view('back-office.tentang-saya');
    })->name('backoffice.tentangsaya');

    Route::get('/edit-tentangsaya', function () {
        return view('back-office.edit-tentangsaya');
    })->name('backoffice.edit-tentangsaya');

    Route::get('/tambah-tentangsaya', function () {
        return view('back-office.tambah-tentangsaya');
    })->name('backoffice.tambah-tentangsaya');
});

