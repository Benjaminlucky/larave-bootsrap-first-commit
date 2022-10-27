<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    //this method is for showing all post
    public function index()
    {
        return view('blog');
    }


    //this will link to create post
    public function create()
    {
        return view('create-blog-post');
    }


    // this will store post to database
    public function store(Request $request)
    {
        $request->validate([
            'postTitle' => 'required',
            'postImage' => 'required | image',
            'body' => 'required'
        ]);


        $title = $request->input('postTitle');
        $slug = Str::slug($title, '-');
        $user_id = Auth::user()->id;
        $body = $request->input('body');


        //FILE UPLOAD
        $imagePath =  'storage/' . $request->file('postImage')->store('postImages', 'public');


        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('status', 'Post created successfully');

        //postImages/GCAwFk8Qa2JqNBNiSxqD7e05SCywhXiRBa12AWGV.jpg
    }

}
