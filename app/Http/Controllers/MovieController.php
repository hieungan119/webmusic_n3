<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   // ← Dòng quan trọng

class MovieController extends Controller
{
    public function phimCanada()
    {
        $phim = DB::table('movie')                    // bảng movie
            ->where('country_name', 'Canada')         // lọc Canada
            ->select('movie_name', 'release_date', 'runtime')  // chỉ lấy 3 cột cần
            ->get();                                  // lấy tất cả kết quả

        return view('phim-canada', compact('phim'));  // gửi dữ liệu sang view
    }
}