<?php

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('template', function () {
    return view('template');
});
//Rotas para dashboard de projetos e recuros de projetos
Route::get('/', function () {
    return view('principal');
});
Route::resource('/projetos', 'ProjetosController');
