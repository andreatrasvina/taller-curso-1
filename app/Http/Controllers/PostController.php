<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //conexion a la base de datos
        $posts = Post::get();

        //RESPUESTA
        //retorna la vista a la que manda y los datos que se enviaran a  a traves de ella
        return view('blog',['posts' => $posts]);

    }
}
