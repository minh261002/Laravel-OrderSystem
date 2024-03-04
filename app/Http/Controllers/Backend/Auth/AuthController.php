<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdminLoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index():View{
        return view('backend.auth.login');
    }

    function login(AdminLoginRequest $request){
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác');
    }

    function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Đăng xuất thành công');
    }
}