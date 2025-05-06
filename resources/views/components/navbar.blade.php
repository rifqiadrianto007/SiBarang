<nav x-data="{ isOpen: false }" class="fixed w-full bg-white bg-opacity-50 backdrop-blur-sm z-50 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo dan Judul (Kiri) -->
        <div class="flex-shrink-0 flex items-center space-x-3">
          <div class="flex items-center justify-center h-12 w-12">
            <img src="{{ Vite::asset('public/img/barang-logo.svg') }}" alt="Logo" class="h-10 w-auto" />
          </div>
          <span class="font-bold text-2xl">SiBarang</span>
        </div>

        <!-- Menu Navigasi (Tengah) -->
        <div class="hidden md:flex flex-1 justify-center space-x-10 items-center font-medium">
          <a href="{{ route('dashboard') }}" class="relative group {{ request()->routeIs('dashboard') ? 'text-indigo-700' : '' }}">
            <span class="hover:text-indigo-700 transition">Dashboard</span>
            <span class="absolute -bottom-1 left-0 {{ request()->routeIs('dashboard') ? 'w-full' : 'w-0' }} h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
          </a>
          <a href="{{ route('kelola') }}" class="relative group {{ request()->routeIs('kelola') ? 'text-indigo-700' : '' }}">
            <span class="hover:text-indigo-700 transition">Kelola</span>
            <span class="absolute -bottom-1 left-0 {{ request()->routeIs('kelola') ? 'w-full' : 'w-0' }} h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
          </a>
        </div>

        <!-- Actions (Kanan) -->
        <div class="hidden md:flex items-center space-x-4">
          <!-- Menu Profile -->
          <a href="{{ route('profile') }}" class="relative group {{ request()->routeIs('profile') ? 'text-indigo-700' : '' }}">
            <span class="hover:text-indigo-700 transition">Profile</span>
            <span class="absolute -bottom-1 left-0 {{ request()->routeIs('profile') ? 'w-full' : 'w-0' }} h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
          </a>
          <!-- Tombol Logout -->
          <a href="{{ route('login') }}" class="bg-red-600 text-white px-3 py-1 rounded-lg font-medium hover:opacity-90 transition"
          onclick="window.location.href='{{ route('login') }}'">Logout</a>
        </div>

        <!-- Tombol Mobile Menu -->
        <div class="md:hidden flex items-center">
          <button @click="isOpen = !isOpen" class="text-gray-700 hover:text-indigo-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div x-show="isOpen" class="md:hidden bg-white pb-4">
        <div class="flex flex-col space-y-3 px-2 pt-2 pb-3">
          <a href="{{ route('dashboard') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('dashboard') ? 'text-indigo-700 bg-gray-50' : 'text-gray-700 hover:text-indigo-700 hover:bg-gray-50' }} rounded-md">Dashboard</a>
          <a href="{{ route('kelola') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('kelola') ? 'text-indigo-700 bg-gray-50' : 'text-gray-700 hover:text-indigo-700 hover:bg-gray-50' }} rounded-md">Kelola</a>
          <a href="{{ route('profile') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('profile') ? 'text-indigo-700 bg-gray-50' : 'text-gray-700 hover:text-indigo-700 hover:bg-gray-50' }} rounded-md">Profile</a>
          <a href="{{ route('login') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-red-600 hover:bg-gray-50 rounded-md">Logout</a>
        </div>
      </div>
    </div>
  </nav>
