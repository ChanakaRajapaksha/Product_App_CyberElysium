<?php

namespace App\Http\Controllers;

use domain\Facades\ViewFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $response['posts'] = ViewFacade::allActive();
        return view('pages.home.index')->with($response);

    }
}
