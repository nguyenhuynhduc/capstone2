<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bookLong extends Controller
{
    public function getBookLong()
    {
        return view('User/bookLong');
    }

}
