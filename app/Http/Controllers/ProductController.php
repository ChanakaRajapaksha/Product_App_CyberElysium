<?php

namespace App\Http\Controllers;

use App\Models\Product;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends ParentController
{   
    
    public function index() {
        return view('pages.product.index');
    } 

    public function store(Request $request) {

        ProductFacade::store($request->all());
        return redirect()->back();
        //return redirect()->route('product');
        
    } 

}
