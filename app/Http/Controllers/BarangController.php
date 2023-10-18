<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all(); //select*from barangs
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'fungsi'=>'required',
        ]);
        //dd ($barang);
        Barang::create($barang);
        //        dd ($barang);
        return redirect()->route('barang.index')->with('success','Data berhasil dibuat!');
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
        $data=Barang::findOrFail($id);
        return view('barang.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'fungsi'=>'required',
        ]);
        $barang= barang::findOrFail($id);

            $barang->update([
                'name' => $request->name,
                'jumlah' => $request->jumlah,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'fungsi' => $request->fungsi,

            ]);
        return redirect()->route('barang.index')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('Success', 'Data Berhasil Di Hapus');
    }
}
