<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            // Retrieve the blog posts from the Blog model
            $data = Blog::query();

            return DataTables::of($data)
                ->addIndexColumn()  // Adding index column for table pagination
                ->addColumn('action', function($row){
                    // Button to view a specific blog post
                    $btn = '<a href="javascript:void(0)" class="view btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])  // Ensure that HTML in 'action' column is rendered
                ->make(true);  // Return the DataTables response
        }

        // Return the view to display the blogs
        return view('backend.layout.home');  // This view will contain your DataTables listing
    }

    /**
     * Show the details of a specific blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the blog post by ID
        $blog = Blog::findOrFail($id);

        // Return the view to show the blog details
        return view('backend.layout.home', compact('blog'));
    }
}
