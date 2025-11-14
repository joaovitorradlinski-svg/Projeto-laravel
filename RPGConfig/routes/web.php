<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'welcome');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', [CampanhaController::class, 'index'])->name('dashboard');

    Route::resource('campanhas', CampanhaController::class);
    Route::resource('locais', LocalController::class);
    Route::resource('personagens', PersonagemController::class);


    Route::prefix('conta')->name('conta.')->group(function () {
        Route::get('/', [ContaController::class, 'index'])->name('index');
        Route::get('/show', [ContaController::class, 'show'])->name('show');
        Route::get('/editar', [ContaController::class, 'edit'])->name('edit');
        Route::put('/editar', [ContaController::class, 'update'])->name('update');
        Route::delete('/deletar', [ContaController::class, 'destroy'])->name('destroy'); 
    });


    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
