<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = session()->get('keranjang', []);
        $subtotal = collect($keranjang)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('keranjang.index', compact('keranjang', 'subtotal'));
    }

    public function tambahKeKeranjang(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            abort(404);
        }

        $keranjang = session()->get('keranjang', []);

        // Mengambil kuantitas dari permintaan
        $quantity = $request->input('qty', 1);

        // Jika item sudah ada di keranjang, tambahkan kuantitasnya
        if (isset($keranjang[$id])) {
            $keranjang[$id]['quantity'] += $quantity;
        } else {
            // Jika item belum ada di keranjang, tambahkan item baru
            $keranjang[$id] = [
                "name" => $menu->nama_menu,
                "description" => $menu->deskripsi_menu,
                "price" => $menu->harga,
                "quantity" => $quantity,
                "image" => $menu->gambar_menu
            ];
        }

        session()->put('keranjang', $keranjang);

        return redirect()->route('keranjang.index')->with('success', 'Item added to keranjang successfully!');
    }
}