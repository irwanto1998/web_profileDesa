<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBeritaRequest;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.berita.viewBerita', [
            'beritas' => Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.berita.tambahBerita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = $request->file('foto');
        $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('public/images', $namaFoto);

        try {
            Berita::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'foto' => $namaFoto,
            ]);
        } catch (\Throwable $th) {
            // Tangani error jika diperlukan
        }

        return redirect()->route('beritas.index')->with('tambahBerita-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('data.berita.detailBerita', [
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('data.berita.ubahBerita', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBeritaRequest $request, Berita $berita)
    {  
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($berita->foto) {
                Storage::delete('public/images/' . $berita->foto);
            }

            $foto = $request->file('foto');
            $namafoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/images', $namafoto);

            $berita->update([
                'foto' => $namafoto,
            ]);
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('beritas.index')->with('tambahBerita-success', 'Data Berhasil Dirubah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        // Hapus gambar terkait jika ada
        if ($berita->foto) {
            Storage::delete('public/images/' . $berita->foto);
        }

        // Hapus data dari database
        $berita->delete();

        return redirect()->route('beritas.index')
        ->with('hapusBerita-success', 'Data Berhasil Dihapus!');
    }
}
