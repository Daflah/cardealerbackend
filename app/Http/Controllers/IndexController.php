<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Jualan; // Tambahkan ini untuk mengimpor model Jualan

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\UnggulanMobilController;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $pegawaiController = new PegawaiController();
        $galeriController = new GaleriController();
        $headerController = new HeaderController();
        $jualanController = new JualanController();
        $komentarController = new KomentarController();
        $unggulanController = new UnggulanMobilController();
        
        // Retrieve search parameter
        $search = $request->input('search');
        
        // Retrieve type parameter (for filtering)
        $type = $request->input('type');

        // Retrieve jualan data with search and type parameters
        $dtJualan = Jualan::query()
            ->when($search, function ($query, $search) {
                return $query->where('namamobil', 'like', "%{$search}%");
            })
            ->when($type, function ($query, $type) {
                if ($type !== 'All') {
                    return $query->where('type', $type);
                }
                return $query;
            })
            ->paginate(5);

        // Retrieve other data
        $dtPegawai = $pegawaiController->showOurTeam();
        $dtGaleri = $galeriController->showGallery();
        $dtHeader = $headerController->showHeader();
        $dtKomentar = $komentarController->showKomentar();
        $dtUnggulan = $unggulanController->showOurCars();

        return view('index', compact('dtPegawai', 'dtGaleri', 'dtHeader', 'dtJualan', 'dtKomentar', 'dtUnggulan'));
    }

}
