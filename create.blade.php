<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Tambah Produk</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}" class="border block mb-2">
        @error('name') <div class="text-red-600">{{ $message }}</div> @enderror

        <label>Harga:</label>
        <input type="number" name="price" value="{{ old('price') }}" class="border block mb-2">
        @error('price') <div class="text-red-600">{{ $message }}</div> @enderror

        <label>Stok:</label>
        <input type="number" name="stock" value="{{ old('stock') }}" class="border block mb-4">
        @error('stock') <div class="text-red-600">{{ $message }}</div> @enderror

        <button class="bg-green-600 text-white px-3 py-1 rounded">Simpan</button>
        <a href="{{ route('products.index') }}" class="ml-2 text-blue-600">Kembali</a>
    </form>
</x-app-layout>
