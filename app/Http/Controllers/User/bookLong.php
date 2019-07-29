<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class bookLong extends Controller
{
    public function getBookLong(Request $request)
    {
        if(session()->has('user'))
        {
            $year=Carbon::now()->year;
            $month=Carbon::now()->month;
            $date=Carbon::now()->day;
            if ($month==2)
            {
                if (($year % 4) == 0 && (($year % 100) != 0 || ($year % 400) == 0) )
                {
                    $date2=29;
                }
                else
                    $date2=28;
            }
            else if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
                $date2=31;
            else $date2=30;
            $number = $date2-$date+1;
            $user=DB::table('user')->where('idUser',session()->get('user'))->get()->first();
            $park=DB::table('park')->where('idPark',$request->get('id'))->get()->first();
            $price =$park->price *$number*24;
            return view('User/bookLong')->with('user',$user)->with('park',$park)->with('month',$month)->with('price',$price);
        }
        else
        {
            Session()->flash('message', "Vui Lòng Đăng Nhập");
            return redirect()->route('getLogin');
        }
    }
    public function postBookLong(Request $request)
    {

        $idPark=$request->get('idPark');
        $idUser=session()->get('user');
        $checkin=(integer)$request->get('checkin');
        $cost=(integer)$request->get('cost');
        $price=(integer)$request->get('price1');
        $radio=$request->get('radio1');
        $year=Carbon::now()->year;
        $checkin1='1-'.$checkin.'-'.$year;
        $checkin1=Carbon::parse($checkin1)->format('y-m-d');
        if ($radio==1)
            $car=$request->get('car1');
        else
            $car=$request->get('car2');
        $log1 = DB::table('history')->where('idPark',$idPark)->get();
        $park2 = DB::table('park')
            ->where('idPark',$idPark)
            ->get()
            ->first();
        $count= $park2->number;
        if ($log1) {
            if($count>0)
                foreach ($log1 as $item5) {
                    $moth1=Carbon::parse($item5->datecheckin)->month;
                    if ($moth1==$checkin)
                        $count -= 1;
                }
        }
        if ($count>0) {
            if ($price > $cost) {
                Session()->flash('message', "Tiền Không Đủ Để Thanh Toán. Vui Lòng Nạp Thêm");
                return redirect()->back();
            }
            else {
                $cost1= $cost -$price;
                DB::table('history')->insert([
                    'idPark' => $idPark,
                    'idUser' => $idUser,
                    'datecheckin' => $checkin1,
                    'car' => $car,
                    'Cost' => $cost,
                ]);
                DB::table('user')->where('idUser',session()->get('user'))->update([
                    'cost'=>$cost1,
                ]);
                Session()->flash('message', "Đăng Ký Thành Công");
                return redirect()->back();
            }
        }
        else{
            Session()->flash('message', "Bãi Không Còn Chỗ Trống, Xin Vui Lòng Quay Lại Sau!");
            return redirect()->back();
        }
    }
}
