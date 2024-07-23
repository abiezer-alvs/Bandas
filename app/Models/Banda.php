<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    public $timestamps = false;

    public $rules = [
        'banda' => 'required|min:3|max:100',
        'musica' => 'required',
        'comentario' => 'required|min:3|max:100',
        'imagem' => 'required'
    ];

    public $messages = [
        'banda.required' => 'O campo banda é obrigatório',
        'banda.min' => 'O campo banda é obrigatório',
        'musica.required' => 'O campo musica é obrigatório',
        'comentario.required' => 'O campo comentario é obrigatório',
        'comentario.min' => 'O campo comentario deve ter no mínio 3 caracteres',
        'imagem.required' => 'O campo imagem é obrigatório'
    ];

    protected $fillable = [
        'banda',
        'musica',
        'comentario',
        'imagem'
    ];
}
