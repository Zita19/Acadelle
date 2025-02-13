<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Tanulo;
use App\Models\Oktatok;
use Illuminate\Support\Facades\DB;

class BejelentkezesController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'jelszo');
    $tanulo = Tanulo::where('email', $credentials['email'])->first();
    if ($tanulo) {
        if (Hash::check($credentials['jelszo'], $tanulo->jelszo)) {
            Auth::guard('tanulo')->login($tanulo);
            return redirect()->intended(route('tanuloi.tanuloi'));

        }
    }
    $oktato = Oktatok::where('email', $credentials['email'])->first();
    if ($oktato && Hash::check($credentials['jelszo'], $oktato->jelszo)) {
        Auth::guard('oktato')->login($oktato);
        session()->regenerate(); 
        return redirect()->route('oktatoi.oktatoi');
    } else {
    return back()->withErrors(['email' => 'Hibás bejelentkezési adatok!']);
}
}


    public function logout()
    {
        if (Auth::guard('oktato')->check()) {
            Auth::guard('oktato')->logout();
        } elseif (Auth::guard('tanulo')->check()) {
            Auth::guard('tanulo')->logout();
        }
    
        return redirect()->route('bejelentkezes')->with('status', 'Sikeresen kijelentkeztél!');
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
