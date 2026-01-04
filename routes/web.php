<?php

use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use Illuminate\Support\Facades\Route;



//Controller
Route::get('/', HomeController::class);
//RastreamantoController
Route::get('/rastreamento',RastreamentoController::class)->name('frete.rastreamento');
//HistoricoController
Route::get('/historico',HistoricoController::class)->name('frete.historico');
