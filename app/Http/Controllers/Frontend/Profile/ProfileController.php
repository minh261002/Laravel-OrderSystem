<?php

namespace App\Http\Controllers\Frontend\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(): View{
        $title_page = 'Thông tin cá nhân';
        return view('frontend.profiles.index', compact('title_page'));
    }
}