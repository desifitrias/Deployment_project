<!-- resources/views/mahasiswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
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
        <div class="form-group">
            <label>Program Studi</label>
            <select name="prodi_id" class="form-control" required>
                @foreach($prodis as $prodi)
                    <option value="{{ $prodi->id }}" {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>{{ $prodi->prodi }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
