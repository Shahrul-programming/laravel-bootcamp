@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-br from-blue-100 via-blue-50 to-white py-16 mb-8">
    <div class="max-w-4xl mx-auto px-6 flex flex-col items-center text-center">
        <span class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-200 shadow-lg mb-4">
            <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10.34V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2h14a2 2 0 002-2v-4.34a2 2 0 00-.59-1.41l-6.83-6.83a2 2 0 00-2.83 0l-6.83 6.83A2 2 0 003 13.66z" />
            </svg>
        </span>
        <h1 class="text-4xl font-extrabold text-blue-900 mb-4 drop-shadow">Hubungi Kami</h1>
        <p class="text-lg text-gray-700 mb-8 font-medium">Kami sedia membantu anda dari Isnin hingga Jumaat, 8 pagi hingga 5 petang.</p>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 w-full">
            <!-- Email -->
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-xl shadow-lg text-center">
                <h2 class="text-xl font-bold text-blue-800 mb-2">Email</h2>
                <p class="text-gray-500">Sokongan & pertanyaan umum</p>
                <p class="text-teal-600 font-semibold mt-2">support@aplikasi-blog.com</p>
            </div>
            <!-- Pejabat -->
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-xl shadow-lg text-center">
                <h2 class="text-xl font-bold text-blue-800 mb-2">Alamat Pejabat</h2>
                <p class="text-gray-500">Ibu Pejabat Utama</p>
                <p class="text-teal-600 font-semibold mt-2">No. 12, Jalan Teknologi, Cyberjaya, Malaysia</p>
            </div>
            <!-- Telefon -->
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-xl shadow-lg text-center">
                <h2 class="text-xl font-bold text-blue-800 mb-2">Telefon</h2>
                <p class="text-gray-500">Isnin - Jumaat (8am - 5pm)</p>
                <p class="text-teal-600 font-semibold mt-2">+60 12-345 6789</p>
            </div>
        </div>
    </div>
</section>
@endsection
