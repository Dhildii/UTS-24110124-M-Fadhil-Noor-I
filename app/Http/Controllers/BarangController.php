<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        return view('dashboard', compact('barangs'));
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        $barang = $request->validate([
            'kode' => 'required|unique:barangs',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable',
        ]);

        Barang::create($barang);

        return redirect()->route('barangs.index');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

    if (!$barang) {
        return redirect()->route('barangs.index')->with('error', 'Barang tidak ditemukan.');
    }

    $request->validate([
        'kode' => 'required|unique:barangs,kode,' . $barang->id,
        'nama' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'deskripsi' => 'nullable',
    ]);

    $barang->update($request->all());

    return redirect()->route('barangs.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        if (!$barang) {
            return redirect()->route('barangs.index')->with('error', 'Barang tidak ditemukan.');
        }
        
        $barang->delete();

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus.');
    }
}
