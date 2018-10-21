<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $data['posts'] = Post::all();

        return view('blog.index', $data);
    }

    public function show($slug)
    {
        $data['post'] = Post::where('slug', $slug)->first();

        return view('blog.show', $data);
    }
}
