@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-br from-blue-100 via-blue-50 to-white py-16 mb-8">
    <div class="max-w-4xl mx-auto px-6 flex flex-col items-center text-center">
        <div class="mb-6">
            <span class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-200 shadow-lg mb-4">
                <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5zm0-10V4m0 0L3.17 7.91M12 4l8.83 3.91" />
                </svg>
            </span>
            <h1 class="text-4xl font-extrabold text-blue-900 mb-4 drop-shadow">Tentang Aplikasi Blog</h1>
            <p class="text-lg text-gray-700 mb-4 font-medium">Aplikasi Blog adalah platform pembelajaran pengaturcaraan yang direka untuk membantu anda membangunkan kemahiran teknologi anda. Dengan panduan komprehensif dan sumber yang mudah diakses, kami menyediakan pengalaman pembelajaran yang unik dan berkesan.</p>
            <p class="text-lg text-gray-700 mb-4 font-medium">Kami menawarkan kursus dalam Laravel, PHP, dan teknologi web moden lain, dengan fokus pada praktikal dan aplikasi dunia sebenar. Sertai komuniti kami hari ini dan tingkatkan kemahiran pengaturcaraan anda!</p>
        </div>
        <div class="mt-8">
            <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white text-lg font-bold rounded-lg shadow-lg hover:scale-105 transition-transform">Daftar Sekarang</a>
        </div>
    </div>
</section>
@endsection