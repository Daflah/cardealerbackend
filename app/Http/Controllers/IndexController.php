<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HeaderController;

class IndexController extends Controller
{
    public function index()
    {
        $pegawaiController = new PegawaiController();
        $galeriController = new GaleriController();
        $headerController = new HeaderController();

        $dtPegawai = $pegawaiController->showOurTeam();
        $dtGaleri = $galeriController->showGallery();
        $dtHeader = $headerController->showHeader();

        return view('index', compact('dtPegawai', 'dtGaleri', 'dtHeader'));
    }
}

