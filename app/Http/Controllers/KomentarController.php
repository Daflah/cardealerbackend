<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $dtKomentar = Komentar::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->paginate(5);
    
        return view('user.komentar.data-komentar', compact('dtKomentar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.komentar.create-komentar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambarmobil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar mobil
            'gambarprofile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar profil
            'nama' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'komentar' => 'required|string|max:500',
        ]);

        // Proses upload gambar mobil
        if ($request->hasFile('gambarmobil')) {
            $fileMobil = $request->file('gambarmobil');
            $namaFileMobil = time() . '_mobil_' . $fileMobil->getClientOriginalName();
            $fileMobil->move(public_path('img'), $namaFileMobil); // Simpan gambar mobil di folder public/img
        } else {
            $namaFileMobil = null; // Atur nilai default jika tidak ada file yang diunggah
        }

        // Proses upload gambar profil
        if ($request->hasFile('gambarprofile')) {
            $fileProfile = $request->file('gambarprofile');
            $namaFileProfile = time() . '_profile_' . $fileProfile->getClientOriginalName();
            $fileProfile->move(public_path('img'), $namaFileProfile); // Simpan gambar profil di folder public/img
        } else {
            $namaFileProfile = null; // Atur nilai default jika tidak ada file yang diunggah
        }

        // Simpan data komentar ke database
        Komentar::create([
            'gambarmobil' => $namaFileMobil,
            'gambarprofile' => $namaFileProfile,
            'nama' => $request->nama,
            'job' => $request->job,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('index')->with('toast_success', 'Komentar User Diperbarui!');
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
        $komentar = Komentar::findOrFail($id);
        return view('user.komentar.edit-komentar', compact('komentar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambarmobil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar mobil
            'gambarprofile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar profil
            'nama' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'komentar' => 'required|string|max:500',
        ]);

        $komentar = Komentar::findOrFail($id);

        if ($request->hasFile('gambarmobil')) {
            $fileMobil = $request->file('gambarmobil');
            $namaFileMobil = time() . '_mobil_' . $fileMobil->getClientOriginalName();
            $fileMobil->move(public_path('img'), $namaFileMobil);

            // Hapus gambar mobil lama jika ada
            if ($komentar->gambarmobil && file_exists(public_path('img/'.$komentar->gambarmobil))) {
                unlink(public_path('img/'.$komentar->gambarmobil));
            }

            // Update gambar mobil dengan yang baru
            $komentar->gambarmobil = $namaFileMobil;
        }

        if ($request->hasFile('gambarprofile')) {
            $fileProfile = $request->file('gambarprofile');
            $namaFileProfile = time() . '_profile_' . $fileProfile->getClientOriginalName();
            $fileProfile->move(public_path('img'), $namaFileProfile);

            // Hapus gambar profil lama jika ada
            if ($komentar->gambarprofile && file_exists(public_path('img/'.$komentar->gambarprofile))) {
                unlink(public_path('img/'.$komentar->gambarprofile));
            }

            // Update gambar profil dengan yang baru
            $komentar->gambarprofile = $namaFileProfile;
        }

        $komentar->update([
            'nama' => $request->nama,
            'job' => $request->job,
            'komentar' => $request->komentar,
            'gambarmobil' => $komentar->gambarmobil,
            'gambarprofile' => $komentar->gambarprofile,
        ]);

        return redirect()->route('data-komentar')->with('toast_success', 'Komentar Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $komentar = Komentar::findOrFail($id);

        // Hapus gambar mobil jika ada
        if ($komentar->gambarmobil && file_exists(public_path('img/'.$komentar->gambarmobil))) {
            unlink(public_path('img/'.$komentar->gambarmobil));
        }

        // Hapus gambar profil jika ada
        if ($komentar->gambarprofile && file_exists(public_path('img/'.$komentar->gambarprofile))) {
            unlink(public_path('img/'.$komentar->gambarprofile));
        }

        $komentar->delete();
        return back()->with('info', 'Komentar Berhasil Dihapus!');
    }

    public function showKomentar()
    {
        $komentar = Komentar::all(); // Sesuaikan dengan query yang diperlukan
        return $komentar;
    }
}
