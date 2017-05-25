<?php

Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');
Route::get('/posts/{id}/edit','PostsController@edit');
Route::put('/posts/{id}','PostsController@update');
Route::delete('/posts/{id}','PostsController@destroy');

// Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistersController@create');
Route::post('/register','RegistersController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

// ajax
Route::post('/posts/comments','CommentsController@store');


