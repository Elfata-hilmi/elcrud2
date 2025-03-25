<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawai = Pegawai::all();
        return view('pegawai.index', ['pegawai'=>$pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kodepegawai' => 'required|unique:pegawai',
            'namapegawai' => 'required',
            'kerja_bagian' => 'required',
        ]);
    
        Pegawai::create($request->all());
    
        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kodepegawai' => 'required|unique:pegawai,kodepegawai,'.$id.',kodepegawai',
            'namapegawai' => 'required',
            'kerja_bagian' => 'required'
        ]);

        // Cari data pegawai yang akan diupdate
        $pegawai = Pegawai::findOrFail($id);
        
        // Update data
        $pegawai->update([
            'kodepegawai' => $request->kodepegawai,
            'namapegawai' => $request->namapegawai,
            'kerja_bagian' => $request->kerja_bagian
        ]);

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pegawai = Pegawai::find($id);

        // Jika data tidak ditemukan, kembalikan response error
        if (!$pegawai) {
            return redirect()->route('pegawai.index')
                             ->with('error', 'Pegawai tidak ditemukan.');
        }

        // Hapus data pegawai
        $pegawai->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai berhasil dihapus.');
    }
}
