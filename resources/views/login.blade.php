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

     <!-- Main Content (Profile) -->
     <main class="pt-24 pb-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Header dengan sapaan -->
                <div class="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-indigo-500 to-purple-600">
                    <h1 class="text-2xl font-bold text-white">
                        Hallo, welcome back RIFQI!!!
                        {{-- {{ explode('@', Auth::user()->email)[0] }} --}}
                    </h1>
                </div>

                <!-- Profile content -->
                <div class="px-6 py-8">
                    <div class="flex flex-col md:flex-row items-center">
                        <!-- Avatar -->
                        <div class="mb-6 md:mb-0 md:mr-8">
                            <div class="bg-indigo-100 rounded-full h-32 w-32 flex items-center justify-center">
                                <span class="text-indigo-600 text-5xl">
                                    {{-- {{ strtoupper(substr(Auth::user()->name, 0, 1)) }} --}}
                                </span>
                            </div>
                        </div>

                        <!-- User Info -->
                        <div class="flex-1">
                            <div class="mb-6">
                                <h2 class="text-xl font-semibold text-gray-900 mb-1">Informasi Pengguna</h2>
                                <div class="h-1 w-24 bg-indigo-500 rounded"></div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-gray-500">Nama Lengkap</span>
                                    <span class="text-lg font-medium text-gray-900">
                                        {{-- {{ Auth::user()->name }} --}}
                                    </span>
                                </div>

                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-gray-500">Email</span>
                                    <span class="text-lg font-medium text-gray-900">
                                        {{-- {{ Auth::user()->name }} --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Logout Button -->
                    <div class="mt-10 flex justify-center md:justify-end">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-lg shadow-md transition flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- footer --}}
    <x-footer />
</body>
</html>
