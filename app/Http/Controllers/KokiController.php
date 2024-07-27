<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KokiController extends Controller
{
    public function stok()
    {
        return view('koki.stok');
    }

    public function detail()
    {
        return view('koki.detail');
    }   
}
