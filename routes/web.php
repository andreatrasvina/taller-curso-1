<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


//laravel9.test
Route::get('/', function () {
    return view('welcome');
});

*/

$posts = [
    ['title' => 'First post'],
    ['title' => 'Second post'],
    ['title' => 'Third post'],
    ['title' => 'Fourth post'],
];


Route::view('/', 'welcome')->name('home');

//no accede al nombre de la ruta directamente(whatever), se le asigna un
//nombre y se manda a llamar con ese nuevo nombre desde la vista
Route::view('/whatever', 'contact')->name('contact');


//Nombre de la url, nombre de la vista que muestra, parametros de datos que pasamos
//Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');

//Cambiamos el metodo por get porque ahora pasaremos datos y no sera solo de vista
//PETICION
Route::get('/blog', function (){

    $posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post'],
    ];

    //RESPUESTA
    //retorna la vista a la que manda y los datos que se enviaran a  a traves de ella
    return view('blog',['posts' => $posts]);

})->name('blog');

Route::view('/about', 'about')->name('about');
