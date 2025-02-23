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
        try {
            $login = $request->validated();
            $user = User::where('email', $login['email'])->first();

            if (!$user) {
                return back()->with('error', "Tài khoản {$login['email']} không tồn tại");
            }

            if($user->is_active == 0) {
                return back()->with('error', "Tài khoản {$login['email']} chưa được kích hoạt");
            }

            if(!password_get_info($user->password)['algo']) {
                return back()->with('error', "Mật khẩu {$login['email']} này chưa được mã hóa");
            }

            if (Auth::guard('admin')->attempt($login)) {
                $request->session()->regenerate();
                session([
                    'user_id' => $user->user_id,
                    'username' => $user->first_name . ' ' . $user->last_name,
                    'login_time' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

                return redirect()->intended('admin/home');
            }
            return back()->with('error', "Tài khoản $user->email hoặc mật khẩu không chính xác");
        }
        catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        catch (\Exception $exception) {
            dd($exception);
        }
        return redirect()->route('admin.login');
    }
}
