<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtHeader = Header::orderBy('id', 'asc')->paginate(4);
        return view('admin.header.data-header', compact('dtHeader'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.header.create-header');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slogan' => 'required|string|max:100',
            'judulmobil' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile);
        } else {
            $namaFile = null;
        }

        // Simpan data header ke database
        Header::create([
            'gambar' => $namaFile,
            'slogan' => $request->slogan,
            'judulmobil' => $request->judulmobil,
            'model' => $request->model,
            'harga' => $request->harga,
        ]);

        return redirect()->route('data-header')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $Head = Header::findorfail($id);
        return view('admin.header.edit-header', compact('Head'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slogan' => 'required|string|max:100',
            'judulmobil' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
        ]);

        $Head = Header::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile);

            // Hapus gambar lama jika ada
            if ($Head->gambar && file_exists(public_path('img/'.$Head->gambar))) {
                unlink(public_path('img/'.$Head->gambar));
            }

            // Update gambar dengan yang baru
            $Head->gambar = $namaFile;
        }

        $Head->update([
            'slogan' => $request->slogan,
            'judulmobil' => $request->judulmobil,
            'model' => $request->model,
            'harga' => $request->harga,
            'gambar' => $Head->gambar,
        ]);

        return redirect()->route('data-header')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header = Header::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($header->gambar && file_exists(public_path('img/'.$header->gambar))) {
            unlink(public_path('img/'.$header->gambar));
        }

        $header->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function showHeader()
    {
        $header = Header::all(); // Sesuaikan dengan query yang diperlukan
        return $header;
    }
}
