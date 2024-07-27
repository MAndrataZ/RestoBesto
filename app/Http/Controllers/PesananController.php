<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pesanan; // Buat model Pesanan
use App\Models\Menu; // Jika ingin menyimpan detail menu

class PesananController extends Controller
{
    // public function prosesPesanan(Request $request)
    // {
    //     $tableNumber = $request->input('table_number');
    //     $keranjang = session()->get('keranjang', []);

    //     if (empty($keranjang)) {
    //         return redirect()->route('keranjang.index')->with('error', 'Keranjang kosong.');
    //     }

    //     $pesanan = new Pesanan();
    //     $pesanan->nomor_meja = $tableNumber;
    //     $pesanan->status = 'diproses';
    //     $pesanan->save();

    //     foreach ($keranjang as $id => $details) {
    //         $pesanan->menus()->attach($id, [
    //             'jumlah' => $details['total'],
    //             'harga' => $details['harga']
    //         ]);
    //     }

    //     session()->forget('keranjang');

    //     return redirect()->route('pesanan.index')->with('sukses', 'Pesanan berhasil diproses.');
    // }

    // public function index()
    // {
    //     $pesanan = Pesanan::with('menus')->get(); // Menyertakan menu yang dipesan
    //     return view('pesanan.index', compact('pesanan'));
    // }

    function index(){
        return view('pesanan.index');
    }
}
