 <nav class="border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-8">
                        <a href="#" class="text-xl font-light text-gray-800">Aplikasi Blog</a>
                        <div class="hidden md:flex space-x-6">
                            <li><a href="{{ route('welcome') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors {{ request()->routeIs('welcome') ? 'font-bold' : '' }}">Laman Utama</a></li>
                            <li><a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors {{ request()->routeIs('about') ? 'font-bold' : '' }}">Tentang Blog</a></li>
                            <li><a href="{{ route('contact') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors {{ request()->routeIs('contact') ? 'font-bold' : '' }}">Hubungi Kami</a></li>
                            <li><a href="{{ route('blog.index') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors {{ request()->routeIs('blog.index') ? 'font-bold' : '' }}">Blog</a></li>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Log Masuk</a>
                        <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition-colors">Daftar</a>
                    </div>
                </div>
        </div>
 </nav>