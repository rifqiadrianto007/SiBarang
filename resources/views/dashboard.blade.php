    @extends('layout.app')

    <!-- Main Content -->
    @section('content')
    <div class="pt-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="mb-6 bg-white rounded-lg shadow-sm p-4">
            <div>
                @if(session('username'))
                    <span class="font-medium text-gray-800">Selamat datang, {{ session('username') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Inventori</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-blue-500 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 text-sm font-medium">Total Produk</span>
                            <h2 class="text-3xl font-bold mt-1 text-gray-800">152</h2>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-box text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 text-sm">
                        <span class="text-green-500 flex items-center font-medium">
                            <i class="fas fa-arrow-up mr-1"></i> 12%
                        </span>
                        <span class="text-gray-500 ml-2">dari bulan lalu</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-red-500 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 text-sm font-medium">Stok Rendah</span>
                            <h2 class="text-3xl font-bold mt-1 text-gray-800">8</h2>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 text-sm">
                        <span class="text-red-500 flex items-center font-medium">
                            <i class="fas fa-arrow-up mr-1"></i> 2 item
                        </span>
                        <span class="text-gray-500 ml-2">dari minggu lalu</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-purple-500 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 text-sm font-medium">Transaksi</span>
                            <h2 class="text-3xl font-bold mt-1 text-gray-800">42</h2>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-exchange-alt text-purple-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 text-sm">
                        <span class="text-red-500 flex items-center font-medium">
                            <i class="fas fa-arrow-down mr-1"></i> 5%
                        </span>
                        <span class="text-gray-500 ml-2">dari bulan lalu</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center border-b p-4">
                    <h3 class="font-semibold text-gray-800">Aktivitas Terbaru</h3>
                    <button class="text-blue-600 hover:text-blue-800 focus:outline-none text-sm">
                        <i class="fas fa-sync-alt mr-1"></i> Refresh
                    </button>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-plus text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Stok Masuk - Laptop Asus A456UR</p>
                                <p class="text-sm text-gray-500">10 unit dari PT Supplier Tekno</p>
                                <p class="text-xs text-gray-400 mt-1">Hari ini, 10:45</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-red-100 p-2 rounded-full mr-3">
                                <i class="fas fa-minus text-red-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Stok Keluar - Monitor LG 24 inch</p>
                                <p class="text-sm text-gray-500">5 unit untuk Divisi Marketing</p>
                                <p class="text-xs text-gray-400 mt-1">Hari ini, 09:18</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-3">
                                <i class="fas fa-edit text-green-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Update Data - Mouse Wireless</p>
                                <p class="text-sm text-gray-500">Perubahan harga dari Rp 150.000 menjadi Rp 175.000</p>
                                <p class="text-xs text-gray-400 mt-1">Kemarin, 15:32</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-plus text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Stok Masuk - Kabel HDMI 2m</p>
                                <p class="text-sm text-gray-500">25 unit dari PT Komponen Elektronik</p>
                                <p class="text-xs text-gray-400 mt-1">Kemarin, 11:21</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 text-center border-t">
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Lihat semua aktivitas</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center border-b p-4">
                    <h3 class="font-semibold text-gray-800">Peringatan Stok Rendah</h3>
                    <span class="bg-red-100 text-red-800 text-xs font-medium py-1 px-2 rounded-full">5 item</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="text-left py-3 px-4 font-medium text-gray-600 text-sm">Produk</th>
                                <th class="text-center py-3 px-4 font-medium text-gray-600 text-sm">Stok</th>
                                <th class="text-center py-3 px-4 font-medium text-gray-600 text-sm">Minimum</th>
                                <th class="text-right py-3 px-4 font-medium text-gray-600 text-sm">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($lowStockItems as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $item['produk'] }}</td>
                                <td class="text-center py-3 px-4">
                                    <span class="
                                        text-xs font-medium py-1 px-2 rounded-full
                                        {{ $item['status'] === 'merah' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $item['stok'] }}
                                    </span>
                                </td>
                                <td class="text-center py-3 px-4 text-gray-600">{{ $item['minimum'] }}</td>
                                <td class="text-right py-3 px-4">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium">Pesan</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-50 p-3 text-center border-t">
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Lihat semua peringatan</a>
                </div>
            </div>
        </div>
     @endsection
