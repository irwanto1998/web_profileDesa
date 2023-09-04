<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kontak;

use Illuminate\Http\Request;

class Berita2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('berita', [
            'beritas' => Berita::paginate(6),'kontaks' => Kontak::all()
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
     // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('detail', compact('berita'),['kontaks' => Kontak::all()
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
