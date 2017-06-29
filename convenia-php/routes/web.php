<?php

Route::get('/', 'Vendas\\VendaController@index')->name('index');

Route::post('/comissao', 'Vendas\\VendaController@comissao')->name('comissao');
