<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{   
    protected $post;

    public function __construct() {
        $this->post = new Product();
    } 

    public function view() {
        $posts = Product::all();
        return view('pages.view_product.index', compact('posts'));
    } 

    public function delete($post_id) {
        $post = $this->post->find($post_id);
        $post->delete();

        return redirect()->back();
    }
    
}
