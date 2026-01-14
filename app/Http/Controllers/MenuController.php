<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MenuItems;
class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItems::all();

        return view("menu", compact("menuItems"));
    }
}
