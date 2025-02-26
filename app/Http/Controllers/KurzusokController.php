<?php

namespace App\Http\Controllers;

use App\Models\Kurzusok;
use App\Models\Kapcsolati_tabla;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKurzusokRequest;
use App\Http\Requests\UpdateKurzusokRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KurzusokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurzusok = Kurzusok::all();
        return view('kurzusok', compact('kurzusok'));
    }
    public function kurzusoklekerdezes()
    {
        $kurzusok = Kurzusok::with(['oktatok', 'kapcsolatok'])->get();
        return view('kurzusok', compact('kurzusok'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('oktatoi.kurzus-letrehozas');
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
            'oktatok' => 'nullable|array', 
            'oktatok.*' => 'exists:oktatok,id'
        ]);

        $online = strtolower($request->helyszin) == 'online' ? 1 : 0;

        $kurzus = Kurzusok::create([
            'kurzus_nev' => $request->kurzus_nev,
            'helyszin' => $request->helyszin,
            'online' => $online,
            'kepzes_ideje' => $request->kepzes_ideje,
            'dij' => $request->dij,
        ]);
        if (!$kurzus) {
            return redirect()->back()->withErrors(['error' => 'Kurzus létrehozása sikertelen!']);
        }
        if ($request->has('oktatok')) {
            foreach ($request->oktatok as $oktatok_id) {
                DB::table('oktatok_kurzusok')->insert([
                    'kurzus_id' => $kurzus->id,
                    'oktatok_id' => $oktatok_id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }    
        }    
        DB::table('kapcsolati_tabla')->insert([
            'kurzus_id' => $kurzus->id,
            'tanulo_id' => null,   
            'befizetett_osszeg' => null,  
            'created_at' => now(),
            'updated_at' => now()
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
