<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificate</title>
    @vite('resources/css/app.css')
    <style>
        .certificate-title {
            font-family: 'Times New Roman', serif;
            font-weight: 600;
            font-size: 3.5rem;
            color: #1a237e;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">Certificate - PT Dirgantara Indonesia</x-slot>

        <main class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-2">
                <!-- Certificate Preview -->
                <div class="relative w-full bg-white p-10">
                    <!-- Logo -->
                    <div class="absolute top-8 right-8">
                        <img src="{{ asset('images/logos.png') }}" alt="Logo" class="w-24">
                    </div>
                 
                    <!-- Content -->
                    <div class="max-w-3xl mx-auto">
                        <h1 class=" certificate-title text-5xl font-bold mt-4 mb-14">CERTIFICATE OF TRAINING</h1>
                 
                        <p class="text-gray-600 mb-4">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</p>
                 
                        @foreach($participants as $participant)
                        <h2 class="text-4xl text-[#3B4EDB] font-bold mb-2">{{ $participant }}</h2>
                        @endforeach
                 
                        <p class="text-gray-600 mt-6">For successfully completing</p>
                        <p class="text-[#3B4EDB] text-xl font-semibold mb-6">{{ $payment->katalog->judul }}</p>
                        <p class="mt-2">{{ $payment->katalog->tanggal_mulai->format('F d, Y') }} - {{ $payment->katalog->tanggal_selesai->format('F d, Y') }}</p>
                 
                        <div class="flex items-end justify-between mt-20">
                            <!-- Signature left -->
                            <div class="text-center">
                                <img src="{{ asset('images/signature.png') }}" alt="Signature" class="w-32 mb-2">
                                <div class="w-48 border-t border-gray-300 pt-2">
                                    <p class="font-bold">Training Director</p>
                                    <p class="text-sm">REPRESENTATIVES</p>
                                </div>
                            </div>
                 
                            <!-- Center seal -->
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/approved.png') }}" alt="Company Seal" class="w-32 h-32 rounded-full object-cover">
                            </div>
                 
                            <!-- Signature right -->
                            <div class="text-center">
                                <img src="{{ asset('images/signature.png') }}" alt="Signature" class="w-32 mb-2">
                                <div class="w-48 border-t border-gray-300 pt-2">
                                    <p class="font-bold">Chief Executive Officer</p>
                                    <p class="text-sm">REPRESENTATIVES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <!-- Download Button -->
            <div class="flex justify-center mt-6">
                <a href="{{ route('certificate.download', $payment->id) }}" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Certificate
                </a>
            </div>
        </main>
    </x-app-layout>
</body>
</html>