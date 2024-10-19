<?php

use App\Models\Post;
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
        'posts' => Post::all()
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $post = Post::find($slug);
    if(!$post) {
        return view('posts', ['tittle' => 'Post Not Found', 'posts' => [null]]);
    }
    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact', 'nama' => 'Lisvindanu']);
});
// Buat 2 rute baru
// 1. /blog
// 2. buat artikel, judul dan isi
// 2. /contact
// email dan sosmed
