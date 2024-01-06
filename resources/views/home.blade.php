<!-- resources/views/admin/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Side Navbar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                            Manajemen Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dosen.index') }}">
                            Manajemen Dosen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('matakuliah.index') }}">
                            Manajemen Mata Kuliah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            Manajemen Program Studi
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3">
                <h2>Selamat Datang, Admin</h2>

                <div class="card">
                    <div class="card-header">Dashboard Admin</div>
                    <div class="card-body">
                        <p>Selamat datang di dashboard admin. Anda dapat mengelola berbagai fitur dan informasi di sini.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
