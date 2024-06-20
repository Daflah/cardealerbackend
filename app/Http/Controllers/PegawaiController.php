<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPegawai = Pegawai::orderBy('id', 'asc')->paginate(5);
        return view('admin.pegawai.data-pegawai', compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pegawai.create-pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'tgllhr' => 'required|date',
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
        ]);

        return redirect()->route('data-pegawai')->with('toast_success', 'Data Berhasil Disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peg = Pegawai::findorfail($id);
        return view('admin.pegawai.edit-pegawai', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'tgllhr' => 'required|date',
        ]);
    
        $peg = Pegawai::findOrFail($id);
        $peg->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
        ]);
    
        return redirect()->route('data-pegawai')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = Pegawai::findOrFail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
