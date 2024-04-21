<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professor'; // Nome correto da tabela no banco de dados
    protected $primaryKey = 'id'; // Se sua chave primária não se chama 'id', especifique aqui

    protected $fillable = ['rp', 'nome']; // Campos que podem ser preenchidos em massa

    // Outros atributos e métodos do modelo...
}
