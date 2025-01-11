<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view(view: 'frontend.layout.home');
    }
    public function showBlog(){
        return view('frontend.layout.blogList');
    }
    public function login(){
        return view('auth.login');
    }
}
