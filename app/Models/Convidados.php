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
        'email',
        'data_palestra',
        'hora_palestra',
        'plenario_ou_modulo',
        'qual_o_painel',
    ];
}
