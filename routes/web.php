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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/news', function () {
    return view('news', ['news' => [
        'ria' =>  "/news_catalog/ria",
        'ngs' =>  "/news_catalog/ngs",
        'kommersant' =>  "/news_catalog/kommersant"
    ]]);
});

Route::get('/news_catalog/ria', function () {
    return view('/template', [
        'item' => file_get_contents('https://ria.ru/')
    ]);
});

Route::get('/news_catalog/ngs', function () {
    return view('/template', [
        'item' => file_get_contents('https://ngs.ru/')
    ]);
});

Route::get('/news_catalog/kommersant', function () {
    return view('/template', [
        'item' => file_get_contents('https://kommersant.ru/')
    ]);
});
