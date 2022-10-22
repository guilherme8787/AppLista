<?php

namespace App\Repository\Convidados;

use App\Models\Convidados;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ConvidadosRepositoryInterface
{
    /**
     * Devolve uma lista de convidados
     */
    public function getList();

    /**
     * Salva o convidado no banco
     *
     * @param array $data
     */
    public function store(array $data);

    /**
     * Devolve o convidado pelo ID
     *
     * @param int $id
     */
    public function get(int $id): Collection;

    /**
     * @param string $email
     * @return Convidados
     */
    public function getByMail(string $email): Convidados;
}
