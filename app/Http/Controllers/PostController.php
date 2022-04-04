<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon article',
            'Mon second article'
        ];
        
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $posts = [
            1 => 'Mon article numero 1',
            2 => 'Mon article numero 2'
        ];

        $post = $posts[$id];
        return view('article', [
           'post' => $post 
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
