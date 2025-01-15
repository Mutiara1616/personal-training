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
            <a href="#" class="text-gray-400">Contact</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="px-8 py-2 border border-blue-900 rounded-full text-blue-900 hover:bg-blue-50">Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-8 py-12">
        <!-- Hero Image -->
        <div class="rounded-2xl overflow-hidden mb-8">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Training Facility" class="w-full h-[400px] object-cover">
        </div>

        <!-- Rating Stars -->
        <div class="flex gap-1 mb-4">
            @for ($i = 0; $i < 5; $i++)
                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
            @endfor
        </div>

        <!-- Training Title -->
        <h1 class="text-3xl font-bold mb-4">Aircraft Structure Design</h1>

        <!-- Training Details -->
        <div class="space-y-2 mb-8 text-gray-600">
            <p><span class="font-medium text-gray-800">Date:</span> 2, 3, 4, 5, 6, 7 Maret 2025</p>
            <p><span class="font-medium text-gray-800">Location:</span> Jalan Pajajaran, Husen Sastranegara, No.154, Kec. Cicendo, Kota Bandung, Jawa Barat 40174</p>
        </div>

        <!-- Description Section -->
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Description</h2>
            <p class="text-gray-600 leading-relaxed">
                Training programs for Aircraft Structure Design are comprehensive learning initiatives crafted to equip aspiring engineers and professionals with the critical skills and in-depth knowledge required to make significant contributions to the aerospace industry. These programs aim to bridge the gap between theoretical understanding and practical application, preparing individuals to address the complex challenges in designing and analyzing aircraft structures. From foundational principles to specialized methodologies, these training opportunities cater to diverse proficiency levels, ranging from beginners to seasoned professionals seeking advanced certifications. Such programs are tailored to align with current industry demands and technological advancements. They encompass a wide range of topics, including the fundamental principles of aerodynamics, material science, and structural mechanics, as well as cutting-edge areas like composite material application, Finite Element Analysis (FEA), and crashworthiness. Participants are also introduced to real-world tools and software such as CATIA, Siemens NX, and ANSYS, which are widely used in aircraft design and analysis. One of the key features of these training programs is their modular structure, allowing learners to progressively build their expertise. Foundational courses provide a solid grounding in the basics of aircraft structures, including load distribution, weight optimization, and safety considerations. Intermediate modules delve into the application of these principles using computational tools, while advanced courses explore specialized areas such as fatigue analysis, fracture mechanics, and structural testing.
            </p>
        </div>

        <!-- Price and Action Buttons -->
        <div class="flex justify-between items-center">
            <div>
                <span class="text-3xl font-bold">$1,791.78</span>
                <span class="text-gray-500">/Person</span>
            </div>
            <div class="space-x-4">
                <button class="px-6 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800">
                    Start The Negotiation
                </button>
                <button class="px-6 py-3 border border-gray-300 rounded-full hover:bg-gray-50">
                    Payment
                </button>
            </div>
        </div>
    </main>
</body>
</html>