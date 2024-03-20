<?php

namespace App\Http\Controllers\Frontend\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Profile\ProfileUpdateRequest;
use App\Http\Requests\Frontend\Profile\UpdatePasswordRequest;
use App\Trait\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use FileUpload;

    function index(): View{
        $title_page = 'Thông tin cá nhân';
        return view('frontend.profiles.index', compact('title_page'));
    }

    function update(ProfileUpdateRequest $request){
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->back()->with('success', 'Cập Nhật Thông Tin Thành Công');
    }

    function password(UpdatePasswordRequest $request){
        $user = Auth::user();

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success', 'Cập nhật mật khẩu thành công');
    }

    function avatar(Request $request){
        $imagePath =   $this->updateImg($request, 'avatar');

        $user = Auth::user();

        $user->avatar = $imagePath;
        $user->save();

        return response(['status' => 'success', 'message' => 'Cập nhật ảnh thành công', 'avatar_url'=> $imagePath]);
    }
}