<?php

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

Route::get('/','CategoryController@index');
Route::get('/category/{id}', 'CategoryController@listBooksByID')->name('listBooks')->where('id','[0-9]+');
Route::get('/books', 'BookController@index')->name("books.index");
Route::get('/books/{id}','BookController@find')->where('id','[0-9]+');
Route::resource('authors','AuthorController');
