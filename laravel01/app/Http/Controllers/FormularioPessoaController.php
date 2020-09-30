<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormularioPessoaController extends BaseController
{

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

        return view('form', $params);
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

        return view('form', $params);
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

        return view('form', $params);
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

        return view('form', $params);
    }

}
