@extends('layouts.app')
@section('title', 'Blog Posts')
@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 animate-fade-in">
    <div class="mb-16">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-blue-900 mb-3 drop-shadow-lg">Blog Posts</h1>
            <p class="text-gray-500 text-base font-medium">Platform Pembelajaran Pengaturcaraan</p>
        </div>

        <!-- Search component -->
    <div class="max-w-md mx-auto mb-8">
            <form method="GET" action="{{ route('posts.index') }}" class="relative flex gap-2">
                <div class="relative flex-grow">
                    <input type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search posts..."
                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200 bg-gradient-to-r from-blue-50 to-white">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    @if(request('search'))
                        <button type="button"
                                onclick="document.querySelector('input[name=search]').value=''; this.closest('form').submit();"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    @endif
                </div>
                <button type="submit"
                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold text-sm rounded-lg transition-colors duration-200 shadow-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
        <!-- End -->

        <!-- Create Blog Button -->
        <div class="flex justify-center">
            <a href="{{ route('posts.create') }}"
               class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 shadow-sm hover:shadow-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create New Post
            </a>
        </div>
    </div>

    <!-- Search Results Info -->
    @if(request('search'))
        <div class="mb-6 text-center">
            <p class="text-gray-600 text-sm">
                Showing results for "<span class="font-medium">{{ request('search') }}</span>"
                @if($posts->count() > 0)
                    - {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} found
                @else
                    - No posts found
                @endif
            </p>
        </div>
    @endif
    <!-- End -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($posts as $post)
        <article class="bg-gradient-to-br from-blue-50/80 to-white/80 rounded-2xl p-6 shadow-md border border-gray-100 flex flex-col justify-between h-full backdrop-blur-md transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:bg-white/90 hover:border-blue-200">
            <div>
                <div class="flex items-center gap-x-3 text-xs mb-4">
                    <time datetime="{{ $post->created_at }}" class="text-gray-400">{{ \Carbon\Carbon::parse($post->created_at)->format('j M Y') }}</time>
                    <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">{{ $post->category }}</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug">
                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="hover:text-blue-700 transition-colors">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-sm text-gray-700 leading-relaxed line-clamp-3 mb-4">{{ Str::limit(strip_tags($post->content), 120) }}</p>
            </div>
            <div class="flex items-center gap-x-3 pt-4 border-t border-gray-100 mt-auto">
                <img src="{{ $post->image }}" alt="{{ $post->user ? $post->user->name : 'Unknown Author' }}" class="w-10 h-10 rounded-full border-2 border-blue-200 shadow" />
                <div class="text-xs">
                    <p class="font-semibold text-gray-900">{{ $post->user ? $post->user->name : 'Unknown Author' }}</p>
                    <p class="text-gray-500">{{ $post->user ? $post->user->email : 'No email available' }}</p>
                </div>
            </div>
        </article>
    @endforeach
    </div>
</div>
@endsection