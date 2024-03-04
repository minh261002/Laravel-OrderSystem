<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(): View{
        $title_page = 'Trang Chủ';
        return view('frontend.home.index', compact('title_page'));
    }
}
