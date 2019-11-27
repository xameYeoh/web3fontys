<?php

Route::get('/', 'PagesController@home');
Route::get('/overview', 'PagesController@overview');
Route::get('/about', 'PagesController@about');
Route::get('/posts', 'PagesController@index');
Route::get('/comments', 'PagesController@comments');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
