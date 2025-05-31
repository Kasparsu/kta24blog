<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        //$posts = Post::simplePaginate();
        $posts = Post::latest()->paginate();
        return view('index', compact('posts'));
    }

    public function about() {
        return view('about');
    }
}
