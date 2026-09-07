@extends('layouts.app')

@section('title', 'Calculator Result')
@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="text-center">
            <div class="bg-gray-800/50 p-12 rounded-lg border border-white/10 max-w-3xl mx-auto">
                <div class="text-2xl text-gray-300">
                    {{ $result }}
                </div>
                <div class="mt-6">
                    <a href="{{ route('home') }}" 
                       class="inline-block px-6 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-medium transition-colors">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
