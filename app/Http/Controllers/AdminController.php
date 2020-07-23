<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Model\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function register()
    {
        return view('admin.auth.register');
    }
    public function admin_register(Request $request)
    {
        unset($request['password_confirmation']);
        $password=Hash::make($request->password);
        $request['password']=$password;
        Admin::create($request->all());
        return redirect(route('admin.dashboard'));
    }
}
