<?php

namespace App\Repository\Convidados;

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
}
