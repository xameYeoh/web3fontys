<?php

Route::get('/', 'PagesController@home');
Route::get('/overview', 'PagesController@overview');
Route::get('/about', 'PagesController@about');
Route::get('/posts', 'PagesController@index');
Route::get('/comments', 'PagesController@comments');

/*
Route::get('/posts{post}', 'PostsController@show');
Route::get('/posts{post}/edit', 'PostsController@edit');
Route::patch('/posts{post}', 'PostsController@update');
Route::delete('/posts{post}', 'PostsController@destroy');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
*/
Route::resource('posts', 'PostsController');
