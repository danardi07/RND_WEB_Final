
<h2>Daftar Proyek</h2>
@foreach ($proyeks as $proyek)
    <div>
        <a href="{{ route('proyek.show', $proyek->id) }}">{{ $proyek->nama }}</a>
    </div>
@endforeach
