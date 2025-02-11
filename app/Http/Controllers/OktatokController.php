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

        if ($oktato) {
            return view('oktatoi.oktatoi', ['oktato' => $oktato]);
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
