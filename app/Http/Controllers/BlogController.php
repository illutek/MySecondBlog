<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(){
        // zonder paginate maar decs georderd
        //$posts = Post::orderBy('created_at', 'desc')->get();

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('blog.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);

        return view('blog.show', compact('post'));
    }
}
