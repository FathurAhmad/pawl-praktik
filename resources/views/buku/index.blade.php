@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Buku</h3>
    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $buku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>
                    <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
