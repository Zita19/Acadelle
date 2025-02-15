<?php

namespace App\Http\Controllers;

use App\Models\Tanulo;
use App\Http\Requests\StoreTanuloRequest;
use App\Http\Requests\UpdateTanuloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kurzus;
use Illuminate\Support\Facades\Hash;

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
        $tanulo = Auth::guard('tanulo')->user();
        return view('tanuloi.szerkesztes', compact('tanulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTanuloRequest $request, Tanulo $tanulo)
    {
        $tanulo = Auth::guard('tanulo')->user();

        $request->validate([
            'nev' => 'required|string|max:255',
            'email' => 'required|email|unique:tanulok,email,'.$tanulo->id,
            'felhasznalonev' => 'required|string|max:255|unique:tanulok,felhasznalonev,'.$tanulo->id,
            'jelszo' => 'nullable|min:6|confirmed',
        ]);

        $tanulo->nev = $request->nev;
        $tanulo->email = $request->email;
        $tanulo->felhasznalonev = $request->felhasznalonev;

        if ($request->filled('jelszo')) {
            $tanulo->password = Hash::make($request->jelszo);
        }

        $tanulo->save();

        return redirect()->route('tanulo.index')->with('success', 'Profil sikeresen frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanulo $tanulo)
    {
         $tanulo = Auth::guard('tanulo')->user();
        $tanulo->delete();

        Auth::guard('tanulo')->logout();

        return redirect()->route('welcome')->with('success', 'Felhasználó törölve!');
    }
    
    public function __construct()
    {
        $this->middleware('auth:tanulo');
    }

    public function leaveCourse($kurzus_id)
    {
        $tanulo = Auth::guard('tanulo')->user();
        $kurzus = Kurzus::findOrFail($kurzus_id);

        if ($tanulo->kurzusok()->where('kurzus_id', $kurzus_id)->exists()) {
            $tanulo->kurzusok()->detach($kurzus_id);
            return redirect()->back()->with('success', 'Sikeresen leiratkoztál a kurzusról!');
        }

        return redirect()->back()->with('error', 'Nem vagy feliratkozva erre a kurzusra.');
    }
}
