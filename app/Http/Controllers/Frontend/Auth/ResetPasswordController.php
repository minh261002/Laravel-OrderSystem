<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    function index(Request $request){
        $title_page = 'Cập nhật mật khẩu';
        $token = $request->token;
        $email = $request->email;
        $user = User::where('email', $request->email)->first();

        return view('frontend.auth.reset-password', compact('title_page', 'token', 'email', 'user'));
    }

    function reset_password(ResetPasswordRequest $request){

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('login')->with('success', 'Cập nhật mật khẩu thành công');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy người dùng với địa chỉ email này.');
        }
    }

}
