<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatimentController;



Route::get('/home', [BatimentController::class, 'index'])->name('home');

Route::get('/create', [BatimentController::class, 'create'])->name('create');

Route::post('/NewBatiment', [BatimentController::class, 'store'])->name('store');

Route::get('/Batiment/{id}/show',[BatimentController::class, 'show'])->name('show');

Route::get('/Batiment/{id}/edit',[BatimentController::class, 'edit'])->name('edit');

Route::put('/Batiment/{id}/update',[BatimentController::class, 'update'])->name('update');

Route::delete('/Batiment/{id}/delete',[BatimentController::class, 'destroy'])->name('delete');

