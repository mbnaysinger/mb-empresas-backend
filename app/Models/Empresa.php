<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'cnpj', 'razao_social', 'cnae_principal', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado'
    ];
}