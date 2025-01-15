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
            <a href="{{ route('contact') }}" class="text-gray-400">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
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
<section class="bg-[#FAFBFF] py-20">
    <div class="container mx-auto px-8 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl mb-4">
                <span class="text-blue-900 font-medium">"This is</span> Personal Training, <span class="text-[#3B4EDB]">where talent meets growth. Our</span>
                dedicated trainers deliver impactful corporate <span class="text-[#3B4EDB]">learning solutions"</span>
            </h2>
            <p class="text-gray-500 mb-12">
                We provide personal training which aims to ensure that employees who have
                carried out this training have better output, and also get certificates
            </p>
        </div>

        <!-- Features -->
        <div class="flex justify-center gap-4 mb-20">
            <div class="px-6 py-3 border border-[#3B4EDB] rounded-full text-[#3B4EDB]">
                Industry-Recognized<br>Certification
            </div>
            <div class="px-6 py-3 border border-[#3B4EDB] rounded-full text-[#3B4EDB]">
                Hands-on Experience<br>with Advanced Technology
            </div>
            <div class="px-6 py-3 border border-[#3B4EDB] rounded-full text-[#3B4EDB]">
                Expert-Led<br>Training Programs
            </div>
            <div class="px-6 py-3 border border-[#3B4EDB] rounded-full text-[#3B4EDB]">
                Comprehensive<br>Industry Knowledge
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div>
                <h4 class="text-gray-600 font-medium mb-2">Experiences</h4>
                <h3 class="text-[#3B4EDB] text-4xl font-bold mb-4">11+</h3>
                <p class="text-gray-600">PT Dirgantara Indonesia with more than 11 years personal training</p>
            </div>
            <div>
                <h4 class="text-gray-600 font-medium mb-2">Total clients</h4>
                <h3 class="text-[#3B4EDB] text-4xl font-bold mb-4">250+</h3>
                <p class="text-gray-600">PT Dirgantara Indonesia has collaborated with more than 250 other companies</p>
            </div>
            <div>
                <h4 class="text-gray-600 font-medium mb-2">Testimonials</h4>
                <h3 class="text-[#3B4EDB] text-4xl font-bold mb-4">200+</h3>
                <p class="text-gray-600">Personal training's PT Dirgantara Indonesia successfully produces professional output</p>
            </div>
        </div>
    </div>

       <!<!-- Catalog Training Section -->
<section class="container mx-auto px-8 mt-20">
    <!-- Catalog Header -->
    <div class="text-center">
        <h2 class="text-[#3B4EDB] text-4xl font-bold mb-4">Our Catalog Training</h2>
        <p class="text-gray-600 mb-12">
            Ready to Soar Higher? Browse our specialized training programs and<br>
            unlock your potential with an official PT Dirgantara Indonesia certification.
        </p>
    </div>

    <!-- Training Cards Slider -->
    <div class="relative mb-32">
        <div class="overflow-x-auto hide-scrollbar">
            <div class="flex gap-6 pb-4">
                <!-- Card 1 -->
                <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[422px] h-[511px]">
                    <img src="{{ asset('images/catalog1.png') }}" alt="Aircraft Structure" class="w-full h-[280px] object-cover">
                    <div class="p-8 text-left">
                        <h3 class="font-bold text-white text-2xl mb-3">Aircraft Structure</h3>
                        <p class="text-gray-400 text-base mb-3">January 28, 2025</p>
                        <p class="text-gray-400 text-base mb-6">Aircraft Lab</p>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 bg-white rounded-full text-base text-[#001E42]">
                            See <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16666 10H15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 4.16666L15.8333 10L10 15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[422px] h-[511px]">
                    <img src="{{ asset('images/catalog2.png') }}" alt="Aircraft Systems Engineering" class="w-full h-[280px] object-cover">
                    <div class="p-8 text-left">
                        <h3 class="font-bold text-white text-2xl mb-3">Aircraft Systems Engineering</h3>
                        <p class="text-gray-400 text-base mb-3">January 28, 2025</p>
                        <p class="text-gray-400 text-base mb-6">Aircraft Lab</p>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 bg-white rounded-full text-base text-[#001E42]">
                            See <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16666 10H15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 4.16666L15.8333 10L10 15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[422px] h-[511px]">
                    <img src="{{ asset('images/catalog3.png') }}" alt="Manufacturing Process Optimization" class="w-full h-[280px] object-cover">
                    <div class="p-8 text-left">
                        <h3 class="font-bold text-white text-2xl mb-3">Manufacturing Process </h3>
                        <p class="text-gray-400 text-base mb-3">February 05, 2025</p>
                        <p class="text-gray-400 text-base mb-6">ManufacT Lab</p>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 bg-white rounded-full text-base text-[#001E42]">
                            See <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16666 10H15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 4.16666L15.8333 10L10 15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[422px] h-[511px]">
                    <img src="{{ asset('images/catalog4.png') }}" alt="Structural Repair Techniques" class="w-full h-[280px] object-cover">
                    <div class="p-8 text-left">
                        <h3 class="font-bold text-white text-2xl mb-3">Structural Repair Techniques</h3>
                        <p class="text-gray-400 text-base mb-3">Maret 10, 2025</p>
                        <p class="text-gray-400 text-base mb-6">HC3000 lt.1</p>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 bg-white rounded-full text-base text-[#001E42]">
                            See <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16666 10H15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 4.16666L15.8333 10L10 15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[422px] h-[511px]">
                    <img src="{{ asset('images/catalog5.png') }}" alt="Supply Chain Management" class="w-full h-[280px] object-cover">
                    <div class="p-8 text-left">
                        <h3 class="font-bold text-white text-2xl mb-3">Supply Chain Management</h3>
                        <p class="text-gray-400 text-base mb-3">Maret 24, 2025</p>
                        <p class="text-gray-400 text-base mb-6">Aircraft Lab</p>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 bg-white rounded-full text-base text-[#001E42]">
                            See <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16666 10H15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 4.16666L15.8333 10L10 15.8333" stroke="#001E42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hide-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
.hide-scrollbar::-webkit-scrollbar {
    display: none;  /* Chrome, Safari and Opera */
}
</style>
    
    <!-- Training Roadmap -->
    <div class="text-center mb-20">
        <h2 class="text-[#3B4EDB] text-4xl font-bold mb-12">Ready to Begin? Here's Your Training Roadmap</h2>
        
        <div class="flex justify-center items-center gap-8">
            <!-- Step 1 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/roadmap1.png') }}" alt="Choose training" class="w-full h-full">
                </div>
                <p class="text-sm font-medium">Choose your<br>training</p>
            </div>

            <!-- Connector -->
            <div class="w-16 h-0.5 bg-[#001E42]"></div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/roadmap2.png') }}" alt="Prize Negotiation" class="w-full h-full">
                </div>
                <p class="text-sm font-medium">Prize<br>Negotiation</p>
            </div>

            <!-- Connector -->
            <div class="w-16 h-0.5 bg-[#001E42]"></div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/roadmap3.png') }}" alt="Fill Form" class="w-full h-full">
                </div>
                <p class="text-sm font-medium">Fill out<br>the form</p>
            </div>

            <!-- Connector -->
            <div class="w-16 h-0.5 bg-[#001E42]"></div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/roadmap4.png') }}" alt="Payment" class="w-full h-full">
                </div>
                <p class="text-sm font-medium">Payment</p>
            </div>

            <!-- Connector -->
            <div class="w-16 h-0.5 bg-[#001E42]"></div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/roadmap5.png') }}" alt="Registration Complete" class="w-full h-full">
                </div>
                <p class="text-sm font-medium">Registration<br>Complete</p>
            </div>
        </div>
    </div>
</section>

        <!-- resources/views/components/footer.blade.php -->
<footer class="bg-white py-12">
    <div class="container mx-auto px-8">
        <div class="flex justify-between">
            <!-- Left Section -->
            <div class="max-w-xl">
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
                    <h2 class="font-bold text-xl">PT DIRGANTARA INDONESIA</h2>
                </div>
                <p class="text-gray-600 mb-8">
                    PT Dirgantara Indonesia (PTDI) is an Indonesian aircraft industry company engaged in the aerospace sector. PTDI produces various types of aircraft to meet the needs of civil airlines, military operators, and special missions.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="hover:opacity-80">
                        <img src="{{ asset('images/socialmedia.png') }}" alt="Facebook" class="h-5">
                    </a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="max-w-sm">
                <h3 class="font-bold text-lg mb-6">Our Contact</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/phone.png') }}" alt="Phone" class="h-5 mt-1">
                        <p>(0285) XXXXXX</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/envelope.png') }}" alt="Email" class="h-5 mt-1">
                        <div class="flex flex-col gap-1">
                            <a href="mailto:marketing-ptdi@indonesian-aerospace.com" class="text-[#3B4EDB] hover:underline">
                                marketing-ptdi@indonesian-aerospace.com
                            </a>
                            <a href="mailto:sekretariatptdi@indonesian-aerospace.com" class="text-[#3B4EDB] hover:underline">
                                sekretariatptdi@indonesian-aerospace.com
                            </a>
                            <a href="mailto:pub-rel@indonesian-aerospace.com" class="text-[#3B4EDB] hover:underline">
                                pub-rel@indonesian-aerospace.com
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/location.png') }}" alt="Location" class="h-5 mt-1">
                        <p>Jalan Pajajaran No. 154 Bandung 40174 West Java - Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Text -->
        <div class="mt-16 pt-8 border-t border-gray-200">
            <p class="text-gray-600 text-center">
                © 2025 Sistem Personal Training - PT Dirgantara Indonesia
            </p>
        </div>
        <!-- Company Description -->
        <div class="mt-4">
            <p class="text-gray-600 text-center">
                PT Dirgantara Indonesia - Leading Indonesia's Aerospace Excellence Since 1976. Your trusted partner in aviation training and certification
            </p>
        </div>
    </div>
</footer>