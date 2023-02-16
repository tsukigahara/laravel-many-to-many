<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Typology;
use App\Models\UniqueCode;
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

        return view('home_products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $typologies = Typology::all();
        return view('create_products', compact('typologies', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // var_dump($data['typology_id']);

        // NON HO CAPITO BENE IL CONCETTO DI MASS ASSIGNMENT E FILLABLE NEI MODEL
        $data['code'] = UniqueCode::generate('p');

        $product = Product::make($data);

        // belongsTo
        $typology = Typology::find($data['typology_id']);
        $product->typology()->associate($typology);

        $product->save();

        // belongsToMany
        $categories = Category::find($data['categories']);
        $product->categories()->attach($categories);

        return redirect()->route('index');
    }
}
