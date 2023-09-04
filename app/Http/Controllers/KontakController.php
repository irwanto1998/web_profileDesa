<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use App\Models\Utama;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.utama.viewUtama', [
            'kontaks' => Kontak::all(),'utamas' => Utama::all()
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
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {   
        $kontak->update($request->all());
        return redirect()->to(route('kontaks.index'))->with('tambah-success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
