<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/art', function(){
    return view('art');
});

Route::get('/contact', function(){
    return view('contacts');
});

Route::get('/home', function(){
    return view('app');
});
