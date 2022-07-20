<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    protected $task;

    public function __construct() {
        $this->task = new Product();
    } 

    public function index() {
        return view('pages.product.index');
    } 

    public function store(Request $request) {
        $this->task->create($request->all());
        return redirect()->back();
        //return redirect()->route('product');
    } 

}
