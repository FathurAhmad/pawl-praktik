@extends('layouts.main')
@section('title', 'Daftar Buku')
@section('content')
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Buku 1</td>
                <td>Fathur</td>
                <td>2023</td>
            </tr>
            <tr>
                <td>Buku 2</td>
                <td>Rama</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>Buku 3</td>
                <td>Dewa</td>
                <td>2024</td>
            </tr>
            <tr>
                <td>Buku 4</td>
                <td>Ayudya</td>
                <td>2025</td>
            </tr>
        </tbody>
    </table>
@endsection