<?php

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
