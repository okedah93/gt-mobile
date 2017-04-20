<?php


Route::get('/', 			array('as'=>'home.index', 	'uses' => 'HomeController@index'));
Route::get('/do_order', 	array('as'=>'do.order', 	'uses' => 'HomeController@do_order'));
Route::post('/do_order', 	array('as'=>'do.order', 	'uses' => 'HomeController@do_order'));

Route::get('/delivery', 	array('as'=>'delivery', 	'uses' => 'DeliveryController@do_delivery'));
Route::post('/delivery', 	array('as'=>'delivery', 	'uses' => 'DeliveryController@do_delivery'));

Route::get('/payment_review', array('as'=>'payment.review', 'uses' => 'PaymentreviewController@do_payment'));
Route::post('/payment_review', 	array('as'=>'payment.review', 'uses' => 'PaymentreviewController@do_payment'));

Route::get('/do_payment', 	array('as'=>'do.payment', 	'uses' => 'PaymentreviewController@do_payment'));
Route::post('/do_payment', 	array('as'=>'do.payment', 	'uses' => 'PaymentreviewController@do_payment'));

Route::get('/do_booking', 	array('as'=>'do.payment', 	'uses' => 'PaymentreviewController@do_booking'));
Route::post('/do_booking', 	array('as'=>'do.payment', 	'uses' => 'PaymentreviewController@do_booking'));

Route::get('home', 			array ('as'=>'home.index', 	'uses' => 'HomeController@index'));
Route::post('home', 		array ('as'=>'home.index', 	'uses' => 'HomeController@index'));
//Route::get('/order', array('as'=>'order.index', 'uses' => 'OrderController@index'));
