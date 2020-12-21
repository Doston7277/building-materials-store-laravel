<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $products = Product::all();
        return view('frontend.product', ['products' => $products]);
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'cost' => 'required',
            'image' => 'required|mimes: jpeg,jpg,png',
        ]);
        $file = $request->file('image');
        $extension = $file -> getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move('uploads/product', $fileName);

        $product = new Product([
            'name' => $request->get('name'),
            'cost' => $request->get('cost'),
            'image' => $fileName,
        ]);

        $product->save();
        return view('admin.product');
    }
}