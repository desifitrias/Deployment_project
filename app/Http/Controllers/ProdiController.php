<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {

        $lastProdi = Prodi::latest('kode')->first();


        if (!$lastProdi) {
            $kode = 'P001';
        } else {

            $lastNumber = intval(substr($lastProdi->kode, 1));
            $kode = 'P' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'prodi' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan data ke database
        Prodi::create([
            'kode' => $kode,
            'prodi' => $request->prodi,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil ditambahkan');
    }

    public function edit(Prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:prodis,kode,' . $prodi->id,
            'prodi' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $prodi->update($request->all());
        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil diperbarui');
    }

    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil dihapus');
    }
}
