<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    //this method is for showing all post
    public function index(Request $request){
        if($request->search){
            $posts =Post::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        }else{
            $posts = Post::latest()->paginate(4);
        }
        return view('blogPosts.blog', compact('posts'));
    }
   


    //this will link to create post
    public function create()
    {
        return view('blogPosts.create-blog-post');
    }


    // this will store post to database
    public function store(Request $request)
    {
        $request->validate([
            'postTitle' => 'required',
            'postImage' => 'required | image',
            'body' => 'required'
        ]);

        $postId = Post::latest()->take(1)->first()->id + 1;
        $title = $request->input('postTitle');
        $slug = Str::slug($title, '-') . '-' . $postId;
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

    }

    //using Route Model binding to display post on single page
    //this will edit single blog post 
    public function edit(Post $post){
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        return view('blogPosts.edit-single-post', compact('post'));
    }


    //This will update the post
    public function update(Request $request, Post $post){
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        $request->validate([
            'postTitle' => 'required',
            'postImage' => 'required | image',
            'body' => 'required'
        ]);

        $postId = $post->id;
        $title = $request->input('postTitle');
        $slug = Str::slug($title, '-') . '-' . $postId;
        $body = $request->input('body');


        //FILE UPLOAD
        $imagePath =  'storage/' . $request->file('postImage')->store('postImages', 'public');


        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('status', 'Post updated successfully');

        
    }


    //using Route Model binding to display post on single page
    public function show(Post $post){
        return view('blogPosts.single-post', compact('post'));
    }


    public function delete(Post $post) {
        $post->delete();

        return redirect()->back()->with('status', 'Post deleted successfully');
    }

}
