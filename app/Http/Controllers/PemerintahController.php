<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePemerintahRequest;
use App\Models\Pemerintah;

use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.pemerintah.viewPemerintah', [
            'pemerintahs' => Pemerintah::all()
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
        return view('data.pemerintah.ubahPemerintah', [
            'pemerintah' => $pemerintah
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'isi_1' => 'required',
            'isi_2' => 'required',
            'gambar_1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'gambar_2' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pemerintah = Pemerintah::findOrFail($id);

        $pemerintah->isi_1 = $request->isi_1;
        $pemerintah->isi_2 = $request->isi_2;

        if ($request->hasFile('gambar_1')) {
           
            $gambar1 = $request->file('gambar_1');
            $namagambar1 = 'gambar1_' . time() . '.' . $gambar1->getClientOriginalExtension();
            $gambar1->storeAs('public/images', $namagambar1);
            $pemerintah->gambar_1 = 'images/' . $namagambar1;
        }

        if ($request->hasFile('gambar_2')) {
   
            $gambar2 = $request->file('gambar_2');
            $namagambar2 = 'gambar2_' . time() . '.' . $gambar2->getClientOriginalExtension();
            $gambar2->storeAs('public/images', $namagambar2);
            $pemerintah->gambar_2 = 'images/' . $namagambar2;
        }

        $pemerintah->save();

        return redirect()->route('pemerintahs.index')
            ->with('tambah-success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
