<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\BprModel;
use Illuminate\Http\Request;

class BprController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $data['bpr'] = BprModel::get();
            return view('pages.bpr.bpr', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            $data['bpr'] = BprModel::get();
            return view('pages.crud.bpr', $data);
        }
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
