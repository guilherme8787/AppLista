<?php

namespace App\Repository\Convidados;

use App\Models\Convidados;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

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

    /**
     * @inheritdoc
     */
    public function get(int $id): Collection
    {
        return $this->model->where('id', $id)->get();
    }

    /**
     * @inheritDoc
     */
    public function getByMail(string $email): Convidados
    {
        return $this->model->where('email', $email)->get()->first();
    }
}
