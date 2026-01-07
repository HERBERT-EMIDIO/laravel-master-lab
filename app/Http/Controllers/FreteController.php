<?php

namespace App\Http\Controllers;

use App\Enums\FretesStatus;
use App\Models\Frete;
use Illuminate\Http\Request;

class FreteController extends Controller
{
    public function store(Request $request){

        $dados = $request->all();
        $dados['codigo_rastreio'] = 'TESTEEE123';
        $dados ['status'] = FretesStatus::EM_TRANSITO;

        $frete = Frete::create($dados);


        return $frete;
    }
}
