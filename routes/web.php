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



Auth::routes();

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard', [
        'user' => \App\User::all(),
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');

//sub category
Route::get('/get_subcategory', 'SubCategoryController@getSubcategory');

//post
Route::get('/post/add', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/index', 'PostController@index')->name('post.index');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
Route::get('/post/destroy/{id}', 'PostController@destroy')->name('post.destroy');

//category
Route::get('/category/index', 'CategoryController@index')->name('category.index');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');


