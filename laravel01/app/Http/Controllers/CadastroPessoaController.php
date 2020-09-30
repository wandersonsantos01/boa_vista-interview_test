<?php

namespace App\Http\Controllers;

use App\Models\Pessoas;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CadastroPessoaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function etapa1()
    {
        $params = [
            'title' => 'Etapa 1',
            'fieldLabel' => 'Insira seu RG',
            'field' => [
                'name' => 'rg',
                'placeHolder' => 'RG',
                'type' => 'text'
            ],
            'buttonLabel' => 'Próximo Passo',
            'nextStep' => 'etapa2'
        ];

        return view('default', $params);
    }

    public function etapa2()
    {
        $params = [
            'title' => 'Etapa 2',
            'fieldLabel' => 'Insira seu Nome Completo',
            'field' => [
                'name' => 'nome',
                'placeHolder' => 'Nome',
                'type' => 'text'
            ],
            'buttonLabel' => 'Próximo Passo',
            'nextStep' => 'etapa3'
        ];

        return view('default', $params);
    }

    public function etapa3()
    {
        $params = [
            'title' => 'Etapa 3',
            'fieldLabel' => 'Insira sua Data de Nascimento',
            'field' => [
                'name' => 'data_nascimento',
                'placeHolder' => 'Data de Nascimento',
                'type' => 'date'
            ],
            'buttonLabel' => 'Próximo Passo',
            'nextStep' => 'etapa4'
        ];

        return view('default', $params);
    }

    public function etapa4()
    {
        $params = [
            'title' => 'Etapa 4',
            'fieldLabel' => 'Insira o nome da sua mãe completo',
            'field' => [
                'name' => 'nome_mae',
                'placeHolder' => 'Nome da sua mãe',
                'type' => 'text'
            ],
            'buttonLabel' => 'Finalizar',
            'nextStep' => 'fim'
        ];

        return view('default', $params);
    }

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
