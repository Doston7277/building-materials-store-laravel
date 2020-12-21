<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.main');
    }
    public function product(){
        return view('admin.product');
    }
    public function blog(){
        return view('admin.blog');
    }
}
