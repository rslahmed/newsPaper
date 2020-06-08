<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('frontend/home');
});

//dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

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

// subcategory
Route::get('/subcategory/index', 'SubCategoryController@index')->name('subcategory.index');
Route::get('/subcategory/filter/{id}', 'SubCategoryController@catFilter')->name('subcategory.filter');
Route::post('/subcategory/store', 'SubCategoryController@store')->name('subcategory.store');
Route::post('/subcategory/update/{id}', 'SubCategoryController@update')->name('subcategory.update');
Route::get('/subcategory/destroy/{id}', 'SubCategoryController@destroy')->name('subcategory.destroy');
Route::get('/get_subcategory', 'SubCategoryController@getSubcategory')->name('subcategory.getsub');

//tag
Route::get('/tag/index', 'TagController@index')->name('tag.index');
Route::post('/tag/store', 'TagController@store')->name('tag.store');
Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
Route::get('/tag/destroy/{id}', 'TagController@destroy')->name('tag.destroy');

//Headlines
Route::get('/headline/index', 'HeadlineController@index')->name('headline.index');
Route::post('/headline/store', 'HeadlineController@store')->name('headline.store');
Route::post('/headline/update/{id}', 'HeadlineController@update')->name('headline.update');
Route::get('/headline/destroy/{id}', 'HeadlineController@destroy')->name('headline.destroy');

//subscriber
Route::get('/subscriber/index', 'SubscriberController@index')->name('subscriber.index');
Route::post('/subscriber/store', 'SubscriberController@store')->name('subscriber.store');
Route::get('/subscriber/destroy/{id}', 'SubscriberController@destroy')->name('subscriber.destroy');

//journalist
Route::get('/journalist/index', 'JournalistController@index')->name('journalist.index');
Route::get('/journalist/destroy/{id}', 'JournalistController@destroy')->name('journalist.destroy');
