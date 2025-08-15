@extends('layouts.app')
@section('title', $post->title)
@section('content')

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="max-w-3xl mx-auto px-6 py-16">

    {{-- Butang Edit --}}
    <a href="{{ route('posts.edit', $post->slug) }}"
       class="inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 mb-4">
        Edit Post
    </a>

    {{-- Butang Delete --}}
    <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" class="inline-block" onsubmit="return confirm('Padam post ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">
            Delete Post
        </button>
    </form>

    <h1 class="text-3xl font-bold mb-4 mt-8">{{ $post->title }}</h1>
    <div class="text-gray-500 text-sm mb-2">
        <span>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</span>
        <span class="ml-2 px-2 py-1 bg-blue-50 text-blue-600 rounded">{{ $post->category }}</span>
    </div>
    <img src="{{ $post->image }}" alt="" class="w-32 h-32 rounded-full mb-4" />
    <div class="mb-6 text-gray-700">{{ $post->content }}</div>
    <div class="text-xs text-gray-500">
        Ditulis oleh {{ $post->author }} ({{ $post->author_info }})
    </div>
</div>
@endsection