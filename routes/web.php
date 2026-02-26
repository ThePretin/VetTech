<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/sobre', 'sobre')->name('sobre');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/atendimento', 'atendimento')->name('atendimento');
Route::view('/contato', 'contato')->name('contato');
