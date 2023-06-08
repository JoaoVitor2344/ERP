<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $fillable = [
        'id2',
        'cep',
        'rua',
        'cidade',
        'estado',
        'complemento'
    ];
}
