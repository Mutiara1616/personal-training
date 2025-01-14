<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Dirgantara Indonesia</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="container mx-auto px-8 py-6 flex justify-between items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
        </div>
        <div class="flex space-x-8">
            <a href="#" class="text-blue-900 font-medium border-b-2 border-blue-900">Home</a>
            <a href="{{ route('catalog') }}" class="text-gray-400">Catalog</a>
            <a href="#" class="text-gray-400">Contact</a>
        </div>
        <div>
            <a href="/login" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-8 mt-20 flex justify-between items-start">
        <div class="w-[45%]">
            <div class="inline-block px-4 py-2 rounded-full border border-gray-200 shadow-sm mb-4">
                Welcome to
            </div>
            <h1 class="text-[3.5rem] leading-tight font-bold mb-6">
                Expert training by<br>
                PT Dirgantara Indonesia
            </h1>
            <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                PT Dirgantara Indonesia (PTDI) manufactures various aircraft for civilian, military, and special mission needs. PTDI has the capability to design new aircraft and modify aircraft systems and structures for specific missions like maritime patrol and surveillance.
            </p>
            <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800">
                See the catalog
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-5.293-5.293a1 1 0 011.414-1.414l6 6z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="w-[50%] space-y-6">
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/gambar3.jpg') }}" alt="Aircraft 1" class="w-full h-[300px] object-cover">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Aircraft 2" class="w-full h-[300px] object-cover">
            </div>
        </div>
    </main>

    <div class="container mx-auto px-8 mt-12">
        <a href="https://www.indonesian-aerospace.com/en/" class="text-gray-500 border-t border-gray-300 pt-4 block">https://www.indonesian-aerospace.com/en/</a>
    </div>

    <!-- Personal Training Section -->
    <section class="container mx-auto px-8 mt-20 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl mb-4">
                <span class="text-blue-900 font-medium">"This is</span> Personal Training, <span class="text-blue-600">where talent meets growth. Our</span>
                dedicated trainers deliver impactful corporate <span class="text-blue-600">learning solutions"</span>
            </h2>
            <p class="text-gray-500 mb-12">
                We provide personal training which aims to ensure that employees who have
                carried out this training have better output, and also get certificates
            </p>
        </div>

        <!-- Features -->
        <div class="flex justify-center gap-4 mb-20">
            <div class="px-4 py-2 border border-blue-900 rounded-full text-blue-900">
                Industry-Recognized<br>Certification
            </div>
            <div class="px-4 py-2 border border-blue-900 rounded-full text-blue-900">
                Hands-on Experience<br>with Advanced Technology
            </div>
            <div class="px-4 py-2 border border-blue-900 rounded-full text-blue-900">
                Expert-Led<br>Training Programs
            </div>
            <div class="px-4 py-2 border border-blue-900 rounded-full text-blue-900">
                Comprehensive<br>Industry Knowledge
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-3 gap-8 mb-20">
            <div>
                <h3 class="text-blue-900 text-4xl font-bold mb-2">11+</h3>
                <p class="text-gray-600">PT Dirgantara Indonesia with more than 11 years personal training</p>
            </div>
            <div>
                <h3 class="text-blue-900 text-4xl font-bold mb-2">250+</h3>
                <p class="text-gray-600">PT Dirgantara Indonesia has collaborated with more than 250 other companies</p>
            </div>
            <div>
                <h3 class="text-blue-900 text-4xl font-bold mb-2">200+</h3>
                <p class="text-gray-600">Personal training's PT Dirgantara Indonesia successfully produces professional output</p>
            </div>
        </div>

        <!-- Catalog Training -->
        <h2 class="text-3xl font-bold text-blue-900 mb-4">Our Catalog Training</h2>
        <p class="text-gray-600 mb-12">
            Ready to Soar Higher? Browse our specialized training programs and<br>
            unlock your potential with an official PT Dirgantara Indonesia certification.
        </p>

        <!-- Training Cards -->
        <div class="grid grid-cols-5 gap-4 mb-20">
            <div class="rounded-xl overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('images/catalog1.jpg') }}" alt="Aircraft Structure" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold mb-2">Aircraft Structure</h3>
                    <button class="px-4 py-1 bg-blue-900 text-white rounded-full text-sm">See →</button>
                </div>
            </div>
            <!-- Repeat similar card structure for other training programs -->
            <!-- Add 4 more cards with different images and titles -->
        </div>

        <!-- Training Roadmap -->
        <h2 class="text-3xl font-bold text-blue-900 mb-12">Ready to Begin? Here's Your Training Roadmap</h2>
        <div class="flex justify-between items-center max-w-4xl mx-auto mb-20">
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-900 rounded-full mx-auto mb-2 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Add appropriate SVG path -->
                    </svg>
                </div>
                <p class="text-sm">Choose your<br>training</p>
            </div>
            <!-- Add remaining steps with appropriate icons -->
        </div>

        <!-- Footer -->
        <footer class="bg-white py-12">
            <div class="container mx-auto px-8">
                <div class="flex justify-between items-start">
                    <div class="max-w-md">
                        <img src="{{ asset('images/logo.png') }}" alt="PTDI Logo" class="h-12 mb-4">
                        <p class="text-gray-600 mb-4">
                            PT Dirgantara Indonesia (PTDI) is an Indonesian aircraft industry company engaged in the aerospace sector. PTDI produces various types of aircraft to meet the needs of civil aviation, military operations, and special missions.
                        </p>
                        <!-- Social Media Icons -->
                    </div>
                    <div>
                        <h3 class="font-bold mb-4">Our Contact</h3>
                        <!-- Contact Information -->
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-200 text-center">
                    <p class="text-gray-600">© 2025 Sistem Personal Training - PT Dirgantara Indonesia</p>
                </div>
            </div>
        </footer>
    </section>

</body>
</html>