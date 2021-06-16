<?php

namespace App\Http\Controllers;
use App\Models\Toko; 
use Illuminate\Http\Request;

class daftarsembakoController extends Controller
{
    public function daftar()
    {
        $barangs = Toko::paginate(20);
        return view('daftar', compact('barangs'));
    }
}
