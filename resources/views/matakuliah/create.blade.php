<!-- resources/views/matakuliahs/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Mata Kuliah Baru</h2>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="kode" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="matakuliah">Nama Mata Kuliah</label>
            <input type="text" name="matakuliah" class="form-control" required>
        </div>
        <!-- Menampilkan pilihan Dosen dari data $dosens -->
        <div class="form-group">
            <label for="dosen_id">Dosen</label>
            <select name="dosen_id" class="form-control">
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
