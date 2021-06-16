<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengumumanController extends Controller
{
    public function pengumuman()
    {
        return view('pengumuman');
    }
}
