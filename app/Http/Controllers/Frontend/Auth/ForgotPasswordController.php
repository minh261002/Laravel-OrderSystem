<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\ForgotPasswordRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    function index(): View{
        $title_page = 'Quên Mật Khẩu';
        return view('frontend.auth.forgot-password', compact('title_page'));
    }

    function sendMail(ForgotPasswordRequest $request){
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Vui lòng kiểm tra email')
            : back()->with('error', 'Đã có lỗi xảy ra, vui lòng thử lại');
    }
}