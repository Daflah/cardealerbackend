<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnggulanMobil;

class UnggulanMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtUnggulanMobil = UnggulanMobil::orderBy('id', 'asc')->paginate(5);
        return view('admin.unggulan-mobil.data-unggulan', compact('dtUnggulanMobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unggulan-mobil.create-unggulan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambarmobil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
            'nama' => 'required|string|max:100',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambarmobil')) {
            $file = $request->file('gambarmobil');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/mobil'), $namaFile); // Simpan gambar di folder public/img/mobil
        } else {
            $namaFile = null; // Atur nilai default jika tidak ada file yang diunggah
        }

        // Simpan data mobil unggulan ke database
        UnggulanMobil::create([
            'gambarmobil' => $namaFile, // Simpan nama file gambar ke database
            'nama' => $request->nama,
        ]);

        return redirect()->route('data-unggulan')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $mobil = UnggulanMobil::findorfail($id);
        return view('admin.unggulan-mobil.edit-unggulan', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambarmobil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
            'nama' => 'required|string|max:100',
        ]);

        $mobil = UnggulanMobil::findOrFail($id);

        if ($request->hasFile('gambarmobil')) {
            $file = $request->file('gambarmobil');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/mobil'), $namaFile);
            
            // Hapus gambar lama jika ada
            if ($mobil->gambarmobil && file_exists(public_path('img/mobil/'.$mobil->gambarmobil))) {
                unlink(public_path('img/mobil/'.$mobil->gambarmobil));
            }

            // Update gambar dengan yang baru
            $mobil->gambarmobil = $namaFile;
        }

        $mobil->update([
            'gambarmobil' => $mobil->gambarmobil,
            'nama' => $request->nama,
        ]);

        return redirect()->route('data-unggulan')->with('toast_success', 'Data Berhasil Diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = UnggulanMobil::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($mobil->gambarmobil && file_exists(public_path('img/mobil/'.$mobil->gambarmobil))) {
            unlink(public_path('img/mobil/'.$mobil->gambarmobil));
        }

        $mobil->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function showOurCars()
    {
        $unggulanMobil = UnggulanMobil::all(); // Sesuaikan dengan query yang diperlukan
        return $unggulanMobil;
    }
}
