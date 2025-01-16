<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-[Poppins]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - PT Dirgantara Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white font-[Poppins]">
    <!-- Navbar -->
    <nav class="container mx-auto px-8 py-6 flex justify-between items-center font-[Poppins]">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
        </div>
        <div class="flex space-x-8">
            <a href="/" class="text-gray-400">Home</a>
            <a href="{{ route('catalog') }}" class="text-gray-400">Catalog</a>
            <a href="{{ route('contact') }}" class="text-blue-900 font-medium border-b-2 border-blue-900">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Hero Section with Background Image -->
    <div class="relative h-[400px] bg-black font-[Poppins]">
        <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-5xl font-bold mb-6">Contact Us</h1>
            <p class="max-w-3xl text-center px-4">
                Thank you for visiting our site! If you have any questions about aerospace training services, would like a consultation, or require further information, please do not hesitate to contact us. Our team is ready to help you achieve your career goals and personal development in the world of aerospace.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-white font-[Poppins] py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 gap-40">
                <!-- Left Side -->
                <div>
                    <!-- Logo and Title -->
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-9 w-9">
                        <h2 class="font-bold text-base tracking-tight">PT DIRGANTARA INDONESIA</h2>
                    </div>

                    <!-- Description -->
                    <p class="text-sm text-gray-600 leading-relaxed mb-8">
                        PT Dirgantara Indonesia (PTDI) is an Indonesian aircraft industry company engaged in the aerospace sector. PTDI produces various types of aircraft to meet the needs of civil airlines, military operators, and special missions.
                    </p>

                    <!-- Social Media -->
                    <div class="flex items-center gap-5 mb-16">
                        <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-5"></a>
                        <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="h-5"></a>
                        <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-5"></a>
                        <a href="#"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="h-5"></a>
                    </div>

                    <!-- Company Info -->
                    <div>
                        <h3 class="font-semibold text-sm mb-1">PT Dirgantara Indonesia</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Leading Indonesia's Aerospace Excellence Since 1976. Your trusted partner in aviation training and certification
                        </p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="mt-[52px]">
                    <h3 class="font-bold text-lg mb-4">Our Contact</h3>
                    <div class="space-y-3">
                        <!-- Phone -->
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/Phone.png') }}" alt="Phone" class="h-4">
                            <span class="text-sm">(0285) XXXXXX</span>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start gap-2">
                            <img src="{{ asset('images/Envelope.png') }}" alt="Email" class="h-4 mt-1">
                            <div class="space-y-1">
                                <a href="mailto:marketing-ptdi@indonesian-aerospace.com" class="block text-sm underline">
                                    marketing-ptdi@indonesian-aerospace.com
                                </a>
                                <a href="mailto:sekretariatptdi@indonesian-aerospace.com" class="block text-sm underline">
                                    sekretariatptdi@indonesian-aerospace.com
                                </a>
                                <a href="mailto:pub-rel@indonesian-aerospace.com" class="block text-sm underline">
                                    pub-rel@indonesian-aerospace.com
                                </a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start gap-2">
                            <img src="{{ asset('images/location.png') }}" alt="Location" class="h-4 mt-1">
                            <span class="text-sm text-gray-600">Jalan Pajajaran No. 154 Bandung 40174 West Java - Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-sm text-gray-600 mt-12">
                © 2025 Sistem Personal Training - PT Dirgantara Indonesia
            </div>
        </div>
    </div>
</body>
</html>