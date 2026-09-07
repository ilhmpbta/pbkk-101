@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Selamat Datang</h1>
            <p class="text-xl text-gray-300">
                Pemrogramaan Berbasis Kerangka Kerja (B)<br>
                Institut Teknologi Sepuluh Nopember (ITS) Surabaya
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $members = [
                    ['name' => 'Joaquin Fairuz Nawfal Ismono', 'nrp' => '5025241106'],
                    ['name' => 'Muhammad Zahran Rizki Primanda', 'nrp' => '5025241107'],
                    ['name' => 'Hasan Abdurrahman', 'nrp' => '5025241114'],
                    ['name' => 'Bintang Ilham Pabeta', 'nrp' => '5025241152'],
                    ['name' => 'Felix Aldorino', 'nrp' => '5025241162'],
                ];
            @endphp

            @foreach($members as $index => $member)
                <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-indigo-500/10 animate-fade-in-up" 
                     style="animation-delay: {{ $index * 100 }}ms">
                    <div class="flex flex-col items-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($member['name']) }}&size=100&background=4F46E5&color=fff&bold=true" 
                             alt="{{ $member['name'] }}" 
                             class="w-24 h-24 rounded-full mb-4 border-2 border-indigo-500 transition-transform duration-300 hover:scale-110 hover:rotate-3">
                        <h3 class="text-lg font-semibold text-white text-center">{{ $member['name'] }}</h3>
                        <p class="text-indigo-400 text-sm font-mono">NRP: {{ $member['nrp'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
