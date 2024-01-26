<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titulo" => 'required',
            "resumo"=> 'required',
            "duracao" => 'required',
            "ano" => 'required',
            "classificacao" => 'required',
            "fotoCapa" => 'required',
            "url" => 'required',
            "palavraChave" => 'required',
            "categoria_id" => 'required'
        ];
    }
    public function messages()
    {
        return [
            "titulo.required" => 'O campo titulo e obrigatorio.',
            "resumo.required" => 'O campo resumo e obrigatorio.',
            "duracao.required" => 'O campo duracao e obrigatorio.',
            "ano.required" => 'O campo ano e obrigatorio.',
            "classificacao.required" => 'O campo classificacao e obrigatorio.',
            "fotoCapa.required" => 'O campo foto e obrigatorio.',
            "url.required" => 'O campo URL e obrigatorio.',
            "palavraChave.required" => 'O campo palavra-chave e obrigatorio.',
            "categoria_id.required" => 'O campo categoria e obrigatorio.'
        ];
    }
}
