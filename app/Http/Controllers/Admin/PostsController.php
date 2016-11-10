<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * PostsController constructor.
     * Op deze manier wordt het admin gedeelte beveiligd
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'desc')->get();

        // Enkel de posts tonen van de ingelogde bezoeker orderBy en paginate
        $posts = auth()
            ->user()
            ->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;

        // ingelogde user uit het request vullen zijn posts met een nieuwe $post
        $request->user()->posts()->save($post);

        Session::flash('succes', 'The post was succesfully saved');

        return redirect(route('admin.posts.show', $post->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        //Session::flash('succes', 'The post was succesfully updated');
        $request->session()->flash('succes', 'The post was succesfully updated, second method');

        return redirect(route('admin.posts.show', $post->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('deleted', 'The post was succesfully deleted');

        return redirect(route('admin.posts.index'));
    }
}
