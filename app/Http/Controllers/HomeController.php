<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function Welcome(Request $request){
        return view('welcome');
    }
}
