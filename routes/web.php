<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//index
Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'index',
]);

// zapisanie adresu e-mail z index do bazy mailingowej
Route::post('save', [
    'uses' => 'NewsletterController@store',
    'as' => 'email.save',
]);

// dodawanie komentarzy widok
Route::get('/blog/addcomments/{id}', [
    'uses' => 'PostController@addcomments',
    'as' => 'blog.addcomments',
]);

Route::any('/blog/savecomments/{id}', [
    'uses' => 'PostController@store',
    'as' => 'blog.savecomments',
]);

//blog
Route::get('/blog', [
    'uses' => 'PostController@blog_index',
    'as' => 'blog',
]);

Route::get('blog/{name}', [
    'uses' => 'PostController@entry',
    'as' => 'posts',
]);

//absolwenci
Route::get('absolwenci', [
    'uses' => 'GraduatesController@index',
    'as' => 'absolwenci',
]);

Route::get('absolwent/{id}', [
    'uses' => 'GraduatesController@single_graduate',
    'as' => 'absolwent',
]);

//kurs
Route::get('kurs', function () {
    return view('szkolenia');
});

//formularz kontaktowy
Route::get('kontakt', [
    'as' => 'contact',
    'uses' => 'ContactFormController@get',
]);

Route::post('kontakt', [
    'as' => 'contact',
    'uses' => 'ContactFormController@send',
]);

// routingi Voyagera
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


