<!-- resources/views/prodis/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Program Studi</h2>
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="Hidden" name="kode" value="{{ $prodi->kode }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prodi">Nama Program Studi</label>
            <input type="text" name="prodi" value="{{ $prodi->prodi }}" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
