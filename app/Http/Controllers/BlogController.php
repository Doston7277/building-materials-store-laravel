<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return view('frontend.blog', ['blogs' => $blogs]);
    }
    public function insert(Request $request){
        
        $file = $request->file('image');
        $extension = $file -> getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move('uploads/blog', $fileName);

        $blog = new Blog([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'image' => $fileName,
        ]);

        $blog->save();
        return view('admin.blog');
    }
}
