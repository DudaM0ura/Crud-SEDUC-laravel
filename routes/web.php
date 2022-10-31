<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('alunos')->group(function(){
    Route::get('/', [AlunoController::class, 'index'])->name('index.aluno');
    Route::get('/create', [AlunoController::class, 'create'])->name('create.aluno');
    Route::post('/store', [AlunoController::class, 'store'])->name('store.aluno');
    Route::get('/edit/{id}',[AlunoController::class, 'edit'])->name('edit.aluno');
    Route::put('/update/{id}', [AlunoController::class, 'update'])->name('update.aluno');
    Route::delete('/destroy/{id}', [AlunoController::class, 'destroy'])->name('destroy.aluno');
    
});

Route::prefix('livros')->group(function(){
    Route::get('/{id}', [LivroController::class, 'index'])->name('index.livro');
    Route::get('/create/{id?}', [LivroController::class, 'create'])->name('create.livro');
    Route::post('/store', [LivroController::class, 'store'])->name('store.livro');
    Route::get('/edit/{id}', [LivroController::class, 'edit'])->name('edit.livro');
    Route::put('/update/{id}', [LivroController::class, 'update'])->name('update.livro');
    Route::delete('/destroy/{id}', [LivroController::class, 'destroy'])->name('destroy.livro');
});