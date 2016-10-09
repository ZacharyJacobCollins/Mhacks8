<?php

//Display dashboard
Route::get('/', 'AppController@dashboard');
Route::get('/test', 'AppController@test');
Route::get('/map/{mapParams}', 'MapController@show');
