<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="container mx-auto px-8 py-6 flex justify-between items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
        </div>
        <div class="flex space-x-8">
            <a href="/" class="text-gray-400">Home</a>
            <a href="{{ route('catalog') }}" class="text-blue-900 font-medium border-b-2 border-blue-900">Catalog</a>
            <a href="{{ route('contact') }}" class="text-gray-400">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-8 py-12">
        <!-- Hero Text Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl mb-6">
                <span class="text-blue-900">"This is</span> Personal Training, 
                <span class="text-blue-600">where talent meets growth. Our</span>
                dedicated trainers deliver impactful corporate 
                <span class="text-blue-600">learning solutions"</span>
            </h1>
            <p class="text-gray-500">
                We provide personal training which aims to ensure that employees who have
                carried out this training have better output, and also get certificates
            </p>
        </div>

        <!-- Search Bar -->
        <div class="relative mb-12">
            <input 
                type="text" 
                placeholder="Cari Layanan..." 
                class="w-full px-12 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <svg class="w-6 h-6 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>

        <!-- Training Cards Grid -->
        <div class="grid grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Aircraft" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Aircraft Structure Design</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>January 18, 2025</p>
                            <p>Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft Systems" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Aircraft Systems Engineering</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>January 28, 2025</p>
                            <p>Aircraft Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar3.jpg') }}" alt="Manufacturing" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Manufacturing Process Optimization</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>February 06, 2025</p>
                            <p>Manufact Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar2.jpg') }}" alt="Structural Repair" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Structural Repair Techniques</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>Maret 10, 2025</p>
                            <p>HC3000 lt.1</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar3.jpg') }}" alt="Manufacturing" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Manufacturing Process Optimization</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>February 06, 2025</p>
                            <p>Manufact Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="rounded-2xl overflow-hidden bg-[#10162c] text-white">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Manufacturing" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Manufacturing Process Optimization</h3>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p>February 06, 2025</p>
                            <p>Manufact Lab</p>
                        </div>
                        <a href="{{ route('catalog.detail', 'aircraft-structure-design') }}" class="px-4 py-1 rounded-full border border-white hover:bg-white hover:text-[#10162c]">
                            See →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>
</html>