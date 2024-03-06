<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
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



Route::view('/', 'welcome')->name('home');

//no accede al nombre de la ruta directamente(whatever), se le asigna un
//nombre y se manda a llamar con ese nuevo nombre desde la vista
Route::view('/whatever', 'contact')->name('contact');


//Nombre de la url, nombre de la vista que muestra, parametros de datos que pasamos
//Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');

//Cambiamos el metodo por get porque ahora pasaremos datos y no sera solo de vista
//PETICION
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');


Route::view('/about', 'about')->name('about');

Route::get('/login', function () {
    return 'Login page';
})->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);
