<?php

namespace App\Repository\Convidados;

use Illuminate\Database\Eloquent\Model;

class ConvidadosRepositoryEloquent implements ConvidadosRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        return $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function getList()
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function store($data)
    {
        return $this->model->create($data);
    }
}
