<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdminPasswordRequest;
use App\Http\Requests\Backend\AdminProfileRequest;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    use FileUpload;

    function index(){
        $title_page = "Thông tin cá nhân";
        return view('backend.profile.index', compact('title_page'));
    }

    function updateProfile(AdminProfileRequest $request){

        $user = Auth::user();

        $imagePath = $this->updateImg($request, 'avatar'); // Sử dụng phương thức updateImg từ trait FileUpload

        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar =isset($imagePath) ? $imagePath : $user->avatar;

        $user->save();

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công');
    }


    function updatePassword(AdminPasswordRequest $request){
        $user = Auth::user();

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Thay đổi mật khẩu thành công');
    }
}