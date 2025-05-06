<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>SiBarang</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
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
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">4</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Sepeda Motor</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Kendaraan</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">30</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 25.000.000</td>
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
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">5</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Charger</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Aksesoris</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">30</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 25.000</td>
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
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">6</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Kipas Angin</td>
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
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">7</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Kompor Tanam</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Aksesoris</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">27</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 2.500.000</td>
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
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">8</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Iphone XR</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Elektronik</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">30</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">Rp 7.250.000</td>
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
                    Menampilkan 1-10 dari 8 data
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

    {{-- footer --}}
    <x-footer />
</body>
</html>
