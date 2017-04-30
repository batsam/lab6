<?php

Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');
// Route::get('/posts/{id}/edit',)
