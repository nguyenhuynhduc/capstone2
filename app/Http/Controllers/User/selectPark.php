<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class selectPark extends Controller
{
    public function getSelectPark(Request $request){

        $id=$request->get('id');
        if($id=='HN')
        {
            $city="Ha Noi";
            $place="Hà Nội";
        }
        else if($id=='DN')
        {
            $city="Da Nang";
            $place="Đà Nẵng";
        }else
        {
            $city="Ho Chi Minh";
            $place="Hồ Chí Minh";
        }
        $park=DB::table('park')->where('city',$city);
        return view('User/selectPark')->with('park',$park);
    }

}
