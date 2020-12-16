<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    //





    public function index()
    {
        $tags = Tag::get();
        
        return view('tags.index', [
            'tags' => $tags
        ]);
    }






    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.show', [
            'tag' => $tag
        ]);
    }



    public function create()
    {
        return view('tags.create');
    }







    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);

        Tag::create([
            'name' => $request->name
        ]);

        return redirect( url('/tags') );
    }





    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.edit', [
            'tag' => $tag
        ]);
    }







    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);

        Tag::findOrFail($id)->update([
            'name' => $request->name
        ]);

        return redirect( url("/tags/show/{$id}") );
    }
    



    public function delete($id)
    {
        Tag::findOrFail($id)->delete();

        return redirect( url('/tags') );
    }
}
