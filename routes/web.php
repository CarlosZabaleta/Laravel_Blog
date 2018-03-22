<?php

Route::get('/', 'PostController@index');
Route::get('show/{post}', 'PostController@show');
