<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('backend.layout.home');
    }
    public function login(){
        return view('auth.login');
    }
}
