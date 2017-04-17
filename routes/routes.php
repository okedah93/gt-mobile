<?php


Route::get('/', array('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::get('/do_order', array('as'=>'do.order', 'uses' => 'HomeController@do_order'));
Route::post('/do_order', array('as'=>'do.order', 'uses' => 'HomeController@do_order'));

Route::get('/delivery', array('as'=>'delivery', 'uses' => 'OrderController@do_delivery'));
Route::post('/delivery', array('as'=>'delivery', 'uses' => 'OrderController@do_delivery'));

Route::get('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::post('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
//Route::get('/order', array('as'=>'order.index', 'uses' => 'OrderController@index'));
