@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Detail Mahasiswa</h3>
    <div class="card p-3 mt-3">
        <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
        <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
        <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
        <p><strong>Angkatan:</strong> {{ $mahasiswa->angkatan }}</p>
    </div>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
