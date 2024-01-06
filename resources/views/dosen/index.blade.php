<!-- resources/views/dosen/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Dosen</h2>
    <div class="mb-3">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Data Dosen</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->jenis_kelamin }}</td>
                    <td>{{ $dosen->alamat }}</td>
                    <td>{{ $dosen->no_telp }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
