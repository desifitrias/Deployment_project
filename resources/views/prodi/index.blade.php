<!-- resources/views/prodis/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Program Studi</h2>
    <div class="mb-3">
        <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah Program Studi</a>
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
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->kode }}</td>
                    <td>{{ $prodi->prodi }}</td>
                    <td>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
