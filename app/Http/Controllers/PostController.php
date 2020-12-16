<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\models\Tag;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Storage;

class PostController extends Controller
{
    //



    public function index(){

        $posts = Post::get();
        $posts = Post::paginate(2);

        return view('posts.index', ['posts'=>$posts]);

    }



    public function create(){
        $tags = Tag::select('id', 'name')->get();
        return view('posts.create', ['tags' => $tags]);

    }


    public function store(Request $request){

        $request->validate([
            'title'=>'required|string|min:5|max:255',
            'topic'=>'required|string',
            'desc'=>'required|string|min:5|max:255',
            'tag_id'=>'required|integer|exists:tags,id',
            'img' => 'required|image|mimes:jpg,png|max:1024',

        ]);


        $path = Storage::putFile('posts', $request->file('img'));


        Post::create([
            'title'=>$request->title,
            'topic'=>$request->topic,
            'desc'=>$request->desc,
            'img'=>$path,
            'tag_id'=>$request->tag_id
        ]);

        return redirect(url('/posts'));

    }




    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);

    }



    public function search($keyword){
        $posts = Post::where('title', 'like', "%$keyword%")->get();
        return view('posts.search', ['posts' => $posts, 'keyword' => $keyword]);
    }






    public function delete($id){
        $post = Post::findOrFail($id);
        $path = $post->img;
        Storage::delete($path);

        $post->delete();
        return redirect('/posts');

    }


    public function edit($id){

        $post = Post::findOrFail($id);
        $tags = Tag::select('id', 'name')->get();
        return view('posts.edit', ['post' => $post, 'tags'=>$tags]);

    }


    public function update($id, Request $request){

        $request->validate([
            'title'=>'required|string|min:5|max:255',
            'topic'=>'required|string',
            'desc'=>'required|string|min:5|max:255',
            'img' => 'nullable|image|mimes:jpg,png|max:1024',

        ]);

        $post = Post::findOrFail($id);
        $path = $post->img;

        if($request->hasFile('img')){

            Storage::delete($path);

             //upload new
            $path = Storage::putFile('posts', $request->file('img'));
        }


        //store in db
        $post->update([
            'title'=>$request->title,
            'topic'=>$request->topic,
            'desc'=>$request->desc,
            'img'=>$path,
        ]);


        return redirect(url("/posts/show/{$id}"));

    }




















}
