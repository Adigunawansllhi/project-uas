<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Pengiriman::get();
        return view('laporan.index', compact('data'));
    }

    public function filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if (!$start_date && !$end_date) {
            return $this->index();
        }

        $data = Pengiriman::whereDate('tgl_kirim', '>=', $start_date)
            ->whereDate('tgl_kirim', '<=', $end_date)
            ->get();

        return view('laporan.index', compact('data', 'start_date', 'end_date'));
    }

    public function print(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        // Jika tidak ada filter, ambil semua data
        if (!$start_date && !$end_date) {
            $data = Pengiriman::get();
        } else {
            // Jika ada filter, ambil data sesuai dengan tanggal
            $data = Pengiriman::whereDate('tgl_kirim', '>=', $start_date)
                ->whereDate('tgl_kirim', '<=', $end_date)
                ->get();
        }

        return view('laporan.cetak-laporan', compact('data', 'start_date', 'end_date'));
    }
}
