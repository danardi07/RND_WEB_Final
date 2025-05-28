@extends('layouts.app')

@section('title', 'Home - RND')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush


@section('content')

<div class="relative overflow-hidden">

    {{-- Slider --}}
    <div class="slider relative w-full h-[500px] md:h-[600px]">
        @php
            $slides = [
                [
                    'image' => 'assets/images/download.jpg',
                    'title' => 'REKA NAWA DWELLING',
                    'subtitle' => 'Arsitektur & Properti Inovatif',
                    'desc' => 'Kami memberikan solusi desain, kontraktor, dan pengembangan properti yang berkelanjutan.'
                ],
                [
                    'image' => 'assets/images/download.jpg',
                    'title' => 'RUMAH IMPIAN ANDA',
                    'subtitle' => 'Desain Modern & Efisien',
                    'desc' => 'Fungsionalitas dan estetika dalam satu kesatuan untuk hunian masa depan Anda.'
                ]
            ];
        @endphp

        @foreach ($slides as $index => $slide)
            <div
                class="slide absolute inset-0 transition-opacity duration-700 ease-in-out {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
                aria-hidden="{{ $index !== 0 ? 'true' : 'false' }}"
            >
                <img
                    src="{{ asset($slide['image']) }}"
                    alt="Slide {{ $index + 1 }} - {{ $slide['title'] }}"
                    class="w-full h-full object-cover brightness-50"
                    loading="lazy"
                >

                <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6 md:px-20 text-white z-20 max-w-3xl mx-auto space-y-4">
                    <p class="text-lg md:text-xl font-medium tracking-wide">{{ $slide['subtitle'] }}</p>
                    <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">{{ $slide['title'] }}</h1>
                    <p class="text-sm md:text-lg leading-relaxed">{{ $slide['desc'] }}</p>
                    <a href="{{ route('kontak') }}"
                       class="mt-4 inline-flex items-center gap-2 bg-white text-red-700 px-5 py-2 rounded-full font-semibold hover:bg-red-100 transition">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Slider Controls --}}
    <button id="prevSlide" aria-label="Previous Slide"
        class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-white text-black p-3 rounded-full shadow hover:bg-gray-200 transition z-30 select-none">
        Prev
    </button>
    <button id="nextSlide" aria-label="Next Slide"
        class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-white text-black p-3 rounded-full shadow hover:bg-gray-200 transition z-30 select-none">
        Next
    </button>
</div>

{{-- Visi & Misi Section --}}
<section class="bg-white py-16 px-6 md:px-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 animate-fadeInUp">
        <div>
            <h2 class="text-2xl font-bold mb-4">Visi</h2>
            <p class="text-white  leading-relaxed">
                Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif bagi masyarakat.
            </p>
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Misi</h2>
            <ul class="list-disc list-inside text-white space-y-2">
                <li>Menyediakan layanan arsitektur, konstruksi, dan pengembangan properti yang profesional, efisien, dan berorientasi pada kualitas.</li>
                <li>Menghadirkan solusi desain dan bangunan yang fungsional, estetis, dan ramah lingkungan.</li>
                <li>Mengembangkan properti yang tidak hanya bernilai ekonomi, tetapi juga memberi manfaat sosial dan lingkungan.</li>
                <li>Menjalin kemitraan strategis dengan klien, investor, dan komunitas lokal untuk menciptakan proyek-proyek berdampak.</li>
                <li>Mendorong inovasi dan pertumbuhan berkelanjutan dalam setiap aspek operasional perusahaan.</li>
            </ul>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        let current = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('opacity-100', 'z-10');
                slide.classList.add('opacity-0', 'z-0');
                slide.setAttribute('aria-hidden', 'true');
                if (i === index) {
                    slide.classList.add('opacity-100', 'z-10');
                    slide.setAttribute('aria-hidden', 'false');
                }
            });
        }

        function nextSlide() {
            current = (current + 1) % slides.length;
            showSlide(current);
        }

        function prevSlide() {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        }

        document.getElementById('nextSlide').addEventListener('click', nextSlide);
        document.getElementById('prevSlide').addEventListener('click', prevSlide);

        setInterval(nextSlide, 7000);
    });
</script>
@endpush
