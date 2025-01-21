<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Dirgantara Indonesia</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Home - PT Dirgantara Indonesia
        </x-slot>

            <!-- Main Content -->
            <main class="container mx-auto px-8 mt-8 flex justify-between items-start">
                <div class="w-[45%]">
                    <div class="inline-block px-4 py-2 rounded-full border border-gray-800 shadow-sm mb-4">
                        Welcome to
                    </div>
                    <h1 class="text-[3.5rem] leading-tight font-bold mb-6">
                        Expert training by<br>
                        PT Dirgantara Indonesia
                    </h1>
                    <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                    Transform to actively contribute to human resource development and skills improvement through integrated education and training programs.
                    Therefore, the IAe Training Center can be accessed by anyone who needs it because it integrates specialized knowledge in the aerospace field with facilities to support the learning process.</p>
                    <a href="{{ route('catalog') }}" 
                    class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-full relative overflow-hidden group transition-all duration-300 ease-out hover:shadow-lg">
                        <span class="relative z-10 transition-transform duration-300 group-hover:translate-x-1">
                            See the catalog
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 ml-2 relative z-10 transition-all duration-300 group-hover:translate-x-2" 
                            viewBox="0 0 20 20" 
                            fill="currentColor">
                            <path fill-rule="evenodd" 
                                d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-5.293-5.293a1 1 0 011.414-1.414l6 6z" 
                                clip-rule="evenodd" />
                        </svg>
                        <div class="absolute inset-0 w-full h-full bg-blue-600 transform scale-x-0 origin-left group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <p class="text-gray-800 mt-8 mb-10 text-lg leading-relaxed">
                        <a href="https://www.indonesian-aerospace.com/en/" class="text-black-500  block underline">https://www.indonesian-aerospace.com/en/</a>
                    </p>
                </div>
                <div class="w-[50%] space-y-6">
                    <div class="rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/gambar4.png') }}" alt="Aircraft 1" class="w-full h-[300px] object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/gambar5.png') }}" alt="Aircraft 2" class="w-full h-[300px] object-cover">
                    </div>
                </div>
            </main>
        </div>

        <!-- Personal Training Section -->
        <section class="bg-[#FAFBFF] py-20 font-['Poppins']">
            <div class="container mx-auto px-8">
                <!-- Heading -->
                <!-- Heading Section -->
        <div class="max-w-6xl mx-auto text-center font-poppins">
                <h2 class="text-3xl mb-4 leading-normal">
                    <div class="font-bold">
                        <span class="text-blue-900">"This is </span>
                        <span>Personal Training</span>
                        <span>, </span>
                        <span class="text-[#3446AC]">where talent meets growth. </span>
                    </div>
                    <div>
                        <span class="font-normal">Our dedicated trainers deliver impactful corporate </span>
                        <span class="font-bold text-[#3446AC]">learning solutions"</span>
                    </div>
                </h2>
            <p class="text-gray-400 mb-12 leading-7">
                We provide personal training which aims to ensure that employees who have<br>
                carried out this training have better output, and also get certificates
            </p>
        </div>
                    <!-- Features -->
                    <div class="flex justify-center items-center gap-6 mb-24">
                        <div class="px-8 py-4 border-2 border-[#3446AC] rounded-full">
                            <p class="text-[#3446AC] font-medium leading-snug">
                                IndustryHigh-Quality Training<br>Programs with Integrated Skills
                            </p>
                        </div>
                        <div class="px-8 py-4 border-2 border-[#3446AC] rounded-full">
                            <p class="text-[#3446AC] font-medium leading-snug">
                            Inclusive & Effective<br>Learning Environment
                            </p>
                        </div>
                        <div class="px-8 py-4 border-2 border-[#3446AC] rounded-full">
                            <p class="text-[#3446AC] font-medium leading-snug">
                            Continuous Improvement<br>& Evaluation
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- Statistics -->
                    <div class="grid grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <!-- Experiences -->
                        <div class="text-center px-4">
                            <h4 class="text-gray-800 font-medium text-lg mb-3">Experiences</h4>
                            <h3 class="text-[#3B4EDB] text-5xl font-bold mb-4">11+</h3>
                            <p class="text-gray-800 leading-relaxed">
                                PT Dirgantara Indonesia with<br>
                                more than 11 years personal<br>
                                training
                            </p>
                        </div>

                        <!-- Total clients -->
                        <div class="text-center px-4 border-x-2 border-blue-600">
                            <h4 class="text-gray-800 font-medium text-lg mb-3">Total clients</h4>
                            <h3 class="text-[#3B4EDB] text-5xl font-bold mb-4">250+</h3>
                            <p class="text-gray-800 leading-relaxed">
                                PT Dirgantara Indonesia has<br>
                                collaborated with more than 250<br>
                                other companies
                            </p>
                        </div>

                        <!-- Testimonials -->
                        <div class="text-center px-4">
                            <h4 class="text-gray-800 font-medium text-lg mb-3">Testimonials</h4>
                            <h3 class="text-[#3B4EDB] text-5xl font-bold mb-4">200+</h3>
                            <p class="text-gray-800 leading-relaxed">
                                Personal training's PT Dirgantara<br>
                                Indonesia, successfully produces<br>
                                professional output
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!<!-- Catalog Training Section -->
        <section class="container mx-auto px-8 mt-20">
            <!-- Catalog Header -->
            <div class="text-center">
                <h2 class="text-[#3446AC] text-4xl font-bold mb-4">Our Catalog Training</h2>
                <p class="text-gray-600 mb-12">
                    Ready to Soar Higher? Browse our specialized training programs and<br>
                    unlock your potential with an official PT Dirgantara Indonesia certification.
                </p>
            </div>

        <!-- Training Cards Slider -->
        <div class="relative mb-32">
            <div class="overflow-x-auto hide-scrollbar">
                <div class="flex gap-6 pb-4">
                    @forelse($katalogs as $katalog)
                    <div class="flex-none bg-[#001E42] rounded-2xl overflow-hidden w-[380px]">
                        <img src="{{ $katalog->gambar }}" alt="{{ $katalog->judul }}" class="w-full h-[220px] object-cover">
                        <div class="p-6 h-[200px] flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-white text-2xl">{{ $katalog->judul }}</h3>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-gray-400">{{ \Carbon\Carbon::parse($katalog->tanggal_mulai)->format('F d, Y') }}</p>
                                    <p class="text-gray-400">{{ $katalog->lokasi }}</p>
                                </div>
                                <a href="{{ route('catalog.detail', $katalog->slug) }}" 
                                    class="px-4 py-1 rounded-full border border-white text-white hover:bg-white hover:text-[#10162C] transition-all duration-300 flex items-center space-x-1 group">
                                     <span>See</span>
                                     <span class="transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center w-full py-8">
                        <p class="text-gray-500">No training courses available at the moment.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

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
                <h2 class="text-[#3446AC] text-4xl font-bold mb-24">Ready to Begin? Here's Your Training Roadmap</h2>
                
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

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!DOCTYPE html>
        <html>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        </head>

        <!-- resources/views/components/testimonials.blade.php -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Testimonials</title>
            <!-- Poppins Font -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <!-- Tailwind CSS -->
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                }
                .testimonial-card {
                    transition: all 0.3s ease;
                }
                .testimonial-card:hover {
                    transform: translateY(-5px);
                }
                .avatar {
                    width: 48px;
                    height: 48px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 600;
                    font-size: 1.25rem;
                    color: white;
                }
            </style>
        </head>
        <body class="bg-gray-100 p-8">

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white rounded-3xl p-6 shadow-sm border-2 border-[#929CD7]">
                    <div class="flex gap-4 mb-4">
                        <div class="avatar" style="background-color: #0D9488;">
                            M
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Mutiara Sabrina</h3>
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-500">15 Okt 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs">The Aircraft Systems Training exceeded my expectations. The hands-on experience with actual aircraft components was invaluable. Instructors are true industry experts!</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white rounded-3xl p-6 shadow-sm border-2 border-[#929CD7]">
                    <div class="flex gap-4 mb-4">
                        <div class="avatar" style="background-color: #84B442;">
                            R
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Rasyania Sherryl</h3>
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-500">28 Sept 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs">Quality Ground training was very thorough and practical. The qualification process is well-structured and professional. Really appreciate the real-world case studies.</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white rounded-3xl p-6 shadow-sm border-2 border-[#929CD7]">
                    <div class="flex gap-4 mb-4">
                        <div class="avatar" style="background-color: #6D28D9;">
                            S
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Sarah Maysara</h3>
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-500">03 Des 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs">Excellent training on Aircraft Maintenance Planning. The practical sessions were comprehensive and the facilities are state-of-the-art. Highly recommended for aviation professionals.</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card bg-white rounded-3xl p-6 shadow-sm border-2 border-[#929CD7]">
                    <div class="flex gap-4 mb-4">
                        <div class="avatar" style="background-color: #0EA5E9;">
                            D
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">David Wijaya</h3>
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm text-gray-500">28 Nov 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs">The CAD/CAM in Aerospace program was exactly what I needed. Great balance of theory and practical application. The instructors shared many valuable insights.</p>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

