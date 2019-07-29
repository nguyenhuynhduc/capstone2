<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class bookShort extends Controller
{
    public function getBookShort(Request $request)
    {
        $park = DB::table('park')->where('idPark', $request->get('id'))->get()->first();
        $price = $park->price * 2;
        return view('User/bookShort')->with('park', $park)->with('price', $price);
    }

    public function postBookShort(Request $request)
    {

        $request->validate([

            'phone' => 'required|min:10|max:10',
            'car' => 'required',

        ], [

            'phone.required' => 'Bạn Vui Lòng Nhập Số Điện Thoại',
            'car.required' => 'Bạn Vui Lòng Nhập Biển Số Xe',
            'phone.min'=>'Số Điện Thoại Chỉ Nhận 10 số',
            'phone.max'=>'Số Điện Thoại Chỉ Nhận 10 số',
        ]);


        $idPark = $request->get('idPark');
        $checkin = $request->get('date');
        $checkin1 = Carbon::parse($checkin);
        $checkin2 = $checkin1->format('y-m-d');
        $car = $request->get('car');
        $phone = $request->get('phone');
        $timeCheckIn = (integer)$request->get('checkin');
        $timecheckout = (integer)$request->get('checkout');
        $cost = (integer)$request->get('price1');
        $history1 = DB::table('history')->where('idPark', $idPark)->get();
        $park2 = DB::table('park')
            ->where('idPark', $idPark)
            ->get()->first();
        $count = (integer)$park2->number;
        $countHis = count($history1);
        $an = 0;
        if ($countHis > 0) {
            if ($count > 0)
            {
                foreach ($history1 as $item5) {
                    $check = $item5->datecheckin;
                    $check = Carbon::parse($check)->format('y-m-d');
                    if (($timeCheckIn > $item5->checkin && $timeCheckIn > $item5->checkout && $timecheckout > $item5->checkin && $timecheckout > $item5->checkout) || ($timeCheckIn < $item5->checkin && $timeCheckIn < $item5->checkout && $timecheckout < $item5->checkin && $timecheckout < $item5->checkout))
                        $an = 1;
                    else
                        $an = 2;
                    $monthh=DB::table('history')->where('phone',null)->where('idHistory',$item5->idHistory)->get()->first();
                    if ($monthh)
                    {
                        if (Carbon::parse($monthh->datecheckin)->month==Carbon::parse($checkin2)->month)
                        {
                            $mo=1;
                        }
                        else
                            $mo=2;
                    }
                    else
                        $mo=2;

                    if ( ($an==2  && $check==$checkin2)|| $mo==1 )
                            $count -= 1;
                }
            }

        }
        $date=Carbon::now()->toDateString();

        if (Carbon::parse($date)->format('y-m-d')>$checkin2)
        {
            Session()->flash('message', 'Vui Lòng Kiểm tra Ngày Đăng Ký');
            return redirect()->back();
        }
        elseif ($count>0) {
            DB::table('history')->insert([
                'idPark' => $idPark,
                'datecheckin' => $checkin2,
                'checkin' =>$timeCheckIn,
                'checkout' =>$timecheckout,
                'phone'=>$phone,
                'car' => $car,
                'Cost' => $cost,
            ]);
            Session()->flash('message', 'Đăng Ký Thành Công!');
            return redirect()->back();
        }
        else{
            Session()->flash('message', 'Khung Giờ này không còn chổ trống!');
            return redirect()->back();
        }
    }
}
