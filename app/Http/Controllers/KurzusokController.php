<?php

namespace App\Http\Controllers;

use App\Models\Kurzusok;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKurzusokRequest;
use App\Http\Requests\UpdateKurzusokRequest;
use Illuminate\Support\Facades\Auth;

class KurzusokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurzusok = Kurzusok::all();
        return view('oktato.kurzusok-lista', compact('kurzusok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('oktato.kurzus-letrehozas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kurzus_nev' => 'required|string|max:255',
            'helyszin' => 'required|string|max:255',
            'kepzes_ideje' => 'required|date',
            'dij' => 'nullable|integer|min:0',
        ]);

        $online = strtolower($request->helyszin) == 'online' ? 1 : 0;

        Kurzusok::create([
            'kurzus_nev' => $request->kurzus_nev,
            'helyszin' => $request->helyszin,
            'online' => $online,
            'kepzes_ideje' => $request->kepzes_ideje,
            'dij' => $request->dij,
        ]);

        return redirect()->back()->with('success', 'Kurzus sikeresen létrehozva!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kurzusok $kurzusok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kurzusok $kurzusok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKurzusokRequest $request, Kurzusok $kurzusok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kurzusok $kurzusok)
    {
        //
    }
}
