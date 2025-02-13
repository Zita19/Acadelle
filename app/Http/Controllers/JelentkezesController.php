<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurzusok;
use Illuminate\Support\Facades\Auth;

class JelentkezesController extends Controller
{
    public function jelentkezeskurzusra(Request $request)
    {
        $tanulo = Auth::user(); 
        $kurzus = Kurzusok::findOrFail($request->kurzus_id); 
        
        $tanulo->kurzusok()->attach($kurzus->id, [ 
            'befizetett_osszeg' => $request->befizetett_osszeg
        ]);

        return redirect()->back()->with('success', 'Sikeresen jelentkeztél a kurzusra!');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
