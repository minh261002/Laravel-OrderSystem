<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index(): View{
        $title_page = "Đăng ký";
        return view('frontend.auth.register', compact('title_page'));
    }

    function register(RegisterRequest $request){
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password)
        ]);

        if($user && $user->wasRecentlyCreated){
            return redirect()->route('login')->with('success', 'Đăng ký thành công, Vui lòng đăng nhập');
        }

        return redirect()->back()->with('error','Không thể đăng ký tài khoản, vui lòng thử lại');
    }
}