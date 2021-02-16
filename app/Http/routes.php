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

//Route::get('/index', 'PagesController@index');

/*Route::get('/', 'PagesController@test');

Route::get('/login', 'HomeController@login');

Route::get('/course','CoursesController@course');



Route::get('/video', 'HomeController@video');
Route::get('/testo', 'PagesController@testo');

Route::auth();*/

/*Route::get('/test', 'HomeController@home');*/
//Courses
Route::get('courses', function() {
    return \App\Course::all();
});
Route::get('courses/{id}', function($id) {
    return \App\Course::find($id);
});
Route::post('courses', 'CoursesController@store');
Route::put('courses/{id}', 'CoursesController@update');
Route::delete('courses/{id}','CoursesController@delete');
//Authors
Route::get('authors', function() {

    return \App\Author::all();
});
Route::get('authors/{id}', function($id) {
    return App\Author::find($id);
});
Route::post('authors', 'AuthorsController@store');
Route::put('authors/{id}', 'AuthorsController@update');
Route::delete('authors/{id}','AuthorsController@delete');