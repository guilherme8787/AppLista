<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvidadoRequest;
use App\Repository\Convidados\ConvidadosRepositoryInterface;
use App\Services\Mail\Contracts\SendInvitationServiceContract;
use Exception;
use Illuminate\Http\Request;

class Convidados extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        private ConvidadosRepositoryInterface $convidados,
        private SendInvitationServiceContract $sendService
    ) {
    }

    /**
     * Salva os dados do novo convidado
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        try {
            $this->convidados->store($request->all());
            $this->sendService->sendToSpeakerByMail($request->get('email'));

            redirect()->route('home', ['success' => true]);
        } catch (Exception $e) {
            redirect()->route('home', [
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
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
