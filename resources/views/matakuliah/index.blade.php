<!-- resources/views/matakuliahs/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Mata Kuliah</h2>
    <div class="mb-3">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Data Mata Kuliah</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah->kode }}</td>
                    <td>{{ $mataKuliah->matakuliah }}</td>
                    <td>{{ $mataKuliah->dosen ? $mataKuliah->dosen->nama : '-' }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mataKuliah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mataKuliah->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
