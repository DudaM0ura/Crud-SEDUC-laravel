<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function index($id)
    {
        $aluno = Aluno::find($id);

        //return $qtdLivros = $aluno->livros->count();
        $livros = Livro::where('id_aluno', $id)->with('aluno')->get();
        return view('livros.index', compact('livros', 'aluno'));
    }

    public function create($id)
    {
        $aluno = Aluno::find($id);
        $livro = Livro::get();
        return view('livros.create', compact('aluno', 'livro'));
    }

    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect()->route('index.aluno')->with('message', 'Livro salvo com sucesso!');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);
        $livroAtualizou = $livro->update($request->all());
       
        return redirect()->route('index.livro', $livro->id_aluno)->with('message', 'Livro Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Livro::destroy($id);
    }
}
