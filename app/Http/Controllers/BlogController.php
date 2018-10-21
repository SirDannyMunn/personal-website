<?php

namespace App\Http\Controllers;

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
}
