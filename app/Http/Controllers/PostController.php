<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function index()
    {
        //conexion a la base de datos
        $posts = Post::get();

        //RESPUESTA
        //retorna la vista a la que manda y los datos que se enviaran a  a traves de ella
        return view('posts.index',['posts' => $posts]);

    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request){
        //return $request->input('title');

//        $post = new Post;
//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//        $post->save();

        Post::create($request->validated());

        //para eliminar esta linea se agrega en el return '->with('status', 'Post created!')'
        //session()->flash('status', 'Post created!');

        //return redirect()->route('posts.index');

        return to_route('posts.index')->with('status', 'Post created!');

    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){

//        $validated = $request->validate([
//            'title' => ['required', 'min:4'],
//            'body' => ['required'],
//
//        ]);
//
//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//        $post->save();

//        $post->update($validated);

        $post->update($request->validated());


        //return redirect()->route('posts.index');
        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }


}
