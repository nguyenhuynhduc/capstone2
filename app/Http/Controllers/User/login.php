<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function getLogin()
    {
        if (session()->has('user'))
        {
            return redirect()->route('account');
        }
        else
            return view('User/login');
    }

    public function postLogin(Request $request)
    {

        $username= $request->get('user');
        $pass=$request->get('password');
        $user = DB::table('user')
            ->where('username', $username)
            ->where('password', $pass)
            ->where('type','user')
            ->first();
        $admin = DB::table('user')
            ->where('username', $username)
            ->where('password', $pass)
            ->where('type','admin')
            ->first();
        if ($admin)
        {
            Session()->flash('message', "Bạn Vừa Đăng Nhập Bằng Tài Khoản Admin");
            return view('User/login');
        }
        elseif ($user) {
            session(['user' => $user->idUser]);
            session(['name' => $user->fullname]);
            return redirect()->route('account');
        }
        else{
            Session()->flash('message', "Sai Tài Khoản hoặc mật khẩu");
            return view('User/login');
        }

    }
    public function getLogout()
    {
        session(['user' => null]);
        return redirect()->back();
    }
}
