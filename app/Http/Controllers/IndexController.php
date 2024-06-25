<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;

class IndexController extends Controller
{
    public function index()
    {
        $pegawaiController = new PegawaiController();
        $galeriController = new GaleriController();
        $headerController = new HeaderController();
        $jualanController = new JualanController();

        $dtPegawai = $pegawaiController->showOurTeam();
        $dtGaleri = $galeriController->showGallery();
        $dtHeader = $headerController->showHeader();
        $dtJualan = $jualanController->showJualan();

        return view('index', compact('dtPegawai', 'dtGaleri', 'dtHeader', 'dtJualan'));
    }
}

