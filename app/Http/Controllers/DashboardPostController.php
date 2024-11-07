<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('author_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $validatedData = $request->validate([
                'tittle' => 'required|max:255',
                'slug' => 'required|unique:posts|max:255',
                'category_id' => 'required',
                'body' => 'required'
            ]);

        $validatedData['author_id'] = auth()->user()->id;
        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post created!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.show', [
            'tittle' => ($post->tittle),
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules =[
            'tittle' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts|max:255';
        }

        $validatedData = $request->validate($rules);
        $validatedData['author_id'] = auth()->user()->id;
        Post::where('id', $post->id)
        ->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted successfully!');
    }

    public function checkSlug(Request $request) {
            $slug = SlugService::createSlug(Post::class, 'slug', $request->tittle);
            return response()->json(['slug' => $slug]);
    }
}
