<?php


Route::get('/', array('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::get('/do_order', array('as'=>'do.order', 'uses' => 'HomeController@do_order'));
Route::post('/do_order', array('as'=>'do.order', 'uses' => 'HomeController@do_order'));

Route::get('/delivery', array('as'=>'delivery', 'uses' => 'OrderController@do_delivery'));
Route::post('/delivery', array('as'=>'delivery', 'uses' => 'OrderController@do_delivery'));

Route::get('/payment', array('as'=>'payment_review', 'uses' => 'DeliveryController@payment_review'));
Route::post('/payment', array('as'=>'payment_review', 'uses' => 'DeliveryController@payment_review'));

Route::get('/do_payment', array('as'=>'do.payment', 'uses' => 'PaymentreviewController@do_payment'));
Route::post('/do_payment', array('as'=>'do.payment', 'uses' => 'PaymentreviewController@do_payment'));

Route::get('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
Route::post('home', array ('as'=>'home.index', 'uses' => 'HomeController@index'));
//Route::get('/order', array('as'=>'order.index', 'uses' => 'OrderController@index'));
