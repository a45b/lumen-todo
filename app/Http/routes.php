<?php

//page
$app->get('/', 'App\Http\Controllers\TaskController@index');

//api
$app->get('/tasks', 'App\Http\Controllers\TaskController@tasks');
$app->post('/create', 'App\Http\Controllers\TaskController@create');
$app->put('/update/{id}', 'App\Http\Controllers\TaskController@update');
$app->patch('/done/{id}', 'App\Http\Controllers\TaskController@done');
$app->delete('/delete/{id}', 'App\Http\Controllers\TaskController@delete');