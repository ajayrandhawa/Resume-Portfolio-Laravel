<?php

Route::get('/', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');
