<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(LoginRequest $request) {
        $login = $request->validated(); // dau tien check validate trong from
        $user = User::where('email', $login['email'])->first();

        if (!$user) {
            return back()->withErrors(['email', 'Tài khoản không tồn tại'])->onlyInput('email');
        }

        if (!!Hash::check($login['password'], $user->password)) {
            return back()->withErrors(['password', 'Tài khoản hoặc mật khẩu không đúng'])->onlyInput('password');
        }

        Auth::guard('admin')->login($user);
        $request->session()->regenerate();
        return redirect()->route('admin.home.index');
    }

    public function logout(LoginRequest $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.index');
    }
}
