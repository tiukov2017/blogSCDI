<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use resources\views\analiticServer;

class PostsController extends Controller
{
    public function __construct (){}

    public function index ()
    {
            $bloqs = Post::all();
        //dd($bloqs->jsonSerialize());
        return view('show',compact('bloqs'));
    }
    public function blog ()
    {
        return view('bloq');
    }
    public function about ()
    {
        return view('about');
    }
    public function test ()
    {
        $bloqs = Post::all();

        foreach($bloqs as $post)
        {
            $wordCount = 0;
            $words = str_word_count($post->body, 1);

            foreach ($words as $word) {
                if ($word != '') {
                    $wordCount++;

                    if (empty($arr[$word])) $arr[$word] = 1;
                    else $arr[$word]++;
                }
            }

        }
        arsort($arr);
        $top=array_slice($arr,0,10);
        $i=0;


        return view('analytics',compact('top'));
    }
    public function welcome ()
    {
        return view('welcome');
    }
    public function create ()
    {
            //dd('test-create');
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
            $post = Post::findOrFail($id);
            return view('insert',compact('post'));
    }

    public function update(Request $request, $id)
    {
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
            ]);
            $post = Post::find($id);

            $post->update($request->all());
            return redirect('/bloq/show');
    }
}
