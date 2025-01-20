<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalog</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F8F9FA]">
    <x-app-layout>
        <x-slot name="title">
            Home - PT Dirgantara Indonesia
        </x-slot>

        <!-- Main Content -->
        <main class="container mx-auto px-8 py-12">
            <!-- Hero Text Section -->
            <div class="text-center mb-12 max-w-6xl mx-auto">
                <h1 class="text-4xl mb-6 leading-relaxed font-medium tracking-tight">
                    <span class="text-black">"Master Aviation Engineering with </span>
                    <span class="text-blue-600 font-bold">Industry-Standard Training.</span>
                    <span class="text-black">Get Your Professional Aerospace Certification Today. </span>
                </h1>
                <p class="text-gray-500 max-w-4xl mx-auto leading-7">
                    With world-class facilities and industry experts, navigating your aviation career path has never been more accessible. Our comprehensive training programs are designed to transform your aerospace ambitions into professional certifications and practical expertise.
                </p>
            </div>

            <!-- Search Bar -->
            <div class="relative mb-12">
                <input 
                    type="text" 
                    placeholder="Search your training..." 
                    class="w-full px-12 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 hover:border-blue-500 transition-colors duration-200"
                >
                <svg class="w-6 h-6 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>

            <!-- Training Cards Grid -->
        <div class="grid grid-cols-4 gap-6">
            @forelse($katalogs as $katalog)
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white flex flex-col">
                <div class="h-48">
                    <img src="{{ $katalog->gambar }}" alt="{{ $katalog->judul }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold mb-auto">{{ $katalog->judul }}</h3>
                    <div class="flex justify-between items-center text-sm mt-4">
                        <div>
                            <p class="text-gray-300">{{ $katalog->tanggal_mulai->format('F d, Y') }}</p>
                            <p class="text-gray-300">{{ $katalog->lokasi }}</p>
                        </div>
                        <a href="{{ route('catalog.detail', $katalog->slug) }}" 
                        class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-4 text-center py-8">
                <p class="text-gray-500">No training courses available at the moment.</p>
            </div>
            @endforelse
        </div>
        </main>
    </x-app-layout>
</body>
</html>