<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class MenuController extends Controller
{
    public function index()
    {
       $products = Product::with('category')
            ->get()
            ->groupBy(fn ($product) => $product->category->name);
    
        return view("menu", compact("products"));
    }
}
