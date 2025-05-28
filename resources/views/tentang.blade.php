@extends('layouts.app')

@section('title', 'Tentang - RND')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endpush

@section('content')


{{-- Bungkus semua konten dengan container --}}
<div class="container mx-auto px-6 space-y-16">

    <div>
        <div class="section-title">About Our Company</div>
        <div class="underline"></div>
        <div class="underline yellow"></div>
    </div>

    <div class="brief flex flex-col md:flex-row items-center gap-8">
        <div class="brief-icon">
            <img src="{{ asset('assets/images/ICON.png') }}" alt="Icon">
        </div>
        <div class="brief-text">
            <h3 class="text-xl font-bold mb-2">A Brief Story About the Company</h3>
            <p class="mb-2">Reka Nawa Dwelling (RND) adalah perusahaan di bidang Arsitektur, Kontraktor dan Pengembangan Properti. Kami menghadirkan solusi terpadu dalam perencanaan, pelaksanaan, dan optimalisasi aset properti, dengan fokus pada kualitas, ketepatan waktu, dan nilai berkelanjutan.</p>
            <p>Didukung oleh tim profesional yang kompeten, RND berkomitmen menjadi mitra strategis dalam mewujudkan ruang yang fungsional, estetis, dan bernilai ekonomi tinggi.</p>
        </div>
    </div>

    <div class="highlight-section flex flex-col md:flex-row gap-8 items-center">
        <div class="highlight-left text-center md:text-left">
            <h2 class="text-2xl font-bold text-white mb-4">DESAIN CERDAS,<br>HUNIAN BERKUALITAS.</h2>
            <img src="{{ asset('assets/images/LoGoo.png') }}" alt="Desain Icon" class="rounded shadow-md">
        </div>
        <div class="highlight-right">
            <img src="{{ asset('assets/images/gedung.jpg') }}" alt="Gedung" class="rounded shadow-md">
        </div>
    </div>

    <div class="section space-y-4">
        <h2 class="text-xl font-bold">Visi</h2>
        <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif.</p>

        <h2 class="text-xl font-bold">Misi</h2>
        <ul class="list-disc list-inside space-y-2">
            <li>Menyediakan layanan arsitektur & konstruksi profesional</li>
            <li>Mengembangkan properti yang bernilai ekonomi & sosial</li>
            <li>Menjalin kemitraan strategis dengan klien</li>
            <li>Mendorong inovasi & keberlanjutan</li>
        </ul>
    </div>

    <div class="layanan-with-image flex flex-col md:flex-row gap-10 items-center">
        <div class="layanan-left space-y-4">
            <h2 class="text-xl font-bold text-red-700">Layanan Kami</h2>
            <ul class="list-disc list-inside space-y-1">
                <li><strong>Desain Arsitektur</strong> – Gambar kerja, desain interior, renovasi</li>
                <li><strong>Kontraktor Umum</strong> – Pembangunan, renovasi, MEP, finishing</li>
                <li><strong>Pengembangan Properti</strong> – Jual beli, revitalisasi aset</li>
            </ul>
        </div>
        <div class="layanan-right">
            <img src="{{ asset('assets/images/ilustrasi.jpg') }}" alt="Ilustrasi Layanan" class="rounded shadow-md">
        </div>
    </div>

    <div class="cta bg-red-900 text-white text-center py-10 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Ayo Bangun Proyek Bersama RND!</h2>
        <a href="/portfolio"
           class="inline-block bg-white text-red-800 px-6 py-2 rounded-full font-semibold">
            Lihat Portofolio Kami
        </a>
    </div>

    <div class="priority-section text-center space-y-4">
        <div class="priority-text text-xl font-bold tracking-widest">ANDA ADALAH PRIORITAS KAMI</div>
        <div class="priority-image flex flex-col items-center gap-2">
            <div class="yellow-strip w-32 h-1 bg-yellow-400"></div>
            <img src="{{ asset('assets/images/llogo.png') }}" alt="Prioritas Gambar" class="w-24">
        </div>
    </div>

</div>
@endsection
