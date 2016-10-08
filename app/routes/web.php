<?php

//Display dashboard
Route::get('/', 'AppController@dashboard');
Route::get('/map/{mapParams}', 'MapController@show');
