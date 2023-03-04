<?php

namespace App\Http\Controllers\Site;

use Illuminate\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        

        return view('sites.home');
    }
}
