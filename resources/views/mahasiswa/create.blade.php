@extends('layouts.main')

@section('content')

    <h2>Tambah Data Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
        @error('nama')
            <br><small style="color:red">{{ $message }}</small>
        @enderror
        <br>

        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
        @error('nim')
            <br><small style="color:red">{{ $message }}</small>
        @enderror
        <br>

        <label for="angkatan">Angkatan</label><br>
        <input type="number" id="angkatan" name="angkatan" value="{{ old('angkatan') }}">
        @error('angkatan')
            <br><small style="color:red">{{ $message }}</small>
        @enderror
        <br>

        <label for="prodi">Program Studi</label><br>
        <input type="text" id="prodi" name="prodi" value="{{ old('prodi') }}">
        @error('prodi')
            <br><small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection