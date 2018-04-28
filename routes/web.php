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

Route::get('/', function () {
    return view('site.index');
});
Route::get('/login', function () {
    return view('site.login');
});
Route::get('/cadastro', function () {
    return view('site.cadastro');
});
Route::get('/detalhe', function () {
    return view('site.detalhe');
});
Route::get('/produtos', function () {
    return view('site.produtos');
});
Route::get('/checkout', function () {
    return view('site.checkout');
});
Route::get('/contato', function () {
    return view('site.contato');
});