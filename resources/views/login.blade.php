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
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Wave shape styling */
    .wave-shape {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100px;
      z-index: 10;
    }

    .wave-path {
      fill: white;
    }
  </style>
</head>
<body class="bg-[#F7F9FC] min-h-screen flex items-center justify-center p-6">
  <div class="max-w-6xl w-full bg-white rounded-3xl shadow-lg flex flex-col md:flex-row overflow-hidden">
    <!-- Left side form -->
    <div class="w-full md:w-1/2 p-10 md:px-16 md:py-16 relative">
      <!-- Header nav -->
      <nav class="flex items-center justify-start space-x-10 mb-16">
        <div class="flex items-center space-x-2">
          <div class="w-7 h-7 rounded-full bg-[#2F80ED]"></div>
          <span class="font-semibold text-black text-lg select-none">BarangBareng</span>
        </div>
      </nav>

      <!-- Form content - properly positioned -->
      <h2 class="text-2xl font-extrabold text-gray-800 mb-2">Login</h2>
      <p class="text-gray-400 text-sm mb-8">Welcome back! Please login to your account.</p>

      @if(session('error'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
      </div>
      @endif

      <form class="space-y-6" method="POST" action="{{ route('login.process') }}">
        @csrf
        <div>
          <label class="block text-xs text-gray-400 mb-1" for="email">Email</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-500" id="email" name="email" type="email" required/>
        </div>

        <div>
          <label class="block text-xs text-gray-400 mb-1" for="username">Username</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-500" id="username" name="username" type="text" required/>
        </div>

        <div>
          <label class="block text-xs text-gray-400 mb-1" for="password">Password</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-500" id="password" name="password" type="password" required/>
        </div>

        <div class="flex items-center justify-between text-xs text-gray-400 mb-6">
          <button class="text-gray-300 hover:text-gray-400" type="button">Forget Password?</button>
        </div>

        <button type="submit" class="block text-center w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-md text-sm transition-colors">
          Login
        </button>
      </form>

      <p class="text-xs text-gray-400 mt-6">
        New User?
        <a class="text-purple-600 font-semibold hover:underline" href="#">Signup</a>
      </p>
    </div>

    <!-- Right side image with improved wavy shape -->
    <div class="hidden md:block md:w-1/2 relative">
      <img alt="Mountain lake reflection with pine trees and snowy mountain peaks under a cloudy sky" class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/345bbea1-e2a8-4bdd-6494-02ff773e03fc.jpg"/>

      <!-- Improved wave shape overlay -->
      <svg class="wave-shape" viewBox="0 0 100 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" d="M0,0 L100,0 C70,100 100,200 70,300 C40,400 70,500 40,600 C10,700 40,800 0,800 Z"></path>
      </svg>

      <img alt="White stylized logo with three vertical bars and a dot" class="absolute bottom-6 right-6" height="40" src="https://storage.googleapis.com/a1aa/image/3713d7fa-d240-49d2-2b0d-81f763f7b5bf.jpg" width="80"/>
    </div>
  </div>
</body>
</html>
