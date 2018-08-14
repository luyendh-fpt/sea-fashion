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

Route::resource('admin/product', 'ProductController');
Route::resource('admin/category', 'CategoryController');

Route::get('/master-layout', function (){
    return view('layout.master-v2');
});

Route::get('/form-example', function (){
    return view('pages.form');
});
Route::get('/list-example', function (){
    return view('pages.table');
});
