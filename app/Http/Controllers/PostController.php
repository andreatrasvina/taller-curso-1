<?php

namespace App\Http\Controllers;

class PostController
{
    public function index() //__invoke() - Forma de invocar un controlador, sirve si hace una sola accion o un metodo
    {
        $posts = [
            ['title' => 'First post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post'],
        ];

        //RESPUESTA
        //retorna la vista a la que manda y los datos que se enviaran a  a traves de ella
        return view('blog',['posts' => $posts]);
    }

}
