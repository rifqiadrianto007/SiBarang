<nav class="bg-white shadow-md fixed w-full z-10">
    <div class="container mx-auto px-6 py-3">
      <div class="flex justify-between items-center">

        <!-- Logo dan Nama -->
        <div class="flex items-center">
          <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-3">B</div>
          <span class="text-xl font-semibold text-gray-800">BarangBareng</span>
        </div>

        <!-- Menu -->
        <div class="hidden md:flex space-x-6">
          <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Dashboard</a>
          <!-- Menu lainnya -->
        </div>

        <!-- User Menu -->
        {{-- <div class="flex items-center space-x-4">
          <span class="text-sm text-gray-600">{{ session('username', 'Guest') }}</span>
          <a href="{{ route('logout') }}" class="text-sm text-red-500 hover:text-red-700 transition-colors">
            <i class="fas fa-sign-out-alt mr-1"></i> Logout
          </a>
        </div> --}}

      </div>
    </div>
  </nav>
