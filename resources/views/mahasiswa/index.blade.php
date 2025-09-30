@extends('layouts.main')

@section('content')
    <div>
        <h2>Daftar Mahasiswa</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th width="auto">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->angkatan }}</td>

                    <td>
                        <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button style="margin-top : 15px" type="submit"><a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a></button>
    </div>
@endsection