<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class Edit extends Controller
{
    public function __invoke($id=0)
    {
        return view('Todo.edit', ['id'=>$id]);
    }
}
