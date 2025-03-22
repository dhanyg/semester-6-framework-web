<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersegiPanjangController;

Route::get('/', function () {
    return view('home');
});

Route::get('persegipanjang/{panjang}/{lebar}', [PersegiPanjangController::class, 'index'])->name('persegipanjang');
Route::get('persegipanjang/{panjang}', function() {
    return view('errors.missing-lebar');
});
Route::get('persegipanjang', function() {
    return view('errors.missing-panjang-lebar');
});
