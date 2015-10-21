<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', 'ProdutosController@index');
Route::get('books/create', 'BooksController@create');
Route::post('books/store', 'BooksController@store');

Route::get('/materiais', function (\DemoLaravel\Produto $produto) {
    $produtos = $produto->all();
    dd($produtos);
//    return 'Listagem de Produtos';
});
