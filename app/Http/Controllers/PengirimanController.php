<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengirimanRequest;
use App\Models\Kategori;
use App\Models\Pengiriman;
use App\Models\Rute;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $data = Pengiriman::with('rute')->with('kat')->get();

        return view('pengiriman.index', compact('data'));
    }

    public function create()
    {
        $rute = Rute::all();
        $kat = Kategori::all();
        return view('pengiriman.create', compact('rute', 'kat'));
    }

    public function store(PengirimanRequest $request)
    {
        $data = $request->validated();
        $data['resi'] = Pengiriman::generateResi();
        $pengiriman = new Pengiriman($data);
        $pengiriman->save();
        return redirect()->route('pengiriman');
        // dd($data);
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $rute = Rute::all();
        $kat = Kategori::all();

        $data = Pengiriman::find($id);
        return view('pengiriman.edit', compact('data', 'rute', 'kat'));
    }

    public function update(PengirimanRequest $request, string $id)
    {
        $data = $request->validated();

        Pengiriman::whereId($id)->update($data);
        return redirect()->route('pengiriman');
        // dd($data);
    }

    public function destroy(string $id)
    {
        $data = Pengiriman::find($id);
        $data->delete();
        return redirect()->route('pengiriman');
    }

    public function cetakResi($id)
    {
        $data   = Pengiriman::find($id);
        if (!$data) {
            return abort(404, 'Pengiriman not found');
        }

        return view('pengiriman.cetakResi', compact('data'));
    }

  
}
