<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
    
}
