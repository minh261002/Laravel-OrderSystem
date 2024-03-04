<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(): View{
        $title_page = 'Đăng Nhập';
        return view('frontend.auth.login', compact('title_page'));
    }

    function login(LoginRequest $request){
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)){
            return redirect()->route('home');
        }

        return redirect()->back()->with('error','Thông tin đăng nhập không chính xác');
    }
}