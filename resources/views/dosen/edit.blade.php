<!-- resources/views/dosen/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Dosen</h2>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
