<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplikasi Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <x-style />
    </head>
    <body class="bg-white text-gray-900 min-h-screen flex flex-col">
        <!-- Toast Notification -->
        @if(session('success') || session('error'))
            <div id="toast-notification" class="fixed top-6 right-6 z-50">
                <div class="px-6 py-4 rounded-lg shadow-lg text-white font-semibold flex items-center gap-3 animate-fade-in-down
                    {{ session('success') ? 'bg-green-500' : 'bg-red-500' }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') ?? session('error') }}</span>
                </div>
            </div>
            <script>
                setTimeout(() => {
                    const toast = document.getElementById('toast-notification');
                    if (toast) toast.style.display = 'none';
                }, 3000);
            </script>
        @endif
        <!-- Navigation -->
       <x-navbar />

        <!-- Main Content -->
    <main class="flex-1 pt-20">
            @yield('content')
        </main>

        <!-- Footer -->
        <x-footer />
    </body>
</html>