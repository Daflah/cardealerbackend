<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPembelian = Pembelian::orderBy('id', 'asc')->paginate(5);
        return view('admin.form.data-pembelian', compact('dtPembelian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email_address' => 'required|email|max:255',
            'card_number' => 'required|string|max:19',
            'card_holder_name' => 'required|string|max:100',
            'expiration_date' => 'required|string|max:5',
            'cvv' => 'required|string|max:4',
            'country' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
        ]);

        // Simpan data pembelian ke database
        $pembelian = Pembelian::create($request->all());

        // Kirim email konfirmasi
        $data = $request->all();
        $data['price'] = request()->get('harga'); // Include car price

        Mail::to($request->email_address)->send(new OrderConfirmation($data));

        return redirect()->route('index')->with('toast_success', 'Pembelian Berhasil Disimpan dan Email Terkirim!');
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
        $pembelian = Pembelian::findOrFail($id);
        return view('user.pembelian.edit-pembelian', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email_address' => 'required|email|max:255',
            'card_number' => 'nullable|string|max:19',
            'card_holder_name' => 'required|string|max:100',
            'expiration_date' => 'nullable|string|max:5',
            'cvv' => 'nullable|string|max:4',
            'country' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update($request->all());

        return redirect()->route('pembelian.index')->with('toast_success', 'Pembelian Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();

        return back()->with('info', 'Pembelian Berhasil Dihapus!');
    }

    /**
     * Menampilkan form pembelian.
     */
    public function form()
    {
        return view('user.pembelian.form');
    }

    public function showPembelian()
    {
        $pembelian = Pembelian::all();
        return $pembelian;
    }
}
