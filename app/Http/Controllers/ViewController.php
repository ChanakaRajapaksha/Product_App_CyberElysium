<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Image;
use domain\Facades\ViewFacade;
use Illuminate\Http\Request;

class ViewController extends ParentController
{   
   
    public function view() {

        $response['posts'] = ViewFacade::all();
        return view('pages.view_product.index')->with($response);

    } 

    public function delete($post_id) {
        
        ViewFacade::delete($post_id);
        return redirect()->back();

    } 

    public function done($post_id) {
        
        ViewFacade::done($post_id);
        return redirect()->back();

    }  

    public function edit(Request $request) { 

        $response['post'] = ViewFacade::get($request['post_id']);
        return view('pages.view_product.edit')->with($response);

    } 

    public function update(Request $request, $post_id) {
        
        ViewFacade::update($request->all(), $post_id);
        return redirect()->back();
    }
    
}
