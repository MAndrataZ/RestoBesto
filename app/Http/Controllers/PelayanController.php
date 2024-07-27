<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class PelayanController extends Controller
{
    public function menu()
    {
        $menus = Menu::all();
        return view('pelayan.menu', ['menus' => $menus]);
    }

    public function tambahKeKeranjang(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->back()->with('error', 'Menu tidak ditemukan.');
        }

        $qty = $request->input('qty', 1); // Dapatkan jumlah dari form, default ke 1 jika tidak ada

        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            $keranjang[$id]['total'] += $qty;
        } else {
            $keranjang[$id] = [
                "nama_menu" => $menu->nama_menu,
                "total" => $qty,
                "harga" => $menu->harga,
                "gambar_menu" => $menu->gambar_menu
            ];
        }

        session()->put('keranjang', $keranjang);

        return redirect()->back()->with('sukses', 'Menu berhasil ditambahkan ke keranjang.');
    }

    public function keranjang()
    {
        $keranjang = session()->get('keranjang', []);
        $subtotal = array_sum(array_map(function($item) {
            return $item['harga'] * $item['total'];
        }, $keranjang));

        return view('pelayan.keranjang', compact('keranjang', 'subtotal'));
    }

    public function hapusDariKeranjang($id)
    {
        $keranjang = session()->get('keranjang');

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->back()->with('sukses', 'Item berhasil dihapus dari keranjang.');
    }

    public function status()
    {
        return view('pelayan.status');
    } 
}
