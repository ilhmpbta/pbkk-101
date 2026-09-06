@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Selamat Datang</h1>
            <p class="text-xl text-gray-300">
                Pemrogramaan Berbasis Kerangka Kerja (B)<br>
                Institut Teknologi Sepuluh Nopember (ITS) Surabaya
            </p>
        </div>
        
        <!-- Content Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Joaquin Fairuz Nawfal Ismono -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                <div class="flex flex-col items-center">
                    <img src="https://ui-avatars.com/api/?name=Joaquin+Fairuz+Nawfal+Ismono&size=100&background=4F46E5&color=fff&bold=true" 
                         alt="Joaquin Fairuz Nawfal Ismono" 
                         class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500">
                    <h3 class="text-lg font-semibold text-white text-center">Joaquin Fairuz Nawfal Ismono</h3>
                    <p class="text-indigo-400 text-sm font-mono">NRP: 5025241106</p>
                </div>
            </div>

            <!-- Muhammad Zahran Rizki Primanda -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                <div class="flex flex-col items-center">
                    <img src="https://ui-avatars.com/api/?name=Muhammad+Zahran+Rizki+Primanda&size=100&background=4F46E5&color=fff&bold=true" 
                         alt="Muhammad Zahran Rizki Primanda" 
                         class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500">
                    <h3 class="text-lg font-semibold text-white text-center">Muhammad Zahran Rizki Primanda</h3>
                    <p class="text-indigo-400 text-sm font-mono">NRP: 5025241107</p>
                </div>
            </div>

            <!-- Hasan Abdurrahman -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                <div class="flex flex-col items-center">
                    <img src="https://ui-avatars.com/api/?name=Hasan+Abdurrahman&size=100&background=4F46E5&color=fff&bold=true" 
                         alt="Hasan Abdurrahman" 
                         class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500">
                    <h3 class="text-lg font-semibold text-white text-center">Hasan Abdurrahman</h3>
                    <p class="text-indigo-400 text-sm font-mono">NRP: 5025241114</p>
                </div>
            </div>

            <!-- Bintang Ilham Pabeta -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                <div class="flex flex-col items-center">
                    <img src="https://ui-avatars.com/api/?name=Bintang+Ilham+Pabeta&size=100&background=4F46E5&color=fff&bold=true" 
                         alt="Bintang Ilham Pabeta" 
                         class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500">
                    <h3 class="text-lg font-semibold text-white text-center">Bintang Ilham Pabeta</h3>
                    <p class="text-indigo-400 text-sm font-mono">NRP: 5025241152</p>
                </div>
            </div>

            <!-- Felix Aldorino -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                <div class="flex flex-col items-center">
                    <img src="https://ui-avatars.com/api/?name=Felix+Aldorino&size=100&background=4F46E5&color=fff&bold=true" 
                         alt="Felix Aldorino" 
                         class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500">
                    <h3 class="text-lg font-semibold text-white text-center">Felix Aldorino</h3>
                    <p class="text-indigo-400 text-sm font-mono">NRP: 5025241162</p>
                </div>
            </div>
        </div>
    </div>
@endsection
