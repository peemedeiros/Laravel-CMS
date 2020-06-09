<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Site\HomeController@index');

Route::prefix('painel')->group( function() {
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('login', 'Auth/LoginController@index')->name('login');
});
