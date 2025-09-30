@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Detail Buku</h3>
    <div class="card p-3 mt-3">
        <p><strong>Judul:</strong> {{ $buku->judul }}</p>
        <p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
    </div>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
