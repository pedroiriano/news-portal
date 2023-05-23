<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin-profile-view', compact('adminData'));
    }
}
