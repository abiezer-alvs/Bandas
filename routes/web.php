<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandaController;

Route::get('bandas', [BandaController::class, 'card_bandas'])->middleware('auth');

Route::get('dados', [BandaController::class, 'dados'])->name('dados');
Route::post('recebe_dados', [BandaController::class, 'recebe_dados'])->name('recebe_dados');

Route::get('registros', [BandaController::class, 'registros'])->name('registros')->middleware('auth');

Route::get('aviso', [BandaController::class, 'aviso'])->middleware('auth');

Route::get('/edita/{id}', [BandaController::class, 'edita'])->name('edita');
Route::post('/atualiza/{id}', [BandaController::class, 'atualiza'])->name('atualiza');

Route::get('/apaga/{id}', [BandaController::class, 'apaga'])->name('apaga');

Route::get('/', function() {return view('welcome');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

