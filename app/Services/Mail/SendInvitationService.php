<?php

namespace App\Services\Mail;

use App\Mail\Convite;
use App\Repository\Convidados\ConvidadosRepositoryInterface;
use App\Services\Mail\Contracts\SendInvitationServiceContract;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;

class SendInvitationService implements SendInvitationServiceContract
{
    private ConvidadosRepositoryInterface $convidado;

    /**
     * @param ConvidadosRepositoryInterface $convidado
     */
    public function __construct(ConvidadosRepositoryInterface $convidado)
    {
        $this->convidado = $convidado;
    }

    /**
     * @param string $email
     * @return void
     */
    public function sendToSpeakerByMail(string $email): void
    {
        $convidado = $this->convidado->getByMail($email);
        Mail::to($convidado->email)->send(new Convite($convidado));
    }
}
