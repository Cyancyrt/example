<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => \App\Models\Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single halaman",
            "post" => Post::find($slug)
        ]);
    }
}
