<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Logout extends Controller
{
    public function __invoke()
    {
        \Auth::logout();
        return view('logout');
    }
}
