<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\BlogDeleteEmail;
use App\Events\BlogStoreEvent;
use App\Events\DeleteBlogEvent;
use Yajra\DataTables\DataTables;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\BlogDeleteNotification;
use App\Notifications\DeleteBlogNotification;
use App\Notifications\BlogDeletedNotification;

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

            $data = Blog::get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $url = asset($row->image);
                    return "<img src='$url' width='100'>";
                })
                ->addColumn('action', function ($row) {
                    $edit = '<a href="' . route('editBlog', $row->id) . '" class="edit d-inline btn btn-primary btn-sm">Edit</a>';
                    $delete = '<a href="' . route('deleteBlog', $row->id) . '"class="delete d-inline btn btn-danger btn-sm">Delete</a>';
                    return $edit . '' . $delete;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return view('backend.layout.home');
    }
    //blog form
    public function create()
    {
        return view('backend.layout.addblog');
    }
    //store Blog
    public function store(Request $request, FlasherInterface $flasher)
    {
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10240'
        ]);

        $images = null;
        if ($request->image) {

            $images = 'images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $images);
        };

        $model = new Blog();
        $model->title = $request->title;
        $model->description = $request->description;
        $model->image = $images;
        $model->save();
        //event
        event(new BlogStoreEvent($model));
        return redirect()->route('admin')->with('success', 'Data Save Successfull');
    }
    //edit Blog
    public function edit($id)
    {
        $data = Blog::findOrFail($id);
        return view('backend.layout.editBlog', ['olddatas' => $data]);
    }
    //update Blog
    public function update($id, Request $request, FlasherInterface $flasher)
    { {
            $validation = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10240'
            ]);

            $model = Blog::findOrFail($id);
            $model->title = $request->title;
            $model->description = $request->description;

            if ($request->hasFile('image')) {
                if ($model->image && file_exists(public_path($model->image))) {
                    unlink(public_path($model->image));
                }

                $newImage = 'images/' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $newImage);

                $model->image = $newImage;
            }

            $model->save();

            return redirect()->route('admin')->with('info', 'Data Updated Successfully');
        }
    }
    //delete blog
    public function destroy($id, FlasherInterface $flasher)
    {
        $model = Blog::findOrFail($id);

        // Delete image if it exists
        if ($model->image) {
            $imagePath = public_path($model->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            } else {
                Log::error('Image file not found: ' . $imagePath);
            }
        }

        // Delete the blog post
        $model->delete();

        // Dispatch job to send email
        $users = User::all();

        // Loop through users and send them the notification
        foreach ($users as $user) {
            $user->notify(new BlogDeleteNotification($model));
        }



        return redirect()->route('admin')->with('warning', 'Data Deleted Successfully');
    }
}
