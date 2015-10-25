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
Route::get('produtos/import', ['as' => 'produtos.import', 'uses' => 'ProdutosController@import']);

Route::resource('books', 'BooksController');

//Route::get('books', ['as' => 'books', 'uses' => 'BooksController@index']);
//Route::get('books/create', ['as' => 'books.create', 'uses' => 'BooksController@create']);
//Route::get('books/store', ['as' => 'books.store', 'uses' => 'BooksController@store']);
