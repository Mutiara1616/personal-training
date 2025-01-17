<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Katalog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="container mx-auto px-8 py-6 flex justify-between items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
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

    <!-- Detail Content -->
    <main class="container mx-auto px-8 py-12">
            <!-- Image Header -->
            <div class="rounded-2xl overflow-hidden mb-8">
                <img src="{{ asset('images/gambar1.jpg') }}" alt="Aircraft Structure Design" class="w-full h-[400px] object-cover">
            </div>

            <!-- Rating Stars -->
            <div class="flex mb-4">
                <span class="text-yellow-400">★★★★★</span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-bold mb-4">Aircraft Structure Design</h1>

            <!-- Date and Location -->
            <div class="text-gray-600 mb-6">
                <p class="mb-2">Date: 2, 3, 4, 5, 6, 7 Maret 2025</p>
                <p>Location: Jalan Pajajaran, Husen Sastranegara, No.154, Kec. Cicendo, Kota Bandung, Jawa Barat 40174</p>
            </div>

            <!-- Description -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Description</h2>
                <p class="text-gray-700">Training programs for Aircraft Structure Design are comprehensive learning initiatives crafted to equip aspiring engineers and professionals with the critical skills and in-depth knowledge required to make significant contributions to the aerospace industry. These programs aim to bridge the gap between theoretical understanding and practical application, preparing individuals to address the complex challenges in designing and analyzing aircraft structures. From foundational principles to specialized methodologies, these training opportunities cater to diverse proficiency levels, ranging from beginners to seasoned professionals seeking advanced certifications. Such programs are tailored to align with current industry demands and technological advancements. They encompass a wide range of topics, including the fundamental principles of aerodynamics, material science, and structural mechanics, as well as cutting-edge areas like composite material application, Finite Element Analysis (FEA), and crashworthiness. Participants are also introduced to real-world tools and software such as CATIA, Siemens NX, and ANSYS, which are widely used in aircraft design and analysis. One of the key features of these training programs is their modular structure, allowing learners to progressively build their expertise. Foundational courses provide a solid grounding in the basics of aircraft structures, including load distribution, weight optimization, and safety considerations. Intermediate modules delve into the application of these principles using computational tools, while advanced courses explore specialized areas such as fatigue analysis, fracture mechanics, and structural testing.</p>
            </div>

            <!-- Price -->
            <div class="flex items-center justify-between bg-gray-50 p-6 rounded-xl">
                <div>
                    <p class="text-3xl font-bold">Rp 1.791,78</p>
                    <p class="text-gray-500">/Person</p>
                </div>
                
                <!-- Action Buttons -->
                <div class="space-x-4">
                    <button class="px-8 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800">
                        Start The Negotiation
                    </button>
                    <a href="{{ route('payment') }}" class="px-8 py-3 border border-blue-900 text-blue-900 rounded-full hover:bg-blue-50">
                        Payment
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>