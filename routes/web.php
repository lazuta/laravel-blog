<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
})->middleware('verified');

Route::post('/createPost', 'HomeController@CreatePost');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
