<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::with('dosen')->get();
        return view('matakuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('matakuliah.create', compact('dosens'));
    }

    public function store(Request $request)
    {

   $lastMataKuliah = MataKuliah::latest('kode')->first();


   if (!$lastMataKuliah) {
       $kode = 'M001';
   } else {

       $lastNumber = intval(substr($lastMataKuliah->kode, 1));
       $kode = 'M' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
   }

    $validator = Validator::make($request->all(), [
        'matakuliah' => 'required|string|max:255',
        'dosen_id' => 'nullable|exists:dosens,id',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }


    MataKuliah::create([
        'kode' => $kode,
        'matakuliah' => $request->matakuliah,
        'dosen_id' => $request->dosen_id,
    ]);

    return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function edit(MataKuliah $matakuliah)
    {
        $dosens = Dosen::all();
        return view('matakuliah.edit', compact('matakuliah', 'dosens'));
    }

    public function update(Request $request, MataKuliah $matakuliah)
    {
        $validator = Validator::make($request->all(), [
            'matakuliah' => 'required|string|max:255',
            'dosen_id' => 'nullable|exists:dosens,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $matakuliah->update([
            'matakuliah' => $request->matakuliah,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui');
    }

    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
