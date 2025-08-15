@extends('layouts.app')
@section('title', 'Create Post')
@section('content')

<div class="max-w-6xl mx-auto px-6 py-16">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category" id="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="author_info" class="block text-sm font-medium text-gray-700">Author Info</label>
                <input type="text" name="author_info" id="author_info" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Create Post</button>
        </form>
    </div>


@endsection