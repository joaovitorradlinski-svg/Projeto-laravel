<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonagemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'campanha_id' => 'required|exists:campanhas,id',
            'nome' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|max:10000',
        ];
    }
}
