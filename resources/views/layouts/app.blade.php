<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'REKA NAWA DWELLING')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="bg-white flex flex-col min-h-screen font-sans relative @yield('body-class')">


    <!-- HEADER -->
    <header class="bg-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo" class="h-12 w-auto">
            <span class="text-xl font-bold text-black tracking-widest uppercase">REKA NAWA DWELLING</span>
        </div>
    </header>

    <!-- NAVBAR -->
    <nav class="relative z-50 bg-gradient-to-r from-red-800 via-red-900 to-red-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ul class="flex flex-wrap justify-center gap-6 py-4 text-gray-200 font-semibold tracking-wider uppercase">
                @if (!Request::is('/') && !Request::is('welcome'))
                <li><a href="{{ route('home') }}" class="hover:text-black transition duration-200">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-black transition duration-200">Tentang</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-black transition duration-200">Kontak</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gradient-to-r from-red-800 via-red-900 to-red-800 text-black py-4 mt-auto select-none">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  text-center text-sm font-semibold tracking-wider">
            &copy; {{ date('Y') }} REKA NAWA DWELLING. All rights reserved.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
