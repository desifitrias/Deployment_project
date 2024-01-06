<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php

//Dosen
// Untuk index Dosen (menampilkan semua dosen)
Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index'])->name('dosen.index');

// Untuk menampilkan form tambah dosen
Route::get('/dosen/create', [App\Http\Controllers\DosenController::class, 'create'])->name('dosen.create');

// Untuk menyimpan data dosen yang baru
Route::post('/dosen', [App\Http\Controllers\DosenController::class, 'store'])->name('dosen.store');

// Untuk menampilkan form edit dosen tertentu
Route::get('/dosen/{dosen}/edit', [App\Http\Controllers\DosenController::class, 'edit'])->name('dosen.edit');

// Untuk menyimpan perubahan pada dosen tertentu
Route::put('/dosen/{dosen}', [App\Http\Controllers\DosenController::class, 'update'])->name('dosen.update');

// Untuk menghapus dosen tertentu
Route::delete('/dosen/{dosen}', [App\Http\Controllers\DosenController::class, 'destroy'])->name('dosen.destroy');


//Mahasiswa
// Untuk index Mahasiswa (menampilkan semua mahasiswa)
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Untuk menampilkan form tambah mahasiswa
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');

// Untuk menyimpan data mahasiswa yang baru
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Untuk menampilkan form edit mahasiswa tertentu
Route::get('/mahasiswa/{mahasiswa}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Untuk menyimpan perubahan pada mahasiswa tertentu
Route::put('/mahasiswa/{mahasiswa}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');

// Untuk menghapus mahasiswa tertentu
Route::delete('/mahasiswa/{mahasiswa}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

//Prodi
// Untuk index Program Studi (menampilkan semua program studi)
Route::get('/prodi', [App\Http\Controllers\ProdiController::class, 'index'])->name('prodi.index');

// Untuk menampilkan form tambah program studi
Route::get('/prodi/create', [App\Http\Controllers\ProdiController::class, 'create'])->name('prodi.create');

// Untuk menyimpan data program studi yang baru
Route::post('/prodi', [App\Http\Controllers\ProdiController::class, 'store'])->name('prodi.store');

// Untuk menampilkan form edit program studi tertentu
Route::get('/prodi/{prodi}/edit', [App\Http\Controllers\ProdiController::class, 'edit'])->name('prodi.edit');

// Untuk menyimpan perubahan pada program studi tertentu
Route::put('/prodi/{prodi}', [App\Http\Controllers\ProdiController::class, 'update'])->name('prodi.update');

// Untuk menghapus program studi tertentu
Route::delete('/prodi/{prodi}', [App\Http\Controllers\ProdiController::class, 'destroy'])->name('prodi.destroy');


//MataKuliah
// Untuk index Mata Kuliah (menampilkan semua mata kuliah)
Route::get('/matakuliah', [App\Http\Controllers\MataKuliahController::class, 'index'])->name('matakuliah.index');

// Untuk menampilkan form tambah mata kuliah
Route::get('/matakuliah/create', [App\Http\Controllers\MataKuliahController::class, 'create'])->name('matakuliah.create');

// Untuk menyimpan data mata kuliah yang baru
Route::post('/matakuliah', [App\Http\Controllers\MataKuliahController::class, 'store'])->name('matakuliah.store');

// Untuk menampilkan form edit mata kuliah tertentu
Route::get('/matakuliah/{matakuliah}/edit', [App\Http\Controllers\MataKuliahController::class, 'edit'])->name('matakuliah.edit');

// Untuk menyimpan perubahan pada mata kuliah tertentu
Route::put('/matakuliah/{matakuliah}', [App\Http\Controllers\MataKuliahController::class, 'update'])->name('matakuliah.update');

// Untuk menghapus mata kuliah tertentu
Route::delete('/matakuliah/{matakuliah}', [App\Http\Controllers\MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');



