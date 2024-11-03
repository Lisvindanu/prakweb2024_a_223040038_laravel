<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpContoller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'About', 'nama' => 'Lisvindanu']);
});


Route::get('/posts', function () {

    return view('posts', [
        'tittle' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
//    dd($post);
    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
//    dd($post);
//    $posts = $user->posts->load('category', 'author');
    return view('posts', [

        'tittle' =>count($user->posts) . '  Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
//    $posts = $category->posts->load('category', 'author');
//    dd($post);
    return view('posts', [
        'tittle' => 'Articles in Category : ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact', 'nama' => 'Lisvindanu']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/signup', [SignUpContoller::class, 'index']);
Route::post('/signup', [SignUpContoller::class, 'store']);
