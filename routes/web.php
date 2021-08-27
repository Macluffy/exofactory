<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use App\Http\Controllers\EleveController;

// batiments

Route::get('/Batiments', [BatimentController::class, 'index'])->name('home');

Route::get('/create', [BatimentController::class, 'create'])->name('create');

Route::post('/NewBatiment', [BatimentController::class, 'store'])->name('store');

Route::get('/Batiment/{id}/show',[BatimentController::class, 'show'])->name('show');

Route::get('/Batiment/{id}/edit',[BatimentController::class, 'edit'])->name('edit');

Route::put('/Batiment/{id}/update',[BatimentController::class, 'update'])->name('update');

Route::delete('/Batiment/{id}/delete',[BatimentController::class, 'destroy'])->name('delete');

// Formations

Route::get('/Formations', [FormationController::class, 'index'])->name('home2');

Route::get('/create2', [FormationController::class, 'create'])->name('create2');

Route::post('/NewFormations ', [FormationController::class, 'store'])->name('store2');

Route::get('/Formations/{id}/show',[FormationController::class, 'show'])->name('show2');

Route::get('/Formations/{id}/edit',[FormationController::class, 'edit'])->name('edit2');

Route::put('/Formations/{id}/update',[FormationController::class, 'update'])->name('update2');

Route::delete('/Formations/{id}/delete',[FormationController::class, 'destroy'])->name('delete2');

// Typeformations

Route::get('/Typeformations', [TypeformationController::class, 'index'])->name('home3');

Route::get('/create3', [TypeformationController::class, 'create'])->name('create3');

Route::post('/NewTypeformations', [TypeformationController::class, 'store'])->name('store3');

Route::get('/Typeformations/{id}/show',[TypeformationController::class, 'show'])->name('show3');

Route::get('/Typeformations/{id}/edit',[TypeformationController::class, 'edit'])->name('edit3');

Route::put('/Typeformations/{id}/update',[TypeformationController::class, 'update'])->name('update3');

Route::delete('/Typeformations/{id}/delete',[TypeformationController::class, 'destroy'])->name('delete3');

// Eleves

Route::get('/Eleves', [EleveController::class, 'index'])->name('home4');

Route::get('/create4', [EleveController::class, 'create'])->name('create4');

Route::post('/NewEleves', [EleveController::class, 'store'])->name('store4');

Route::get('/Eleve/{id}/show',[EleveController::class, 'show'])->name('show4');

Route::get('/Eleve/{id}/edit',[EleveController::class, 'edit'])->name('edit4');

Route::put('/Eleve/{id}/update',[EleveController::class, 'update'])->name('update4');

Route::delete('/Eleve/{id}/delete',[EleveController::class, 'destroy'])->name('delete4');