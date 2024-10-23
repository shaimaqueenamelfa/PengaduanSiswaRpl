<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswas = siswa::all();


        // Kirim data siswa ke view index.blade.php
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'pelapor' => 'required|string',
            'terlapor' => 'required|string',
            'kelas' => 'required|string',
            'laporan' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan validasi file
        ]);

        // Cek apakah file ada di request
        if ($request->hasFile('bukti')) {
            // Ambil file dari request
            $image = $request->file('bukti');

            // Simpan file dengan nama hash di folder 'bukti' di disk 'public'
            $image->storeAs('bukti', $image->hashName(), 'public');

            // Lanjutkan dengan penyimpanan data laporan
            // ...
        }

        // Simpan data ke database
        siswa::create([
            'pelapor' => $request->pelapor,
            'terlapor' => $request->terlapor,
            'kelas' => $request->kelas,
            'laporan' => $request->laporan,
            'bukti' => $image->hashName(),
            'status' => 'sedang dalam tinjauan',
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('siswa.index');
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
        //
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
