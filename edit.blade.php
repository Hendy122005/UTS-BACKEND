<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="border block mb-2">
        @error('name') <div class="text-red-600">{{ $message }}</div> @enderror

        <label>Harga:</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" class="border block mb-2">
        @error('price') <div class="text-red-600">{{ $message }}</div> @enderror

        <label>Stok:</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="border block mb-4">
        @error('stock') <div class="text-red-600">{{ $message }}</div> @enderror

        <button class="bg-yellow-600 text-white px-3 py-1 rounded">Update</button>
        <a href="{{ route('products.index') }}" class="ml-2 text-blue-600">Kembali</a>
    </form>
</x-app-layout>
