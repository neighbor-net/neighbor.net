<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class Index extends Controller
{
    public function __invoke()
    {
        return view('Todo.index', ['loginUser'=>\Auth::user()]);
    }
}
