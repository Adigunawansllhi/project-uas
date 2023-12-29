<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengiriman;
use App\Models\Rute;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::count();
        $rute       = Rute::count();
        $kat        = Kategori::count();
        return view('home', compact('pengiriman', 'rute', 'kat'));
    }
}
