<?php

namespace App\Services\Mail\Contracts;

interface SendInvitationServiceContract
{
    /**
     * @param string $email
     * @return void
     */
    public function sendToSpeakerByMail(string $email): void;
}
