<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>barengBarang</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body>

  {{-- NAVBAR --}}
  <x-navbar />

  <!-- Dashboard Content -->
  <div class="container mx-auto px-6 pt-24">

    <!-- Welcome Message -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
      <h3 class="text-2xl font-bold text-gray-800">Selamat datang, {{ session('username', 'Guest') }}!</h3>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

      <!-- Total Barang Card -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-blue-100 mr-4">
            <i class="fas fa-box text-blue-500"></i>
          </div>
          <div>
            <p class="text-gray-500 text-sm">Total Barang</p>
            <p class="text-2xl font-bold" id="total-items">0</p>
          </div>
        </div>
      </div>

      <!-- Kategori Card -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 mr-4">
            <i class="fas fa-tags text-green-500"></i>
          </div>
          <div>
            <p class="text-gray-500 text-sm">Kategori</p>
            <p class="text-2xl font-bold">0</p>
          </div>
        </div>
      </div>

      <!-- Stok Rendah Card -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-yellow-100 mr-4">
            <i class="fas fa-exclamation-triangle text-yellow-500"></i>
          </div>
          <div>
            <p class="text-gray-500 text-sm">Stok Rendah</p>
            <p class="text-2xl font-bold">0</p>
          </div>
        </div>
      </div>

      <!-- Total Nilai Card -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-purple-100 mr-4">
            <i class="fas fa-money-bill text-purple-500"></i>
          </div>
          <div>
            <p class="text-gray-500 text-sm">Total Nilai</p>
            <p class="text-2xl font-bold">Rp 0</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Recent Activity Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Aktivitas Terbaru</h3>
        <a href="{{ route('logout') }}" class="text-sm text-red-500 hover:text-red-700">
          <i class="fas fa-sign-out-alt mr-1"></i> Logout
        </a>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Tanggal</th>
              <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Aktivitas</th>
              <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Barang</th>
              <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4 border-b border-gray-200 text-sm">-</td>
              <td class="py-2 px-4 border-b border-gray-200 text-sm">-</td>
              <td class="py-2 px-4 border-b border-gray-200 text-sm">-</td>
              <td class="py-2 px-4 border-b border-gray-200 text-sm">-</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  {{-- FOOTER --}}
  <x-footer />

  <!-- JavaScript -->
  <script>
    // Update jumlah total barang (simulasi data dari controller)
    document.addEventListener('DOMContentLoaded', function () {
      const totalItems = 25;
      document.getElementById('total-items').textContent = totalItems;
    });
  </script>

</body>
</html>
