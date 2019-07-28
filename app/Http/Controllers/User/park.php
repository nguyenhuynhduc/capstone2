<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class park extends Controller
{
    public function getPark()
    {
        $park=DB::table('park')->where('city','Da Nang')->get();
        return view('User/parkList')->with('park',$park);
    }
}
