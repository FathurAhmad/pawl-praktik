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
                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick=" return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button style="margin-top : 15px" type="submit"><a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a></button>
    </div>
@endsection