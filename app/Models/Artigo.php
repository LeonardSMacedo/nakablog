<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    // Campos permitidos para mass assignment
    protected $fillable = ['titulo', 'conteudo', 'imagem'];
}
