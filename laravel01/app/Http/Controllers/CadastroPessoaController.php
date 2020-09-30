<?php

namespace App\Http\Controllers;

use App\Models\Pessoas;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CadastroPessoaController extends BaseController
{

    public function store(Request $request)
    {
        $dataNascimento = $request->data_nascimento ? DateTime::createFromFormat('Y-m-d', $request->data_nascimento) : null;

        $pessoa = new Pessoas();
        $pessoa->rg = $request->rg;
        $pessoa->nome = $request->nome ?? null;
        $pessoa->data_nascimento = $dataNascimento;
        $pessoa->nome_mae = $request->nome_mae ?? null;
        $pessoa->save();

        return response()->json($pessoa);
    }

    public function update($id, Request $request)
    {
        $params = $request->all();

        if (isset($params['data_nascimento'])) {
            $params['data_nascimento'] = DateTime::createFromFormat('Y-m-d', $params['data_nascimento']);
        }

        Pessoas::where('id', $id)->update($params);

        return response()->json(Pessoas::find($id));
    }

}
