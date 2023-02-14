<?php

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

// вывод главной страницы
Route::get('/', function () {
    // return view('welcome');
    return "Hello, world!";
});

// вывод чего-то вроде каталога
Route::get('/users', function() {
    return "This is a users page";
});

// вывод одного пользователя
Route::get('/users/{id}', function($id) {
    return "This is a user page #" . $id;
});

Route::get('/books', function() {
    return "this page with all books";
});

Route::get('/books/{name}', function($name) {
    return "the title of this book is '" . $name . "'";
});