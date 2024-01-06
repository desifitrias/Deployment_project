<!-- resources/views/mahasiswa/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Mahasiswa</h2>
    <div class="mb-3">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->no_telp }}</td>
                <td>{{ $mahasiswa->email }}</td>
                <td>{{ $mahasiswa->prodi->prodi }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
