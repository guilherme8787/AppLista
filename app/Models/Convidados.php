<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convidados extends Model
{
    use HasFactory;

    protected $table = 'convidados';

    protected $fillable = [
        'name',
        'company',
        'title',
        'email',
        'telefone',
        'linkedin',
        'data_palestra',
        'hora_palestra',
        'plenario_ou_modulo',
        'qual_o_painel',
        'categoria',
        'status',
        'modelo_de_participacao',
        'cupom',
        'created_at',
        'updated_at',
    ];
}
