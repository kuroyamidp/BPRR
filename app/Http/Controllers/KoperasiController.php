<?php

namespace App\Http\Controllers;

use App\Models\master\Koperasi;
use Illuminate\Http\Request;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.koperasi.koperasi');
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
    public function show(Koperasi $koperasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Koperasi $koperasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Koperasi $koperasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Koperasi $koperasi)
    {
        //
    }
}
