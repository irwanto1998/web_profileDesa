<?php

namespace App\Http\Controllers;
use App\Models\Tentang;
use App\Models\Kontak;

use Illuminate\Http\Request;

class Tentang2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tentang', [
            'tentangs' => Tentang::all(),'kontaks' => Kontak::all()
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
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tentang $tentang)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $tentang)
    {   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}