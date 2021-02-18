<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        $all_posts = Post::all();
        dd($all_posts);
        return view('posts');
    }
}
