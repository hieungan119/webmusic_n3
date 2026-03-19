<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\DB;


Route::get('/nguyenthihieungan', function () {
    return'Nguyễn Thị Hiếu Ngân';
});

Route::get('/tranhiennhien',function () {
    return 'Trần Hiển Nhiên';
}); 

Route::get('/dangphuongnghi', function () {
    return "Đặng Phương Nghi";
});

Route::get('/nguyenleminhnhu', function () {
    return "Nguyễn Lê Minh Như";
});

Route::get('/huynhthiquynhnhu', function () {
    return 'Huỳnh Thị Quỳnh Như';
});

Route::get('/genres','App\Http\Controllers\GenresController@listGenres');

Route::get('/top-movies', [MovieController::class, 'topMovies']);

Route::get('/long-movies', [MovieController::class, 'longMovies']);

Route::get('/phim-canada', 'App\Http\Controllers\MovieController@phimCanada');

Route::get("/topbudget","App\Http\Controllers\BudgetController@topbudget");

