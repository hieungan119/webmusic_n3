<?php
use Illuminate\Support\Facades\Route;
Route::get('/genres','App\Http\Controllers\GenresController@listGenres');
