<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{  
    public function view() {
        $posts = Product::all();
        return view('pages.view_product.index', compact('posts'));
    } 
    
}
