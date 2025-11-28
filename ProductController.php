<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // tampilkan form create
    public function create()
    {
        return view('products.create');
    }

    // simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create([
            'name'  => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // tampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'name'  => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate');
    }

    // hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
