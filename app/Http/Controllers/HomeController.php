<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data=Blog::all();
        return view('frontend.layout.home',compact('data'));
    }
    public function showBlog(){
        // $allbolgs=Blog::findOrFail();
        return view('frontend.layout.blogList',['datas'=>Blog::all()]);
    }
    public function login(){
        return view('auth.login');
    }
}
