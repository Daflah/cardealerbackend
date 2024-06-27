<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $dtGaleri = Galeri::query()
            ->when($search, function ($query, $search) {
                return $query->where('judul', 'like', "%{$search}%");
            })
            ->paginate(5);
    
        return view('admin.galeri.data-galeri', compact('dtGaleri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create-galeri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
            'judul' => 'required|string|max:100',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile); // Simpan gambar di folder public/img
        } else {
            $namaFile = null; // Atur nilai default jika tidak ada file yang diunggah
        }

        // Simpan data galeri ke database
        Galeri::create([
            'gambar' => $namaFile,
            'judul' => $request->judul,
        ]);

        return redirect()->route('data-galeri')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $galeri = Galeri::findorfail($id);
        return view('admin.galeri.edit-galeri', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
            'judul' => 'required|string|max:100',
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile);
            
            // Hapus gambar lama jika ada
            if ($galeri->gambar && file_exists(public_path('img/'.$galeri->gambar))) {
                unlink(public_path('img/'.$galeri->gambar));
            }

            // Update gambar dengan yang baru
            $galeri->gambar = $namaFile;
        }

        $galeri->update([
            'gambar' => $galeri->gambar,
            'judul' => $request->judul,
        ]);

        return redirect()->route('data-galeri')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus gambar jika ada
        if ($galeri->gambar && file_exists(public_path('img/'.$galeri->gambar))) {
            unlink(public_path('img/'.$galeri->gambar));
        }

        $galeri->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function showGallery()
    {
        $galeri = Galeri::all(); // Sesuaikan dengan query yang diperlukan
        return $galeri;
    }
}
