@extends('layouts.app')

@section('title', 'Kontak - RND')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Kontak.css') }}">
@endpush

@section('content')
<div class="container">
    <h2>Ada Pertanyaan Lain?</h2>
    <p class="intro">Hubungi kami jika anda memiliki pertanyaan lebih lanjut tentang Layanan Jasa kami, Harga dan lainnya. Tim kami siap melayani anda dengan senang hati.</p>

    <h1>Hubungi Kami</h1>
    <p>Silakan isi form berikut untuk menghubungi kami atau mengirimkan pertanyaan Anda.</p><br>

    <div class="contact-wrapper">
      <!-- Form kontak -->
      <form action="/contact/send" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Lengkap" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="text" name="subject" placeholder="Subjek" required />
        <textarea name="message" rows="6" placeholder="Pesan Anda" required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>

      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8350323376567!2d110.3893968!3d-7.8080157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578dfb0a4d4f%3A0x95c3c6c0fdcd8df9!2sBaciro%2C%20Kec.%20Gondokusuman%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716890985723!5m2!1sid!2sid"
          loading="lazy"
          allowfullscreen=""
          referrerpolicy="no-referrer-when-downgrade"
          title="Peta Lokasi Baciro, Yogyakarta"
        ></iframe>
      </div>
    </div>

    <div class="contact-info">
      <h4>Informasi Kontak</h4>
      <p><strong></strong> Jl. Pacar, Baciro Baru, Gondokusuman, Yogyakarta, DIY</p>
      <p><strong></strong> info@contoh.com</p>
      <p><strong></strong> +62 812-3456-7890</p>
    </div>
  </div>
@endsection
