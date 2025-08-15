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

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'content' => 'required',
            'category' => 'required',
            'author' => 'required',
            'author_info' => 'required',
            'image' => 'required',
        ]);

        $post->update($validated);

        return redirect()->route('posts.show', ['slug' => $post->slug])
            ->with('success', 'Post berjaya dikemaskini!');
    }

    public function destroy($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post berjaya dipadam!');
}
}