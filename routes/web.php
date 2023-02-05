<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    
    return view('welcome');

});


Route::get('lang/{locale}', 'LocalizationController@lang');