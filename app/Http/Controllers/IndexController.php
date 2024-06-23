<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;

class IndexController extends Controller
{
    public function index()
    {
        $pegawaiController = new PegawaiController();
        $galeriController = new GaleriController();

        $dtPegawai = $pegawaiController->showOurTeam();
        $dtGaleri = $galeriController->showGallery();

        return view('index', compact('dtPegawai', 'dtGaleri'));
    }
}

