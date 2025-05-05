<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>barengBarang</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    {{-- navbar --}}
    <x-navbar />

    <div class="container mx-auto px-6 pt-24">
        <!-- Action Buttons -->
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

        <!-- Display Options -->
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

            <!-- Table Display -->
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
                        <!-- Contoh data, akan digantikan dengan data dari controller -->
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">1</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Laptop Asus</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Elektronik</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">15</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 12.000.000</td>
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
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">2</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Smartphone Samsung</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Elektronik</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">20</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 5.500.000</td>
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
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">3</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Mouse Wireless</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Aksesoris</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">30</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 250.000</td>
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
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-between">
                <div class="text-sm text-gray-500">
                    Menampilkan 1-3 dari 3 data
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

        <!-- Card View (Hidden by Default) -->
        <div class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-2">Laptop Asus</h3>
                    <div class="mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Elektronik</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">Stok:</span>
                        <span class="font-semibold">15</span>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-600">Harga:</span>
                        <span class="font-semibold">Rp 12.000.000</span>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-2">Smartphone Samsung</h3>
                    <div class="mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Elektronik</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">Stok:</span>
                        <span class="font-semibold">20</span>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-600">Harga:</span>
                        <span class="font-semibold">Rp 5.500.000</span>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-lg mb-2">Mouse Wireless</h3>
                    <div class="mb-2">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Aksesoris</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">Stok:</span>
                        <span class="font-semibold">30</span>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-600">Harga:</span>
                        <span class="font-semibold">Rp 250.000</span>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <x-footer />

    <script>
        // Contoh script sederhana untuk toggle tampilan tabel dan card view
        document.addEventListener('DOMContentLoaded', function() {
            // Script akan diisi setelah backend selesai
        });
    </script>
</body>
</html>
