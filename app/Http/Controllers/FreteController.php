<?php

namespace App\Http\Controllers;

use App\Enums\FretesStatus;
use App\Helpers;

use App\Http\Requests\StoreFreteRequest;
use App\Models\Frete;


class FreteController extends Controller
{
    public function store(StoreFreteRequest $request){

        $dados = $request->all();
        $dados['codigo_rastreio'] = Helpers::geraCodigoRastreioUnico();
        $dados ['status'] = FretesStatus::EM_TRANSITO;

        $frete = Frete::create($dados);


        return $frete;
    }
}
