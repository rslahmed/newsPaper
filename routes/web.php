<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//guest
Route::middleware(['guest'])->group(function () {
    //home
    Route::get('/', 'HomeController@index')->name('home');

    //article
    Route::get('/article/view/{id}', 'ArticleController@show')->name('article.show');
    Route::get('/article/filter/{id}', 'ArticleController@filterCat')->name('article.filter');
    Route::get('/article/filter_sub/{id}', 'ArticleController@filterSubCat')->name('article.filter_sub');
    Route::post('/article/search/', 'ArticleController@search')->name('article.search');

    //comment
    Route::post('/comment/store', 'CommentController@store')->name('comment.store');
    Route::post('/comment_reply/store', 'CommentReplyController@store')->name('comment_reply.store');

    //subscriber
    Route::post('/subscriber/store', 'SubscriberController@store')->name('subscriber.store');
    Route::get('/subscriber/unsubscribe/{id}/{token}', 'SubscriberController@unsubscribe')->name('subscriber.unsubscribe');

    // contact us
    Route::get('/contact_us/', 'HomeController@contact_us')->name('contact_us');
    Route::post('/contact_us/form', 'HomeController@contactForm')->name('contact.form');
});



//auth
Route::middleware(['auth'])->group(function () {
//dashboard
    Route::get('/admin', 'DashboardController@index')->name('dashboard');

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
    Route::get('/subscriber/destroy/{id}', 'SubscriberController@destroy')->name('subscriber.destroy');

//journalist
    Route::get('/journalist/index', 'JournalistController@index')->name('journalist.index');
    Route::get('/journalist/destroy/{id}', 'JournalistController@destroy')->name('journalist.destroy');
    Route::get('/email', 'SubscriberController@welcomeEmail');

//general setting
    Route::get('/general_setting', 'DashboardController@general')->name('general');
    Route::post('/general_setting/store', 'DashboardController@generalSetup')->name('general.setup');
});

