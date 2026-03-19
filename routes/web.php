<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenthihieungan', function () {
    return'Nguyễn Thị Hiếu Ngân';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/TranHienNhien',function (){
    return 'Trần Hiển Nhiên';
}); 

Route::get('/dangphuongnghi', function () {
    return "Đặng Phương Nghi";
});

Route::get('nguyenleminhnhu', function () {
    return "Nguyễn Lê Minh Như";
});
Route::get('/HuynhThiQuynhNhu', function () {
    return 'Huỳnh Thị Quỳnh Như';//
});        
 
