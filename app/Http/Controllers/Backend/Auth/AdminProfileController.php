<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    function index(){
        $title_page = "Thông tin cá nhân";
        return view('backend.profile.index', compact('title_page'));
    }
}