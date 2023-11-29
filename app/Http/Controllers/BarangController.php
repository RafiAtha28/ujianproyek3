<?php

// app/Http/Controllers/BarangController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function create()
    {
        return view('halaman.tambah.tambah-barang');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaBarang' => 'required',
            'satuan' => 'required',
            'hargaSatuan' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Barang::create($validatedData);

        return redirect()->route('tambahBarang');
    }
}

