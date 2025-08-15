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

    public function show($slug)
    {
        // Cari post berdasarkan slug
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'author' => 'required',
            'author_info' => 'required',
            'image' => 'nullable|string|max:2048',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        // Simpan ke database
        Post::create($validated);

        // Redirect ke senarai post
        return redirect()->route('posts.index')->with('success', 'Post berjaya ditambah!');
    }
}