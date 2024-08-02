<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        if ($query) {
    $menus = Menu::where('nama_menu', 'LIKE', "%{$query}%")->get();
    } else {
    $menus = Menu::all();
    } 
        return view('menu.index', ['menus' => $menus]);
    }

}
