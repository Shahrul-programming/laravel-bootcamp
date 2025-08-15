@extends('layouts.app')
@section('title', $post->title)
@section('content')

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="max-w-3xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    <div class="text-gray-500 text-sm mb-2">
        <!-- info lain -->
    </div>
    <!-- content lain -->
</div>
@endsection