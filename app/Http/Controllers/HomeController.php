<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = Post::where('status', 'publish')->orderBy('id', 'desc')->paginate(5);

        return view('components/Posts.posts-page', compact('data'));
    }
}
