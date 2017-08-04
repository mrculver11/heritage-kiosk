<?php


Route::get('/', 'GeneralsController@landing');
Route::get('/index', 'GeneralsController@index');
Route::get('/index/{index}', 'GeneralsController@single');
Route::get('/medalofhonor', 'GeneralsController@moh');
Route::get('/song', 'GeneralsController@song');
Route::get('/insignia', 'GeneralsController@insignia');
