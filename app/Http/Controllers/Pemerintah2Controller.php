<?php

namespace App\Http\Controllers;
use App\Models\Pemerintah;
use App\Models\Kontak;

use Illuminate\Http\Request;

class Pemerintah2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemerintah', [
            'pemerintahs' => Pemerintah::all(),'kontaks' => Kontak::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemerintah $pemerintah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemerintah $pemerintah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $pemerintah)
    {   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
