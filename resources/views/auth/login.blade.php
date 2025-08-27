@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-blue-50 to-white py-12">
    <div class="w-full max-w-md bg-white/80 backdrop-blur-md rounded-2xl shadow-2xl p-8">
        <h2 class="text-3xl font-extrabold text-blue-900 mb-8 text-center drop-shadow">Log Masuk Akaun</h2>
        <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white/90">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white/90">
            </div>
            <button type="submit" class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold rounded-lg shadow-lg hover:scale-105 transition-transform">Log Masuk</button>
        </form>
        <div class="mt-6 text-center text-sm text-gray-600">
            Belum ada akaun? <a href="{{ route('register') }}" class="text-blue-700 font-semibold hover:underline">Daftar sekarang</a>
        </div>
    </div>
</div>
@endsection
