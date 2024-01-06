<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
    $matakuliahs = Matakuliah::all();
    return view('dosen.create', compact('matakuliahs'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:500',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|unique:dosens,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string' . $dosen->id,
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:500',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dosen->update($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
