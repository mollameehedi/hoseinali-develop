<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }
    public function books(){
        return view('frontend.books');
    }
    public function about(){
        return view('frontend.about');
    }
}
