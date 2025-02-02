<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // render menu từ database
   public function index() {
       $menu = Menu::where('is_active', 1)->get();
       return view('home.index', ['menus' => $menu]);
   }
}
