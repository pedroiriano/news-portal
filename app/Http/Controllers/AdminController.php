<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $pageTitle = "Dashboard | Prokopim";
        return view('admin.dashboard', compact('pageTitle'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function AdminLogin()
    {
        $pageTitle = "Login | Prokopim";
        return view('admin.admin-login', compact('pageTitle'));
    }
}
