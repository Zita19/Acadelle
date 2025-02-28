<?php

namespace App\Http\Controllers;

use App\Models\Oktatok;
use App\Http\Requests\StoreOktatokRequest;
use App\Http\Requests\UpdateOktatokRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OktatokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $oktato = Auth::guard('oktato')->user();
    
            if (!$oktato) {
            abort(403, 'Nem vagy bejelentkezve mint oktató!');
    }
            return view('oktatoi.oktatoi', ['oktato' => $oktato]);
    }
    public function tanulok()
    {
        $oktato = Auth::guard('tanulo')->user();
        $tanulok = DB::table('kapcsolati_tabla')
            ->join('kurzusok', 'kapcsolati_tabla.kurzus_id', '=', 'kurzusok.id')
            ->join('oktatok_kurzusok', 'kurzusok.id', '=', 'oktatok_kurzusok.kurzus_id')
            ->join('tanulo', 'kapcsolati_tabla.tanulo_id', '=', 'tanulo.id')
            ->where('oktatok_kurzusok.oktato_id', $oktato)
            ->select('tanulo.nev as tanulo_nev', 'kurzusok.kurzus_nev', 'kapcsolati_tabla.befizetett_osszeg')
            ->get();
        return view('oktatoi.oktatoi', compact('tanulok'));
    }
    public function kurzusok()
    {
        $oktato = auth()->id();
        $kurzusok = DB::table('kurzusok')
            ->join('oktatok_kurzusok', 'kurzusok.id', '=', 'oktatok_kurzusok.kurzus_id')
            ->where('oktatok_kurzusok.oktato_id', $oktato)
            ->select('kurzusok.id', 'kurzusok.kurzus_nev', 'kurzusok.dij')
            ->get();

        return view('oktatoi.oktatoi', compact('kurzusok'));
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
    public function store(StoreOktatokRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Oktatok $oktatok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oktatok $oktatok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOktatokRequest $request, Oktatok $oktatok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oktatok $oktatok)
    {
        //
    }
}
