@extends('layouts.app')

@section('title', 'Welcome - RND')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')

<section class="relative h-[450px] flex items-center justify-center text-white text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/images/okok.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="z-10 space-y-4 animate-fadeInUp">
        <p class="text-xl">SELAMAT DATANG DI</p>
        <h1 class="text-4xl font-bold">REKA NAWA DWELLING</h1>
        <p class="text-lg">Solusi arsitektur, kontraktor, dan properti inovatif dan berkelanjutan.</p>
        <a href="/home" class="mt-4 inline-block bg-black text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition">Masuk ke Halaman Utama</a>
    </div>
</section>

<section id="contact" class="bg-red-900 text-white py-12 px-4 md:px-20 flex flex-col md:flex-row justify-between gap-8">
    <div class="space-y-2">
        <h3 class="text-xl uppercase tracking-wider font-bold">Our Contact</h3>
        <p>📞 +62 851-4765-2009 / +62 822-2324-0324</p>
        <p>✉️ officialrnd09@gmail.com</p>
        <p>📸 officialrnd09</p>
    </div>
    <div>
        <h3 class="text-xl uppercase tracking-wider font-bold">Research and Development</h3>
        <p>Menciptakan solusi inovatif, berkelanjutan, dan berdampak positif melalui layanan arsitektur, kontraktor dan pengembangan properti.</p>
    </div>
</section>

@endsection
