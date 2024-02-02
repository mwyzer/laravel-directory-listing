<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }
    public function passwordrequest(): View
    {
        return view('admin.auth.forgot-password');
    }
}

