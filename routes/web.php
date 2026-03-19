<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
Route::get('/nguyenthihieungan', function () {
    return'Nguyễn Thị Hiếu Ngân';
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
    return 'Huỳnh Thị Quỳnh Như';

});        
 
Route::get('/top-movies', [MovieController::class, 'topMovies']);

Route::get('/long-movies', [MovieController::class, 'longMovies']);

