<?php
	
	Route::get('home', 'HomeController@index');

	Route::controllers([
	    'auth' => 'Auth\AuthController',
	    'password' => 'Auth\PasswordController',
	]);
	
	Route::get('/', 'ProdutoController@lista');
	Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
	Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
	Route::get('/produtos/novo', 'ProdutoController@novo');
	Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

	

	Route::get('/login', 'LoginController@form');
	Route::post('/login', 'LoginController@login');
?>