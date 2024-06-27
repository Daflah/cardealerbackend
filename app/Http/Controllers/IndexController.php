<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\UnggulanMobilController;

class IndexController extends Controller
{
    public function index()
    {
        $pegawaiController = new PegawaiController();
        $galeriController = new GaleriController();
        $headerController = new HeaderController();
        $jualanController = new JualanController();
        $komentarController = new KomentarController();
        $unggulanController = new UnggulanMobilController();
        //nanti tambahin

        $dtPegawai = $pegawaiController->showOurTeam();
        $dtGaleri = $galeriController->showGallery();
        $dtHeader = $headerController->showHeader();
        $dtJualan = $jualanController->showJualan();
        $dtKomentar = $komentarController->showKomentar();
        $dtUnggulan = $unggulanController->showOurCars();

        return view('index', compact('dtPegawai', 'dtGaleri', 'dtHeader', 'dtJualan', 'dtKomentar', 'dtUnggulan'));
    }

    public function home()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return redirect()->route('index');
            } elseif ($usertype == 'admin') {
                return redirect()->route('admin-beranda');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
