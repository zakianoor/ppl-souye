<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }

    public function registIndex()
    {
        return view('regist');
    }

    public function registerBuyer(Request $request)
    {
        try {
            $request->validate([
                'usn' => 'required|string|unique:users,usn_user',
                'pass' => 'required|string',
            ]);

            User::create([
                'usn_user' => $request->usn,
                'pass_user' => Hash::make($request->pass),
                'role_user' => 'buyer',
                'tgl_akun_user' => Carbon::now('Asia/Jakarta')
            ]);

            return redirect()->route('login');
        } catch (\Exception $e) {
            return redirect()->route('regist')->with('error', $e->getMessage());
        }
    }

    public function loginBuyer(Request $request)
    {
        try {
            $credentials = $request->only('usn', 'pass');

            $user = User::where('usn_user', $credentials['usn'])->first();

            if ($user && Hash::check($credentials['pass'], $user->pass_user)) {
                $request->session()->put('user', $user);

                return redirect()->intended(route('home'))->with('success', 'Login successful');
            } else {
                return redirect()->route('login')->with('error', 'Invalid username or password');
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        if (Session::has('user')) {
            Session::pull('user');
            return redirect()->route('login');
        }
    }
}
