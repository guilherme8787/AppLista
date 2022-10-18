<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvidadoRequest;
use App\Repository\Convidados\ConvidadosRepositoryInterface;
use Illuminate\Http\Request;

class Convidados extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private ConvidadosRepositoryInterface $convidados)
    {

    }

    /**
     * Salva os dados do novo convidado
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        dd($this->convidados->store($request->all()));
    }

    /**
     * Retorna uma view do convidado a partir do id
     */
    public function get(int $id)
    {
        $data = [];
        $convidado = $this->convidados->get($id);
        if (! $convidado->isEmpty()) {
            $data = $convidado->toArray()[0];
        }

        return view(
            'convidado.index',
            [
                'convidado' => $data
            ]
        );
    }
}
