<?php

Route::get('/', 'PagesController@home');
Route::get('/overview', 'PagesController@overview');
Route::get('/about', 'PagesController@about');
Route::get('/posts', 'PagesController@index');

