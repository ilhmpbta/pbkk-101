@extends('layouts.app')

@section('title', 'Project Idea')

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Final Project Idea</h1>
            <p class="text-xl text-gray-300">
                System Log Anomaly Detection Agent<br>
                Department of Informatics Engineering ITS
            </p>
        </div>
        
        <!-- Project Overview -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 mb-6">
            <h2 class="text-xl font-semibold text-white mb-4">Project Overview</h2>
            <p class="text-gray-300 leading-relaxed">
                An Agentic AI platform that autonomously monitors and analyzes system logs to detect anomalies,
                identify potential causes, determine severity, and provide troubleshooting recommendations.
            </p>
        </div>
        
        <!-- Project Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Objective -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4">Objective</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Develop an autonomous AI agent that detects abnormal log patterns and assists users
                    in diagnosing and resolving system issues.
                </p>
            </div>
            
            <!-- Technologies -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4">Technologies</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">NativePHP</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">LLM</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">AI/ML</span>
                </div>
            </div>
        </div>
        
        <!-- Expected Outcomes -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 mb-6">
            <h3 class="text-xl font-semibold text-indigo-400 mb-4">Expected Outcomes</h3>
            <ul class="space-y-2 text-gray-300">
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Automatic system log anomaly detection</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">AI-powered anomaly analysis and root cause identification</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Troubleshooting recommendations and incident reports</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Standalone desktop application</span>
                </li>
            </ul>
        </div>
        
        <!-- Status Badge -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 text-center">
            <div class="inline-block px-6 py-3 bg-indigo-900/30 border border-indigo-500/30 rounded-lg">
                <p class="text-sm text-indigo-300">
                    <strong>Status:</strong> In Development
                </p>
            </div>
        </div>
    </div>
@endsection
