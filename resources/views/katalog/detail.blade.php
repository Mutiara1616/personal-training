<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Katalog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Home - PT Dirgantara Indonesia
        </x-slot> 

        <!-- Detail Content -->
        <main class="container mx-auto px-8 py-12">
                <!-- Image Header -->
                <div class="rounded-2xl overflow-hidden mb-8">
                    <img src="{{ $katalog->gambar }}" alt="{{ $katalog->judul }}" class="w-full h-[400px] object-cover">
                </div>

                <!-- Rating Stars -->
                <div class="flex mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <!-- Title -->
                <h1 class="text-3xl font-bold mb-4">{{ $katalog->judul }}</h1>

                <!-- Date and Location -->
                <div class="text-gray-600 mb-6">
                    <p class="mb-2">Date: {{ Carbon\Carbon::parse($katalog->tanggal_mulai)->format('d M Y') }} - {{ Carbon\Carbon::parse($katalog->tanggal_selesai)->format('d M Y') }}</p>
                    <p>Location: {{ $katalog->lokasi }}</p>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold mb-4">Description</h2>
                    <p class="text-gray-700">{{ $katalog->deskripsi }}</p>
                </div>

                <!-- Price -->
                <div class="flex items-center justify-between bg-gray-50 p-6 rounded-xl">
                    <div>
                        <p class="text-3xl font-bold">Rp {{ number_format($katalog->harga, 2, ',', '.') }}</p>
                        <p class="text-gray-500">/Person</p>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="space-x-4">
                        @if($katalog->whatsapp)
                            @auth('member')
                                <button onclick="window.open('https://wa.me/62{{ $katalog->whatsapp }}?text=Halo, saya tertarik dengan pelatihan {{ urlencode($katalog->judul) }}. Mohon informasi lebih lanjut.')" 
                                        class="px-8 py-3.5 bg-blue-900 text-white rounded-full hover:bg-blue-800">
                                    Start The Negotiation
                                </button>
                            @else
                                <a href="{{ route('login') }}" 
                                class="px-8 py-3.5 bg-blue-900 text-white rounded-full hover:bg-blue-800">
                                    Login to Negotiate
                                </a>
                            @endauth
                        @endif

                        <a href="{{ Auth::guard('member')->check() ? route('payment', $katalog->id) : route('login') }}" 
                            class="inline-block px-8 py-3 border border-blue-900 text-blue-900 rounded-full hover:bg-blue-50">
                            {{ Auth::guard('member')->check() ? 'Payment' : 'Login to Pay' }}
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </x-app-layout>
</body>
</html>