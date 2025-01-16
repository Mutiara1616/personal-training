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
    <!-- Navbar -->
    <nav class="container mx-auto px-8 py-6 flex justify-between items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
        </div>
        <div class="flex space-x-12">
            <a href="/" class="text-gray-400 hover:text-gray-600">Home</a>
            <a href="{{ route('catalog') }}" class="text-blue-900 font-medium border-b-2 border-blue-900">Catalog</a>
            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-gray-600">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border-2 border-blue-900 rounded-full text-blue-900 font-medium hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-8 py-12">
        <!-- Hero Text Section -->
        <div class="text-center mb-12 max-w-5xl mx-auto">
            <h1 class="text-[2.5rem] mb-6 leading-relaxed font-medium tracking-tight">
                <span class="text-black">"Advanced Aviation </span>
                <span class="text-blue-600">Engineering Training</span>
                <span class="text-black">, where technical mastery meets industry standards. </span>
                <span class="text-blue-600">Our experienced</span>
                <span class="text-black"> trainers </span>
                <span class="text-blue-600">deliver professional</span>
                <span class="text-black"> aerospace certification programs"</span>
            </h1>
            <p class="text-gray-500 max-w-3xl mx-auto">
                With world-class facilities and industry experts, navigating your aviation career path has never been more accessible. Our comprehensive training programs are designed to transform your aerospace ambitions into professional certifications and practical expertise.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="relative mb-12">
            <input 
                type="text" 
                placeholder="Search your training..." 
                class="w-full px-12 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <svg class="w-6 h-6 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>

        <!-- Training Cards Grid -->
        <div class="grid grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Aircraft" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Aircraft Structure Design</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">January 18, 2025</p>
                            <p class="text-gray-300">Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft Systems" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Aircraft Systems Engineering</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">January 28, 2025</p>
                            <p class="text-gray-300">Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-systems-engineering') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar3.jpg') }}" alt="Manufacturing" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Manufacturing Process Optimization</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">February 06, 2025</p>
                            <p class="text-gray-300">Manufact Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'manufacturing-process-optimization') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Structural Repair" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Structural Repair Techniques</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">Maret 10, 2025</p>
                            <p class="text-gray-300">HC3000 lt.1</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'structural-repair-techniques') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Aircraft" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Aircraft Structure Design</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">January 18, 2025</p>
                            <p class="text-gray-300">Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design-2') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft Systems" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Aircraft Systems Engineering</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">January 28, 2025</p>
                            <p class="text-gray-300">Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-systems-engineering-2') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar3.jpg') }}" alt="Manufacturing" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Manufacturing Process Optimization</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">February 06, 2025</p>
                            <p class="text-gray-300">Manufact Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'manufacturing-process-optimization-2') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162C] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Structural Repair" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Structural Repair Techniques</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-300">Maret 10, 2025</p>
                            <p class="text-gray-300">HC3000 lt.1</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'structural-repair-techniques-2') }}" 
                           class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition duration-300">
                            See →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>