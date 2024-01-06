<!-- resources/views/prodis/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Program Studi Baru</h2>
    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="prodi">Nama Program Studi</label>
            <input type="text" name="prodi" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
