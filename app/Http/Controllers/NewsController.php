<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apikey = 'dfdd33050b8a4fe9909f2c46bcaef59c'; //key News api
        $url = "https://newsapi.org/v2/top-headlines?country=us&apiKey=YOUR_API_KEY " . $apikey;

        // Menggunakan Laravel HTTP Client untuk melakukan Request API
        $response = Http::get($url);

        //mengecek apakah request berhasil
        if ($response->successful()) {
            //menyimpan hasil rensponse
            $articles = $response->json()['articles'];

            //kirim data ke view
            return view('news.index', compact('articles'));
        } else {
            return response()->json(['error' => 'unable to fecth news'], $response->status());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
