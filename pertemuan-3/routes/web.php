<?php

use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/matakuliah');

Route::get('matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::post('matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
Route::get('matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::get('matakuliah/{id}', [MataKuliahController::class, 'show'])->name('matakuliah.show');
Route::get('matakuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
