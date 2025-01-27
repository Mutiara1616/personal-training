<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificates</title>
    @vite('resources/css/app.css')
    <style>
        .cert-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 1.5rem;
            padding: 2rem;
            max-width: 100%;
            margin: 0 auto;
        }

        .cert-card {
            background: white;
            border-radius: 1rem;
            padding: 1.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .cert-content {
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }

        .logo-img {
            position: absolute;
            top: 0;
            right: 0;
            width: 2.5rem;
            height: auto;
        }
    </style>
</head>
<body class="bg-white">
    <x-app-layout>
        <main class="container mx-auto">
            <!-- Tombol Download Semua -->
            <div class="flex justify-end px-8">
                <a href="{{ route('certificate.download-all', $payment->id) }}" 
                   class="bg-[#3B4EDB] text-white px-6 py-3 rounded-lg flex items-center gap-2 hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download All Certificates
                </a>
            </div>

            <div class="cert-grid">
                @foreach($participants as $participant)
                <div class="cert-card">
                    <div class="cert-content">
                        <!-- Header -->
                        <div class="relative mb-3">
                            <h1 class="text-[#001973] text-lg font-bold pr-10">CERTIFICATE OF TRAINING</h1>
                            <img src="{{ asset('images/logos.png') }}" alt="Logo" class="logo-img">
                        </div>

                        <!-- Content -->
                        <div class="space-y-1.5">
                            <p class="text-gray-600 text-xs">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</p>
                            <h2 class="text-[#3B4EDB] text-base font-bold">{{ $participant }}</h2>
                            <p class="text-gray-600 text-xs">For successfully completing</p>
                            <p class="text-[#3B4EDB] text-sm font-semibold">{{ $payment->katalog->judul }}</p>
                            <p class="text-gray-600 text-xs">
                                {{ $payment->katalog->tanggal_mulai->format('F d, Y') }} - 
                                {{ $payment->katalog->tanggal_selesai->format('F d, Y') }}
                            </p>
                        </div>

                        <!-- Signatures -->
                        <div class="flex justify-between items-center mt-4"> 
                            <div class="text-center w-1/3">
                                <img src="{{ asset('images/signature.png') }}" alt="Signature" class="w-10 mx-auto mb-1">
                                <div class="border-t border-gray-200 pt-1">
                                    <p class="text-[9px] font-bold">Training Director</p>
                                    <p class="text-[8px] text-gray-500">REPRESENTATIVES</p>
                                </div>
                            </div>

                            <div class="text-center w-1/3 flex justify-center">
                                <img src="{{ asset('images/approved.png') }}" alt="Seal" class="w-10">
                            </div>

                            <div class="text-center w-1/3">
                                <img src="{{ asset('images/signature.png') }}" alt="Signature" class="w-10 mx-auto mb-1">
                                <div class="border-t border-gray-200 pt-1">
                                    <p class="text-[9px] font-bold">Chief Executive Officer</p>
                                    <p class="text-[8px] text-gray-500">REPRESENTATIVES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </x-app-layout>
</body>
</html>