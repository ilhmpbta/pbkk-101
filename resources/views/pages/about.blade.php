@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">About Us</h1>
            <p class="text-xl text-gray-300">
                Department of Informatics Engineering<br>
                Institut Teknologi Sepuluh Nopember (ITS) Surabaya
            </p>
        </div>
        
        <!-- Department Info -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 mb-6">
            <h2 class="text-xl font-semibold text-white mb-4">Department of Informatics Engineering</h2>
            <p class="text-gray-300 leading-relaxed">
                The Department of Informatics Engineering at ITS is dedicated to excellence in education, research, and innovation in the fields of computer science and software engineering. 
                We prepare students to become technology leaders through a cutting-edge curriculum and world-class facilities.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Our programs focus on developing skilled professionals who can contribute to the rapidly evolving 
                technology landscape with innovation and expertise.
            </p>
        </div>
        
        <!-- Vision & Mission Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Vision -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4 flex items-center gap-2">Vision</h3>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Leading informatics innovator at national and international levels</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Supporting environmentally-friendly industries and maritime affairs</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Active role in advancing and prospering the nation</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Excellent and innovative-inventive in intelligent informatics</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Supporting digital transformation with international reputation</span>
                    </li>
                </ul>
            </div>
            
            <!-- Mission -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4 flex items-center gap-2">Mission</h3>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Quality learning process meeting national and international standards</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Innovative, quality, and useful research</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Increasing ICT utilization for the community</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-indigo-400 mt-1">▸</span>
                        <span class="text-sm">Establishing partnerships domestically and abroad</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Google Maps -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
            <h3 class="text-xl font-semibold text-white mb-4">Our Location</h3>
            <p class="text-gray-400 text-sm mb-4">
                Departemen Teknik Informatika ITS<br>
                Jl. Teknik Kimia ITS, Sukolilo, Surabaya 60111
            </p>
            <div class="rounded-lg overflow-hidden border border-white/10">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.657602077767!2d112.79269368759155!3d-7.279743852775925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf7e10deaff%3A0x2b2bcdafc68c9a28!2sDepartemen%20Teknik%20Informatika%20ITS!5e0!3m2!1sid!2sid!4v1788713278207!5m2!1sid!2sid" 
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="strict-origin-when-cross-origin"
                    class="w-full">
                </iframe>
            </div>
            <div class="mt-4 text-center">
                <a href="https://www.google.com/maps/place/Departemen+Teknik+Informatika+ITS/@-7.2797439,112.7926937,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fbf7e10deaff:0x2b2bcdafc68c9a28!8m2!3d-7.2797439!4d112.7952686!16s%2Fg%2F1yd1tq7r3?entry=ttu" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 transition-colors text-sm font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Open in Google Maps
                </a>
            </div>
        </div>
    </div>
@endsection
