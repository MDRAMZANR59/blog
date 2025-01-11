<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {

    //         $data = Blog::query();

    //         return DataTables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){

    //                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }

    //     return view('frontend.layout.blogList');
    // }
    public function index(){
        return view('backend.layout.home');
    }
    public function login(){
        return view('auth.login');
    }
}
