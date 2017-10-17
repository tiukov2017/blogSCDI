<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function __construct ()
    {

    }

    public function index ()
    {
        $bloqs = Post::all();

        return view('show',compact('bloqs'));
    }

//    public function show (Post $post)
//    {
//        // $post = Post::find($id);
//
//        return view('posts.show',compact('post'));
//    }

    public function create ()
    {

        return view('create');
    }

    public function store ()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body'=>'required'
        ]);

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect('/bloq/show');
    }

    public function delete ($id)
    {

            Post::findOrFail($id)->delete();

            return redirect('/bloq/show');

    }
    public function post ($id)
    {
        $post = Post::findOrFail($id);

        return view('Post',compact('post'));
    }
    public function insert ($id)
    {
        //dd('id = 19');
//        $this->validate(request(),[
//            'title' => 'required',
//            'body'=>'required'
//        ]);

        $post = Post::findOrFail($id);
        //dd($post);
        return view('insert',compact('post'));
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();
//
//        return redirect('/bloq/show');
    }
}
