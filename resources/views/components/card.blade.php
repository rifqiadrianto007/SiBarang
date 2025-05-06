<div class="max-w-6xl w-full bg-white rounded-3xl shadow-lg flex flex-col md:flex-row overflow-hidden">
    <div class="w-full md:w-1/2 p-10 md:px-16 md:py-16 relative">
        <nav class="flex items-center justify-start space-x-10 mb-16">
            <div class="flex items-center space-x-2">
                <div class="w-7 h-7 rounded-full bg-[#2F80ED]"></div>
                <span class="font-semibold text-black text-lg select-none">SiBarang</span>
            </div>
        </nav>

        <h2 class="text-2xl font-extrabold text-gray-800 mb-2">Login</h2>
        <p class="text-gray-400 text-sm mb-8">Welcome back! Please login to your account.</p>

        <form class="space-y-6" method="POST" action="{{ route('dashboard') }}">
            @csrf
            <div>
                <label class="block text-xs text-gray-400 mb-1" for="username">Username</label>
                <input
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    id="username" name="username" type="text" required />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1" for="password">Password</label>
                <input
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    id="password" name="password" type="password" required />
            </div>

            <div class="flex items-center justify-between text-xs text-gray-400 mb-6">
                <button class="text-gray-300 hover:text-gray-400" type="button">Forget Password?</button>
            </div>

            <button type="submit"
                class="block text-center w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-md text-sm transition-colors">
                Login
            </button>
        </form>

        <p class="text-xs text-gray-400 mt-6">
            New User?
            <a class="text-purple-600 font-semibold hover:underline" href="#">Signup</a>
        </p>
    </div>

    <div class="hidden md:block md:w-1/2 relative">
        <img class="w-full h-full object-cover"
            src="{{ Vite::asset('public/img/loginpic.jpg') }}" alt="warehouse" />

        <svg class="wave-shape" viewBox="0 0 100 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path class="wave-path"
                d="M0,0 L100,0 C70,100 100,200 70,300 C40,400 70,500 40,600 C10,700 40,800 0,800 Z"></path>
        </svg>

    </div>
</div>
