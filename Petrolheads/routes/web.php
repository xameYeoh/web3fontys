<?php

Route::get('/', 'PagesController@home');
Route::get('/overview', 'PagesController@overview');
Route::get('/about', 'PagesController@about');
Route::get('/comments', 'PagesController@comments');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/profile', 'ProfileController@profile');


Route::get('profiles/{profile}/edit',  ['as' => 'profiles.edit', 'uses' => 'ProfileController@edit']);
Route::patch('profiles/{profile}/update',  ['as' => 'profiles.update', 'uses' => 'ProfileController@update']);

/*
Route::get('/posts', 'PagesController@index');
Route::get('/posts{post}', 'PostsController@show');
Route::get('/posts{post}/edit', 'PostsController@edit');
Route::patch('/posts{post}', 'PostsController@update');
Route::delete('/posts{post}', 'PostsController@destroy');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
*/
Route::resource('posts', 'PostsController');

Route::post('/posts{post}/comments', 'PostCommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/send', 'mailController@send');
Route::post('/addProfile', 'ProfileController@addProfile');
Route::post('/comment/{id}', 'PostsController@comment')->middleware('auth');
