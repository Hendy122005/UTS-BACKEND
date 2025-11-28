<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Daftar Produk</h2>

    @if(session('success'))
        <div class="text-green-600 mb-3">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded">Tambah Produk</a>

    <table class="mt-4 border w-full">
        <tr class="bg-gray-200">
            <th class="p-2">ID</th>
            <th class="p-2">Nama</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Stok</th>
            <th class="p-2">Aksi</th>
        </tr>

        @foreach($products as $p)
        <tr>
            <td class="p-2">{{ $p->id }}</td>
            <td class="p-2">{{ $p->name }}</td>
            <td class="p-2">{{ $p->price }}</td>
            <td class="p-2">{{ $p->stock }}</td>
            <td class="p-2">
                <a href="{{ route('products.edit', $p->id) }}" class="text-blue-600">Edit</a>
                |
                <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>
