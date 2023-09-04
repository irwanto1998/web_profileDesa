<?php

namespace App\Http\Controllers;
use App\Models\Utama;
use App\Models\Kontak;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.utama.viewUtama', [
            'utamas' => Utama::all(),'kontaks' => Kontak::all()
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
    public function show(Utama $utama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utama $utama)
    {
        ///
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utama $utama)
    {   
        $utama->update($request->all());
        return redirect()->to(route('utamas.index'))->with('tambah-success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}