<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function index(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Đăng xuất thành công');
    }
}