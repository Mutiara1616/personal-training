<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
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

    <!-- Payment Form -->
    <main class="container mx-auto px-8 py-12">
        <div class="max-w-6xl mx-auto bg-white rounded-[32px] border-2 border-blue-200 p-12">
            <div class="grid grid-cols-2 gap-12">
                <!-- Left Column - Payment Details -->
                <div>
                    <h2 class="text-2xl font-semibold mb-8">Payment Details</h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block mb-2">Full Name</label>
                            <input type="text" placeholder="Enter your name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2">Email</label>
                            <input type="email" placeholder="Enter your email address" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2">Phone Number</label>
                            <input type="tel" placeholder="Enter your phone number" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2">Number of Participants</label>
                            <input type="number" placeholder="Enter number of participants" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2">Training Package</label>
                            <input type="text" placeholder="Enter name of training package" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2">Training Date</label>
                            <input type="date" placeholder="Select your training date" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                    </form>
                </div>

                <!-- Right Column - Payment Methods -->
                <div>
                    <h2 class="text-2xl font-semibold mb-16">Payment Methods</h2>
                    <!-- Dropdown Container -->
                    <div class="relative mb-6">
                        <!-- Dropdown Trigger Button -->
                        <button 
                            onclick="toggleDropdown()"
                            class="w-full flex items-center justify-between p-4 bg-white rounded-lg border-2 border-gray-200 hover:border-blue-500 transition-colors"
                        >
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-8 flex items-center"> 
                                    <img src="{{ asset('images/visa.png') }}" alt="Visa" class="h-6">
                                </div>
                                <span>Debit Card</span>
                            </div>
                            <svg 
                                id="dropdownIcon"
                                class="w-5 h-5 transition-transform duration-200" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <div 
                            id="dropdownContent"
                            class="absolute w-full mt-2 bg-white rounded-lg border border-gray-200 shadow-lg hidden"
                        >
                            <!-- BRI Option -->
                            <div class="flex items-center gap-3 p-4 hover:bg-gray-50 cursor-pointer">
                                <div class="w-16 h-8 flex items-center"> 
                                    <img src="{{ asset('images/bri.png') }}" alt="BRI" class="h-6">
                                </div>
                                <span>BRI - 3974**********8472</span>
                            </div>
                            
                            <!-- BCA Option -->
                            <div class="flex items-center gap-3 p-4 hover:bg-gray-50 cursor-pointer border-t">
                                <div class="w-16 h-8 flex items-center"> 
                                    <img src="{{ asset('images/bca.png') }}" alt="BCA" class="h-6">
                                </div>
                                <span>BCA - 1234**********8765</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        function toggleDropdown() {
                            const dropdownContent = document.getElementById('dropdownContent');
                            const dropdownIcon = document.getElementById('dropdownIcon');
                            
                            // Toggle dropdown visibility
                            dropdownContent.classList.toggle('hidden');
                            
                            // Rotate arrow icon
                            if (dropdownContent.classList.contains('hidden')) {
                                dropdownIcon.style.transform = 'rotate(0deg)';
                            } else {
                                dropdownIcon.style.transform = 'rotate(180deg)';
                            }
                        }
                    
                        // Close dropdown when clicking outside
                        window.addEventListener('click', function(e) {
                            const dropdown = document.getElementById('dropdownContent');
                            if (!e.target.closest('.relative') && !dropdown.classList.contains('hidden')) {
                                dropdown.classList.add('hidden');
                                document.getElementById('dropdownIcon').style.transform = 'rotate(0deg)';
                            }
                        });
                    </script>

                    <!-- Price Summary -->
                    <div class="flex justify-between items-center mb-6">
                        <span>Due Today</span>
                        <div class="text-right">
                            <span class="text-3xl font-bold">$1.791,78</span>
                            <span class="text-gray-500">/Person</span>
                        </div>
                    </div>

                    <!-- Payment Button -->
                    <button class="w-full py-3 bg-[#3B4EDB] text-white rounded-full hover:bg-blue-700">
                        Payment
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>