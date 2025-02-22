<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.register.index');
    }

    public function register (RegisterRequest $request)
    {

        try {
            $register = $request->validated();
            $create = User::create([
                'first_name' => $register['first_name'],
                'last_name' => $register['last_name'],
                'email' => $register['email'],
                'password' => Hash::make($register['password']),
                'is_active' => 1,
            ]);

            session()->flash('register_success', "Đăng ký tài khoản {$register['email']} thành công");
            return redirect()->route('admin.register.index');
        }
        catch (\Exception $exception) {
        dd($exception->getMessage());
        }
    }
}
