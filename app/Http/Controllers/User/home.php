<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function getHome()
    {
        $park=DB::table('park')->get();
        return view('User/index')->with('park',$park);
    }
}
