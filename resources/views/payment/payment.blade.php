<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <x-app-layout>
       

        <!-- Payment Form -->
        <main class="container mx-auto px-4 py-8">
            <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-sm p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Left Column - Payment Details -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold">Payment Details</h2>
                        <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="katalog_id" value="{{ $katalog->id }}">
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Full Name</label>
                                    <input type="text" name="name" placeholder="Enter your name" required 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium mb-1">Email</label>
                                    <input type="email" name="email" placeholder="Enter your email address" required 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                                    <input type="tel" name="phone" placeholder="Enter your phone number" required 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium mb-1">Number of Participants</label>
                                    <input type="number" name="participants" id="participants" placeholder="Enter number of participants" required 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium mb-1">Training Package</label>
                                    <input type="text" name="package" value="{{ $katalog->judul }}" readonly 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium mb-1">Training Date</label>
                                    <input type="date" name="training_date" value="{{ $katalog->tanggal_mulai }}" readonly 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50">
                                </div>
                            </div>
                        </form>
                    </div>

                      <!-- Right Column - Payment Methods & Summary -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold">Payment Methods</h2>
                        
                        <!-- Payment Method Selection -->
                        <div class="space-y-2">
                            <label class="block text-lg font-medium">Debit Card</label>
                            <div class="relative">
                                <div class="rounded-lg border border-gray-200" id="payment-dropdown">
                                    <!-- Dropdown Header -->
                                    <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50" id="dropdown-header">
                                        <!-- Default Visa Display -->
                                        <div class="flex items-center gap-2" id="visa-display">
                                            <img src="{{ asset('images/visa.png') }}" alt="Visa" class="h-5 w-auto">
                                            <span class="text-lg">Debit Card</span>
                                        </div>
                                        <!-- BSI Display (Initially Hidden) -->
                                        <div class="flex items-center gap-2 hidden" id="bsi-display">
                                            <span class="text-[#0066FF] font-semibold">BSI</span>
                                            <span class="text-gray-600">- 3974**********8472</span>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-200" id="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- BSI Account Info (Dropdown Content) -->
                                <div class="hidden absolute w-full mt-1 bg-gray-50 rounded-lg border border-gray-200 p-4 z-10" id="bsi-info">
                                    <div class="flex items-center gap-2 cursor-pointer" onclick="selectBSI()">
                                        <span class="text-[#0066FF] font-semibold">BSI</span>
                                        <span class="text-gray-600">- 3974**********8472</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const dropdownHeader = document.getElementById('dropdown-header');
                                const bsiInfo = document.getElementById('bsi-info');
                                const dropdownArrow = document.getElementById('dropdown-arrow');
                                const visaDisplay = document.getElementById('visa-display');
                                const bsiDisplay = document.getElementById('bsi-display');
                                let isOpen = false;
                                let isBSISelected = false;

                                window.selectBSI = function() {
                                    visaDisplay.classList.add('hidden');
                                    bsiDisplay.classList.remove('hidden');
                                    bsiInfo.classList.add('hidden');
                                    dropdownArrow.classList.remove('rotate-180');
                                    isBSISelected = true;
                                    isOpen = false;
                                }

                                dropdownHeader.addEventListener('click', function() {
                                    if (!isBSISelected) {
                                        isOpen = !isOpen;
                                        if (isOpen) {
                                            bsiInfo.classList.remove('hidden');
                                            dropdownArrow.classList.add('rotate-180');
                                        } else {
                                            bsiInfo.classList.add('hidden');
                                            dropdownArrow.classList.remove('rotate-180');
                                        }
                                    }
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', function(event) {
                                    if (!event.target.closest('#payment-dropdown') && !event.target.closest('#bsi-info')) {
                                        bsiInfo.classList.add('hidden');
                                        dropdownArrow.classList.remove('rotate-180');
                                        isOpen = false;
                                    }
                                });
                            });
                        </script>
                        <!-- Order Summary -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Order Summary</h2>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Balance Amount:</span>
                                    <span class="font-medium">Rp. 29.000.000,00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Tax (10%):</span>
                                    <span class="font-medium">Rp. 2.900.000,00</span>
                                </div>
                                <div class="flex justify-between pt-3 border-t">
                                    <div>
                                        <span class="font-medium">Total:</span>
                                        <span class="text-gray-500 text-sm">(Inc. Tax)</span>
                                    </div>
                                    <span class="text-xl font-bold">Rp. 29.900.000,00</span>
                                </div>
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Proof of Transfer Payment (250 Kb)</p>
                            <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                <div class="flex-1">
                                    <input type="file" name="bukti_transfer" required
                                           class="block w-full text-sm text-gray-500 px-3 py-2
                                                  file:mr-4 file:py-2 file:px-4
                                                  file:rounded-full file:border-0
                                                  file:text-sm file:font-medium
                                                  file:bg-gray-100 file:text-gray-700
                                                  hover:file:bg-gray-200">
                                </div>
                            </div>
                        </div>

                        <!-- Payment Button -->
                        <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-full hover:bg-blue-700 font-medium">
                            Payment
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <script>
            // Calculate total amount based on number of participants
            document.getElementById('participants').addEventListener('change', function() {
                const basePrice = {{ $katalog->harga }};
                const participants = this.value;
                const totalAmount = basePrice * participants;
                const tax = totalAmount * 0.1;
                const finalAmount = totalAmount + tax;
                
                // Update display amounts
                document.getElementById('balance-amount').textContent = 'Rp. ' + totalAmount.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
                document.getElementById('tax-amount').textContent = 'Rp. ' + tax.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
                document.getElementById('total-amount').textContent = 'Rp. ' + finalAmount.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            });
        </script>
    </x-app-layout>
</body>
</html>