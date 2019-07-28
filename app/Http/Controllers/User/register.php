<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class register extends Controller
{
    public function getRegister()
    {
        return view('User/register');
    }

    public function postRegister(Request $request)
    {

        $request->validate([
            'fullname' => 'required|max:50',
            'email' => 'required',
            'phone' => 'required|min:10|max:10',
            'car' => 'required',
            'password' => 'required|min:6|max:16|required_with:repassword|same:repassword',
            'repassword' => 'required',
        ], [
            'fullname.required' => 'Bạn Vui Lòng Nhập Họ Và Tên',
            'email.required' => 'Bạn Vui Lòng Nhập email',
            'phone.required' => 'Bạn Vui Lòng Nhập Số Điện Thoại',
            'car.required' => 'Bạn Vui Lòng Nhập Biển Số Xe',
            'password.required' => 'Bạn Vui Lòng Nhập Mật Khẩu',
            'repassword.required' => 'Bạn Vui Lòng Nhập Xác Thực Mật Khẩu ',
            'password.same'=>'Vui Lòng Xác Thực Lại Mật Khẩu',
            'password.min'=>'Mật Khẩu phải trên 6 kí tự và nhỏ hơn 16 kí tự',
            'password.max'=>'Mật Khẩu phải trên 6 kí tự và nhỏ hơn 16 kí tự',
            'phone.min'=>'Số Điện Thoại Chỉ Nhận 10 số',
            'phone.max'=>'Số Điện Thoại Chỉ Nhận 10 số',
        ]);

        $fullname=$request->get('fullname');
        $email=$request->get('email');
        $phone=$request->get('phone');
        $car=$request->get('car');
        $user=$request->get('user');
        $pass=$request->get('password');
        $repass=$request->get('repassword');

        $checkUser=DB::table('user')->where('username',$user)->get()->first();
        $checkEmail=DB::table('user')->where('email',$email)->get()->first();
        if ($checkEmail) {
            Session()->flash('message', "Email Đã Được Sữ Dụng");
            return redirect()->back();
        } else if ($checkUser) {
            Session()->flash('message', "Tài Khoản Đã Được Sữ Dụng");
            return redirect()->back();
        } else {
            DB::table('user')->insert([
                'fullname' => $fullname,
                'email' => $email,
                'phone' => $phone,
                'car' => $car,
                'username' => $user,
                'password' => $pass,
                'gender' => '1',
                'cost' => '0',
                'type'=>'user'
            ]);
            Session()->flash('message', "Đăng Ký Thành Công!");
            return redirect()->back();
        }


    }
}
