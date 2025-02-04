<?php

namespace App\Http\Controllers;

use App\Models\Tanulo;
use App\Models\Oktatok;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisztracioController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nev' => 'required|string|max:255',
            'felhasznalonev' => 'required|string|max:255|unique:tanulo,felhasznalonev|unique:oktato,felhasznalonev',
            'email' => 'required|email|max:255|unique:tanulo,email|unique:oktato,email',
            'jelszo' => 'required|string|min:6|confirmed',
            'szerepkor' => 'required|in:tanulo,oktato',
            'kepzettseg' => 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->szerepkor == 'tanulo') {
            Tanulo::create([
                'nev' => $request->nev,
                'felhasznalonev' => $request->felhasznalonev,
                'email' => $request->email,
                'jelszo' => Hash::make($request->jelszo),
                'kepzettseg' => $request->kepzettseg ?? null
            ]);
        } else {
            Oktatok::create([
                'nev' => $request->nev,
                'felhasznalonev' => $request->felhasznalonev,
                'email' => $request->email,
                'jelszo' => Hash::make($request->jelszo)
            ]);
        }

        return redirect()->back()->with('success', 'Sikeres regisztráció!');
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
