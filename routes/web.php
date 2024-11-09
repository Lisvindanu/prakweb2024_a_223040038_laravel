<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
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
        'posts' => Post::filter(request(['search', 'categories', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
//    dd($post);
    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
//    dd($post);
//    $posts = $user->posts->load('categories', 'author');
    return view('posts', [

        'tittle' =>count($user->posts) . '  Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});
Route::get('/categories/{categories:slug}', function (Category $category) {
//    $posts = $categories->posts->load('categories', 'author');
//    dd($post);
    return view('posts', [
        'tittle' => 'Articles in Category : ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact', 'nama' => 'Lisvindanu']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignUpContoller::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpContoller::class, 'store']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show']);
