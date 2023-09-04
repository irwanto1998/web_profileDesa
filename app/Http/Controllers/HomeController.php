<?php

namespace App\Http\Controllers;
use App\Models\Utama;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Pemerintah;
use App\Models\Tentang;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'utamas' => Utama::all(),
            'beritas' => Berita::all(),'kontaks' => Kontak::all(),'pemerintahs' => Pemerintah::all(),'tentangs' => Tentang::all()
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utama $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utama $home)
    {   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
