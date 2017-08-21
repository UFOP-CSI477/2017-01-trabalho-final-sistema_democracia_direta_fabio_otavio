<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

//Rotas para dashboard de projetos e recuros de projetos

Route::resource('/users', 'UserController');
Route::resource('/votos', 'VotosController');
Route::resource('/projetos', 'ProjetosController');
Route::get('/votar/{idProjeto}',
    [
        'uses' => 'VotosController@votar',
        'as'   => 'votar'
      ]);
Route::get('/ativos',
    [
        'uses' => 'ProjetosController@ativos',
        'as'   => 'ativos'
      ]);
Route::get('/encerrados',
    [
        'uses' => 'ProjetosController@encerrados',
        'as'   => 'encerrados'
      ]);
Route::get('users/password', function () {
    return view('users.password');
});
Route::get('users/email', function () {
    return view('users.email');
});
Route::get('users/profile', function () {
    return view('users.profile');
});

Auth::routes();

Route::get('teste', function () {
    return view('teste');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('alterar/password', function () {
    return view('users.password');
});
Route::get('alterar/email', function () {
    return view('users.email');
});
Route::get('alterar/profile', function () {
    return view('users.profile');
});
Route::get('/painelvotar', function () {
    return view('painelvotar');
});

Route::post('users/updatepassword', 'UserController@updatepassword');
Route::post('users/updateemail', 'UserController@updateemail');
Route::post('users/updateprofile', 'UserController@updateprofile');
