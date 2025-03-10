<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kapcsolati_tabla;
use App\Models\Kurzusok;

class FizetesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function fizetes(Request $request)
    {
        $request->validate([
            'tanulo_id' => 'required|integer',
            'kurzus_id' => 'required|integer',
            'befizetett_osszeg' => 'required|integer|min:0',
        ]);
        $tanulo_id = $request->tanulo_id;
        $kurzus_id = $request->kurzus_id;
        $osszeg = $request->befizetett_osszeg;
        $kapcsolat = Kapcsolati_tabla::where('tanulo_id', $tanulo_id)
            ->where('kurzus_id', $kurzus_id)
            ->first();

        if ($kapcsolat) {
            $kapcsolat->befizetett_osszeg = $osszeg;
            $kapcsolat->save();

            return redirect()->back()->with('success', 'A befizetés sikeres volt!');
        } else {
            return redirect()->back()->with('error', 'Nem található ilyen kurzus vagy tanuló.');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tanulo_id' => 'required|integer',
            'kurzus_id' => 'required|integer',
            'befizetett_osszeg' => 'required|integer|min:1',
        ]);
        $kapcsolat = Kapcsolati_tabla::firstOrNew([
            'tanulo_id' => $request->tanulo_id,
            'kurzus_id' => $request->kurzus_id
        ]);
        $kapcsolat->befizetett_osszeg = $request->befizetett_osszeg;
        $kapcsolat->save();
        return redirect()->back()->with('success', 'Befizetés sikeres!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
