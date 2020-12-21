<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class LightenController extends Controller
{
    public function index(){
        $products = Product::all();
        $users = User::all();
        return view('frontend.index', ['products' => $products, 'users' => $users]);
    }
    public function about(){
        return view('frontend.about');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
}
