<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'content' => 'required',
            'category' => 'required',
            'author' => 'required',
            'author_info' => 'required',
            'image' => 'nullable|string|max:2048',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $post = Post::create($validated);

        return redirect()->route('posts.show', ['slug' => $post->slug])
            ->with('success', 'Post berjaya ditambah!');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
}