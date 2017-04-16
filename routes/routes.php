<?php

Route::get('/', array('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::post('/do_order', array('as'=>'do.order', 'uses' => 'HomeController@do_order'));

Route::get('/delivery', array('as'=>'delivery', 'uses' => 'OrderController@delivery'));

Route::get('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::post('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
//Route::get('/order', array('as'=>'order.index', 'uses' => 'OrderController@index'));