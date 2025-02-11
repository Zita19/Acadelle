<?php

namespace App\Http\Controllers;

use App\Models\Tanulo;
use App\Http\Requests\StoreTanuloRequest;
use App\Http\Requests\UpdateTanuloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tanulo = Auth::guard('tanulo')->user();

        if (!$tanulo) {
            return redirect()->route('login')->withErrors(['error' => 'Nincs bejelentkezett tanuló!']);
        }

        $kurzusok = $tanulo->kurzusok()->get(); 

        return view('tanuloi.tanuloi', compact('tanulo', 'kurzusok'));
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
    public function store(StoreTanuloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanulo $tanulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanulo $tanulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTanuloRequest $request, Tanulo $tanulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanulo $tanulo)
    {
        //
    }
}
