<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home(){
        return view('front.home');
    }

    public function about_us(){
        return view ('front.about_us');
    }
        
    public function features(){
        return view ('front.features');
    }
}
