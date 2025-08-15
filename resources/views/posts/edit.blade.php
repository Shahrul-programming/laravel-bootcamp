@extends('layouts.app')
@section('title', 'Edit Post')
@section('content')

<div class="max-w-2xl mx-auto px-6 py-16">

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->slug) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="5"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" id="author" value="{{ old('author', $post->author) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="mb-4">
            <label for="author_info" class="block text-sm font-medium text-gray-700">Author Info</label>
            <input type="text" name="author_info" id="author_info" value="{{ old('author_info', $post->author_info) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image (URL)</label>
            <input type="text" name="image" id="image" value="{{ old('image', $post->image) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Update Post</button>
    </form>
</div>

@endsection