<?php

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
// Buat 2 rute baru
// 1. /blog
// 2. buat artikel, judul dan isi
// 2. /contact
// email dan sosmed


//    $post = Post::find($id);
//    if(!$post) {
//        return view('posts', ['tittle' => 'Post Not Found', 'posts' => [null]]);
//    }
