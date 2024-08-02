<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('detailPesanan.menu')->get();
        return view('pesanan.index', compact('pesanan'));
    }
}
