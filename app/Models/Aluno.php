<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $fillable = ['nome','nascimento'];

    public function livros(){
        return $this -> hasMany(Livro::class, 'id_aluno', 'id');
    }
}
