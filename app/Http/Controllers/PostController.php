<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::where('post_type', 'post')
                        ->where('post_status', 'publish')
                        ->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

}
