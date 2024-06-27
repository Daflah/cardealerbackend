<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jualan;

class JualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Jualan::query();

    // Handle sorting
    if ($request->has('sort_by') && $request->has('sort_order')) {
        $query->orderBy($request->sort_by, $request->sort_order);
    } else {
        $query->orderBy('id', 'asc'); // Default sorting
    }

    // Handle search
    if ($request->has('search')) {
        $query->where('merk', 'like', '%' . $request->search . '%')
              ->orWhere('namamobil', 'like', '%' . $request->search . '%');
    }

    // Pagination
    $dtJualan = $query->paginate(5);

    return view('index', compact('dtJualan'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carTypes = ['Sedan', 'Jeep', 'SUV', 'Truck', 'Coupe']; // Add your car types here
        return view('admin.jualan.create-jualan', compact('carTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'merk' => 'required|string|max:100',
            'namamobil' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'transmission' => 'required|string|max:50',
            'bensin' => 'required|string|max:50',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        // Handle image upload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile); // Save image to public/img folder
        } else {
            $namaFile = null; // Default value if no file is uploaded
        }

        // Save data to the database
        Jualan::create([
            'merk' => $request->merk,
            'namamobil' => $request->namamobil,
            'type' => $request->type,
            'transmission' => $request->transmission,
            'bensin' => $request->bensin,
            'harga' => $request->harga,
            'gambar' => $namaFile, // Save image file name to the database
        ]);

        return redirect()->route('data-jualan')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jual = Jualan::findorfail($id);
        $carTypes = ['Sedan', 'Jeep', 'SUV', 'Truck', 'Coupe']; // Add your car types here
        return view('admin.jualan.edit-jualan', compact('jual', 'carTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merk' => 'required|string|max:100',
            'namamobil' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'transmission' => 'required|string|max:50',
            'bensin' => 'required|string|max:50',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        $jual = Jualan::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile);
            
            // Delete old image if exists
            if ($jual->gambar && file_exists(public_path('img/'.$jual->gambar))) {
                unlink(public_path('img/'.$jual->gambar));
            }

            // Update with the new image
            $jual->gambar = $namaFile;
        }

        $jual->update([
            'merk' => $request->merk,
            'namamobil' => $request->namamobil,
            'type' => $request->type,
            'transmission' => $request->transmission,
            'bensin' => $request->bensin,
            'harga' => $request->harga,
            'gambar' => $jual->gambar,
        ]);

        return redirect()->route('data-jualan')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jual = Jualan::findOrFail($id);
        $jual->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function showJualan()
    {
        $jualan = Jualan::all(); // Sesuaikan dengan query yang diperlukan
        return $jualan;
    }
}
