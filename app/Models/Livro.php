<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livros';
    protected $fillable = ['id_aluno','titulo','ano'];

    public function aluno(){
        return $this -> belongsTo(Aluno::class, 'id_aluno', 'id');
    }
}
