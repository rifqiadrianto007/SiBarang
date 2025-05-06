@extends('layout.app')

<!-- Main Content -->
@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6 bg-gray-100 border-b">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Pengguna</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Detail profil dan informasi akun Anda</p>
                    </div>
                    <div class="flex justify-center py-5">
                        <div class="relative">
                            <div class="h-32 w-32 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-user text-blue-500 text-5xl"></i>
                            </div>
                            <div class="absolute bottom-0 right-0 h-8 w-8 bg-white rounded-full flex items-center justify-center border border-gray-200">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pb-5">
                        @if(session('username'))
                        <h2 class="text-xl font-semibold text-gray-800">{{ session('username') }}</h2>
                        @endif
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-50">
                                <dt class="text-sm font-medium text-gray-500">Username</dt>
                                @if(session('username'))
                                    <h2 class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ session('username') }}</h2>
                                @endif
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
