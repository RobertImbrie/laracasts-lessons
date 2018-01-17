<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        // Create new post w/ request data
        $post = new \App\Post;
        // $post->title = request('title');
        // $post->body = request('body');
        //Save to database
        $post->save();
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        //Redirect to homepage
        return redirect('/');
    }
}
