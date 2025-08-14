{{-- filepath: resources/views/posts/show.blade.php --}}
@extends('layouts.app')
@section('title', $post->title)
@section('content')
<div class="max-w-3xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
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