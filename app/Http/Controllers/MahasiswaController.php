<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswa.create', compact('prodis'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:500',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|unique:mahasiswas,email',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $prodis = Prodi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validator = Validator::make($request->all(), [

        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
