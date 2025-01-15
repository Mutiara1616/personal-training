<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - PT Dirgantara Indonesia</title>
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
            <a href="{{ route('catalog') }}" class="text-gray-400">Catalog</a>
            <a href="{{ route('contact') }}" class="text-blue-900 font-medium border-b-2 border-blue-900">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Hero Section with Background Image -->
    <div class="relative h-[400px] bg-black">
        <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-5xl font-bold mb-6">Contact Us</h1>
            <p class="max-w-3xl text-center px-4">
                Thank you for visiting our site! If you have any questions about aerospace training services, would like a consultation, or require further information, please do not hesitate to contact us. Our team is ready to help you achieve your career goals and personal development in the world of aerospace.
            </p>
        </div>
    </div>

    <!-- Company Info and Contact Section -->
    <div class="container mx-auto px-8 py-16 flex justify-between">
        <!-- Company Info -->
        <div class="w-1/2">
            <img src="{{ asset('images/logo.png') }}" alt="PTDI Logo" class="h-12 mb-6">
            <p class="text-gray-600 mb-8">
                PT Dirgantara Indonesia (PTDI) is an Indonesian aircraft industry company engaged in the aerospace sector. PTDI produces various types of aircraft to meet the needs of civil airlines, military operators, and special missions.
            </p>
            <!-- Social Media Icons -->
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- Company Description -->
            <div class="mt-12">
                <h2 class="font-bold mb-4">PT Dirgantara Indonesia</h2>
                <p class="text-gray-600">Leading Indonesia's Aerospace Excellence Since 1976. Your trusted partner in aviation training and certification</p>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="w-1/3">
            <h2 class="font-bold text-xl mb-6">Our Contact</h2>
            <div class="space-y-4">
                <p class="text-gray-600">(0285) XXXXXX</p>
                <div>
                    <a href="mailto:marketing-ptdi@indonesian-aerospace.com" class="text-gray-600 hover:text-blue-900">marketing-ptdi@indonesian-aerospace.com</a><br>
                    <a href="mailto:sekretariatptdi@indonesian-aerospace.com" class="text-gray-600 hover:text-blue-900">sekretariatptdi@indonesian-aerospace.com</a><br>
                    <a href="mailto:pub-rel@indonesian-aerospace.com" class="text-gray-600 hover:text-blue-900">pub-rel@indonesian-aerospace.com</a>
                </div>
                <p class="text-gray-600">
                    Jalan Pajajaran No. 154 Bandung 40174 West Java - Indonesia
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container mx-auto px-8 py-4 border-t border-gray-200">
        <p class="text-center text-gray-600">© 2025 Sistem Personal Training - PT Dirgantara Indonesia</p>
    </footer>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>