<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreTentangRequest;
use App\Models\Tentang;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.tentang.viewTentang', [
            'tentangs' => Tentang::all()
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
        return view('data.tentang.ubahTentang', [
            'tentang' => $tentang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTentangRequest $request, Tentang $tentang)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namagambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images', $namagambar);

            $tentang->update([
                'gambar' => $namagambar,
            ]);
        }

        $tentang->update([
            'isi' => $request->isi,
        ]);

        return redirect()->route('tentangs.index')->with('tambah-success', 'Data Berhasil Dirubah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
