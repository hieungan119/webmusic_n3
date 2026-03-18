<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/TranHienNhien',function (){
    return 'Trần Hiển Nhiên';
}); 
