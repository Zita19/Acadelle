<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Tanulo;
use App\Models\Oktatok;

class BejelentkezesController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'jelszo' => 'required'
        ]);
    
        $tanulo = Tanulo::where('email', $request->email)->first();
        if ($tanulo && Hash::check($request->jelszo, $tanulo->jelszo)) {
            Auth::guard('tanulo')->login($tanulo); 
            return redirect()->route('tanuloi.tanuloi');
        }

        $oktato = Oktatok::where('email', $request->email)->first();
        if ($oktato && Hash::check($request->jelszo, $oktato->jelszo)) {
            Auth::guard('oktato')->login($oktato);
            return redirect()->route('oktatoi.oktatoi');
        }
    
        return back()->withErrors(['email' => 'Hibás email vagy jelszó']);
        if (Auth::guard('tanulo')->check()) {
            dd("Tanuló be van jelentkezve: ", Auth::guard('tanulo')->user());
        }
        
        if (Auth::guard('oktato')->check()) {
            dd("Oktató be van jelentkezve: ", Auth::guard('oktato')->user());
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
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
