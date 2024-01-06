<!-- resources/views/dosen/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Dosen Baru</h2>
    <br>
    <p>NIP Dosen dimulai dari D24001</p>
    <br>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
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
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
