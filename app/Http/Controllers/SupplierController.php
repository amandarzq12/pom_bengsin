<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::with('produk')->get();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::get();
        $produk = Produk::latest()->get();
        return view('supplier.create', compact(['supplier','produk']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Supplier();
        $post->namasupplier = $request->namasupplier;
        $post->alamatsupplier = $request->alamatsupplier;
        $post->teleponsupplier = $request->teleponsupplier;
        $post->idproduk = $request->idproduk;
        $post->hargaambil = $request->hargaambil;
        $post->save();

        // Fungsi untuk menuju halaman index
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Supplier::findOrFail($id);
        $produk = Produk::latest()->get();
        return view('supplier.edit', compact('item','produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namasupplier' => 'required|max:150',
            'alamatsupplier' => 'required',
            'teleponsupplier' => 'required',
            'idproduk' => 'required',
            'hargaambil' => 'required',
        ]);
        $post = Supplier::find($id)->update($request->all());
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Supplier::findOrFail($id);
        $post->delete();
        return back();
    }
}
