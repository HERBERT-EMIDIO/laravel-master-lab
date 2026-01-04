<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use Illuminate\Support\Facades\Route;



//Controller
route::get('/', HomeController::class);
//RastreamantoController
route::get('/rastreamento',RastreamentoController::class)->name('frete.rastreamento');
