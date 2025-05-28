<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        // Contoh list layanan
        return view('layanan.index');
    }

    public function show($id)
    {
        return view('layanan.show');
    }
}
