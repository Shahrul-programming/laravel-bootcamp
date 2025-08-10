@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-900 w-full py-12">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Hubungi Kami</h1>
            <p class="text-gray-500 dark:text-gray-400 mt-2">
                Kami sedia membantu anda dari Isnin hingga Jumaat, 8 pagi hingga 5 petang.
            </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Email -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Email</h2>
                <p class="text-gray-500 dark:text-gray-400">Sokongan & pertanyaan umum</p>
                <p class="text-teal-600 font-medium mt-2">support@aplikasi-blog.com</p>
            </div>

            <!-- Pejabat -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Alamat Pejabat</h2>
                <p class="text-gray-500 dark:text-gray-400">Ibu Pejabat Utama</p>
                <p class="text-teal-600 font-medium mt-2">
                    No. 12, Jalan Teknologi, Cyberjaya, Malaysia
                </p>
            </div>

            <!-- Telefon -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Telefon</h2>
                <p class="text-gray-500 dark:text-gray-400">Isnin - Jumaat (8am - 5pm)</p>
                <p class="text-teal-600 font-medium mt-2">+60 12-345 6789</p>
            </div>
        </div>
    </div>
</div>
@endsection
