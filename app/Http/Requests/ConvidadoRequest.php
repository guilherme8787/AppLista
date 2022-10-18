<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvidadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'data_palestra' => 'required',
            'hora_palestra' => 'required',
            'plenario_ou_modulo' => 'required',
            'qual_o_painel' => 'required',
        ];
    }
}
