@extends('layout.app')

<!-- Main Content -->
@section('content')
    <div class="container mx-auto px-6 pt-24">
        <div class="flex justify-between items-center mb-6">
            <div class="flex space-x-2">
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                    <i class="fas fa-plus mr-2"></i> Tambah Barang
                </button>
                <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md">
                    <i class="fas fa-file-export mr-2"></i> Export
                </button>
            </div>
            <div class="relative">
                <input type="text"
                       placeholder="Cari barang..."
                       class="bg-gray-100 text-gray-800 rounded-md py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Daftar Barang</h3>
                <div class="flex space-x-2">
                    <button class="bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-md active">
                        <i class="fas fa-table"></i>
                    </button>
                    <button class="bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-md">
                        <i class="fas fa-th-large"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">No</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Nama Barang</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Kategori</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Stok</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Harga</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $index => $product)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">{{ $product['id'] }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">{{ $product['nama'] }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">{{ $product['kategori'] }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">{{ $product['stok'] }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp {{ number_format($product['harga'], 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">
                                <div class="flex space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-between">
                <div class="text-sm text-gray-500">
                    Menampilkan 1-{{ count($products) }} dari {{ count($products) }} data
                </div>
                <div class="flex space-x-2">
                    <button class="bg-gray-200 px-3 py-1 rounded-md disabled">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md">1</button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md disabled">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
