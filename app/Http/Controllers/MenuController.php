<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', ['menus' => $menus]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $menus = Menu::where('nama_menu', 'LIKE', "%{$query}%")->get();
        
        return view('menu.index', ['menus' => $menus]);
    }
}
