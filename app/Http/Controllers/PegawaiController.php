<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $dtPegawai = Pegawai::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->paginate(5);
    
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
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'tgllhr' => 'required|date',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile); // Simpan gambar di folder public/img
        } else {
            $namaFile = null; // Atur nilai default jika tidak ada file yang diunggah
        }

        // Simpan data pegawai ke database
        Pegawai::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
            'gambar' => $namaFile, // Simpan nama file gambar ke database
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
            'nim' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'tgllhr' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        ]);

        $peg = Pegawai::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile);
            
            // Hapus gambar lama jika ada
            if ($peg->gambar && file_exists(public_path('img/'.$peg->gambar))) {
                unlink(public_path('img/'.$peg->gambar));
            }

            // Update gambar dengan yang baru
            $peg->gambar = $namaFile;
        }

        $peg->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
            'gambar' => $peg->gambar,
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

    public function showOurTeam()
    {
        $pegawai = Pegawai::all(); // Sesuaikan dengan query yang diperlukan
        return $pegawai;
    }
}
