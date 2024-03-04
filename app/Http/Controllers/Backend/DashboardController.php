<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(): View{
        $title_page = 'Quản Trị Viên';
        return view('backend.dashboard.index', compact('title_page'));
    }
}