<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(12);
        $categories = Category::all();
        $tags = Tag::all();
        return view('guest.posts.index', compact('posts', 'categories', 'tags'));
    }

   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('guest.posts.show', compact('post'));
    }

    
}
