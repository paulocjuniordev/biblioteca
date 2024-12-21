<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\SaidaController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [LivroController::class, 'index'])->name('dashboard');


    Route::get('leitor', [LeitorController::class, 'index'])->name('leitor');
    Route::get('leitor_create', [LeitorController::class, 'create'])->name('leitor_create');
    Route::post('leitor_store', [LeitorController::class, 'store'])->name('leitor_store');
    Route::get('leitor_show', [LeitorController::class, 'show'])->name('leitor_show');
    Route::delete('/excluir_leitor/{id}', [LeitorController::class, 'destroy'])->name('excluir_leitor');
    Route::get('/editar_leitor/{id}', [LeitorController::class, 'edit'])->name('editar_leitor');
    Route::put('/leitor_update/{id}', [LeitorController::class, 'update'])->name('leitor_update');

    Route::get('livro', [LivroController::class, 'index'])->name('livro');
    Route::get('livro_create', [LivroController::class, 'create'])->name('livro_create');
    Route::post('livro_store', [LivroController::class, 'store'])->name('livro_store');
    Route::get('livro_show', [LivroController::class, 'show'])->name('livro_show');
    Route::delete('/excluir_livro/{id}', [LivroController::class, 'destroy'])->name('excluir_livro');
    Route::get('/editar_livro/{id}', [LivroController::class, 'edit'])->name('editar_livro');
    Route::put('/livro_update/{id}', [LivroController::class, 'update'])->name('livro_update');

    Route::get('saida', [SaidaController::class, 'index'])->name('saida');
    Route::get('saida_create', [SaidaController::class, 'create'])->name('saida_create');
    Route::post('saida_store', [SaidaController::class, 'store'])->name('saida_store');
    Route::get('saida_show', [SaidaController::class, 'show'])->name('saida_show');
    Route::delete('/excluir_saida/{id}', [SaidaController::class, 'destroy'])->name('excluir_saida');
    Route::get('/editar_saida/{id}', [SaidaController::class, 'edit'])->name('editar_saida');
    Route::put('/saida_update/{id}', [SaidaController::class, 'update'])->name('saida_update');

});








