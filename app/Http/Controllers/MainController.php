<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('home', compact('categories'));
    }

    public function indexProducts()
    {
        $products = Product::all();

        return view('products_home', compact('products'));
    }
}
