<!-- resources/views/matakuliahs/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mata Kuliah</h2>
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="hidden" name="kode" value="{{ $matakuliah->kode }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="matakuliah">Nama Mata Kuliah</label>
            <input type="text" name="matakuliah" value="{{ $matakuliah->matakuliah }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dosen_id">Dosen</label>
            <select name="dosen_id" class="form-control">
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}" {{ $matakuliah->dosen_id == $dosen->id ? 'selected' : '' }}>{{ $dosen->nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
