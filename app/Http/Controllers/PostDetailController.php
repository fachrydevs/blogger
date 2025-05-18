<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostDetailController extends Controller
{
    //
    private function pagination($id)
    {
        $dataPrev = Post::where('status', 'publish')->where('id', '<', $id)->orderBy('id', 'desc')->first();
        $dataNext = Post::where('status', 'publish')->where('id', '>', $id)->orderBy('id', 'desc')->first();

        $data = [
            'prev' => $dataPrev,
            'next' => $dataNext
        ];

        return $data;
    }
    public function detail($slug)
    {
        // echo ("$slug");

        $data = Post::where('status', 'publish')->where('slug', $slug)->first();
        // $data = Post::where('status', 'publish')->where('slug', $slug)->firstOrFail();

        $pagination = $this->pagination($data->id);

        return view('components.posts.post-detail', compact('data', 'pagination'));
    }

    
}
