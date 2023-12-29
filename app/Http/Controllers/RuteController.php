<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuteRequest;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rute::get();
        return view('rute.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rute.create');
    }

    public function store(RuteRequest $request)
    {
        $data = $request->validated();
        Rute::create($data);
        return redirect()->route('rute');
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
        $data = Rute::findOrFail($id);
        return view('rute.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RuteRequest $request, string $id)
    {
        $data = $request->validated();
        Rute::findOrFail($id)->update($data);
        return redirect()->route('rute');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Rute::find($id);
        $data->delete();
        return redirect()->route('rute');
    }
}
