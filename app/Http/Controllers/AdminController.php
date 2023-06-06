<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        $pageTitle = "Profile | Prokopim";
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin-profile-view', compact('pageTitle', 'adminData'));
    }

    public function AdminProfileUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,jpeg,png,gif,bmp|max:150000',
        ]);

        $user = auth()->user();

        if($request->hasFile('image')) {
            $photoNameWithExt = $request->file('image')->getClientOriginalName();
            $photoName = pathinfo($photoNameWithExt, PATHINFO_FILENAME);
            $photoName = $request->input('name');
            $convertPhotoName = Str::lower($photoName);
            $collectionConvertPhotoName = Str::of($convertPhotoName)->explode(' ');
            $collectionConvertPhotoName = $collectionConvertPhotoName->implode('-');
            $photoExt = $request->file('image')->getClientOriginalExtension();
            $photoNameSaved = $collectionConvertPhotoName.'-'.time().'.'.$photoExt;
            $photoPath = $request->file('image')->storeAs('public/adminphoto', $photoNameSaved);
        }
        else {
            
        }

        $data = User::findOrFail($id);
        $data->name = $request->input('name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');

        if($request->hasFile('image')) {
            $oldPhoto = $data->photo;
            Storage::delete('public/adminphoto/'.$oldPhoto);
            $data->photo = $photoNameSaved;
        }
        else {
            $oldPhoto = $data->photo;
            $data->photo = $oldPhoto;
        }
        $data->save();

        return redirect()->route('admin.profile')->with('success', 'Profile Changed Successfully');
    }
}
