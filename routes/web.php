<?php

Route::get('/', function () {
    return view('index');
});



Route::get('/vendedores', function () {
    return view('sites.vendedores');
});

Route::get('/fornecedores', function () {
    return view('sites.fornecedores');
});
Route::get('/compradores', function () {
    return view('sites.compradores');
});
Route::get('/contato', function () {
    return view('sites.contato');
});

Route::get('/mail', function () {
    return view('emails.confirmation');
});
Route::post('/enviar', 'ContatoController@send2');

Auth::routes();
Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail'); //testa lá

Route::get('register2', 'EmpresaController@showRegistrationForm')->name('register2');
Route::post('register2', 'EmpresaController@register'); //testa lá
Route::post('salvapedido','PedidoController@register');



Route::group(['middleware' => 'auth'], function () {
 Route::get('/home', 'HomeController@index');
 Route::get('/orders', 'orderController@listarorder');
 Route::get('/minhascompras', 'ControlController@beta');
 Route::get('/qualificar', 'ControlController@beta');
 Route::get('/convidar', 'ControlController@beta');
 Route::get('/servico-premium', 'ControlController@beta');
 Route::get('/notificar', 'ControlController@beta');
Route::get('beta','ControlController@beta');
Route::get('/pedido', 'orderController@index');
    });

    Route::get('/teste', 'orderpjController@importExport');

