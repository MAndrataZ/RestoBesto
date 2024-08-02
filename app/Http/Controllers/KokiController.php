<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class KokiController extends Controller
{
    public function stok()
    {
        $menus = Menu::all();
        return view('koki.stok', ['menus' => $menus]);
    }

    public function detail()
    {
        return view('koki.detail');
    }   

     public function updateStok(Request $request)
     {
     $request->validate([
         'id_menu' => 'required|exists:menu,id_menu',
         'stok' => 'required|integer|min:0',
     ]);

     $menu = Menu::findOrFail($request->id_menu);
     $menu->stok = $request->stok;
     $menu->save();

     return redirect()->route('koki.stok')->with('success', 'Stok berhasil diperbarui');
     }



}
