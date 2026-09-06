@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="text-center max-w-2xl mx-auto">
            <div class="mb-8">
                <h1 class="text-9xl font-bold text-indigo-500">404</h1>
                <div class="mt-4">
                    <span class="inline-block px-4 py-2 bg-indigo-500/10 text-indigo-400 rounded-full text-sm font-medium border border-indigo-500/20">
                        Page Not Found
                    </span>
                </div>
            </div>
            
            <h2 class="text-3xl font-bold text-white mb-4">Oops! Page not found</h2>
            <p class="text-gray-400 text-lg mb-8">
                Sorry, the page you are looking for doesn't exist or has been moved.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('home') }}" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-medium transition-colors inline-flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Back to Home
                </a>
                <a href="{{ route('about') }}" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 rounded-lg text-white font-medium transition-colors">
                    About Us
                </a>
            </div>
        </div>
    </div>
@endsection
