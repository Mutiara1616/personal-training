<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment - PT Dirgantara Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#FFFFFF]">
    <x-app-layout>
        <x-slot name="title">
            Payment - PT Dirgantara Indonesia
        </x-slot>

        <!-- Main Content -->
        <main class="container mx-auto px-8 py-12">
            <div class="max-w-6xl mx-auto bg-white rounded-[32px] border-2 border-blue-500 p-12">
                <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Left Column -->
                        <div class="space-y-6">
                            <h2 class="text-[#10162C] text-2xl font-bold mb-6">Payment Details</h2>
                            <input type="hidden" name="katalog_id" value="{{ $katalog->id }}">
                            
                            <div class="space-y-4">
                                <!-- Form fields dengan styling yang konsisten -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Full Name</label>
                                    <input type="text" name="name" value="{{ auth('member')->user()->name }}" required 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                                </div>
                                
                                <!-- Email field -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Email</label>
                                    <input type="email" name="email" value="{{ auth('member')->user()->email }}" required 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                                </div>
                                
                                <!-- Phone field -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Phone Number</label>
                                    <input type="tel" name="phone" required 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                                </div>
                                
                                <!-- Participants field -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Number of Participants</label>
                                    <input type="number" name="participants" id="participants" min="1" required 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                                </div>
                                
                                <!-- Training Package (readonly) -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Training Package</label>
                                    <input type="text" value="{{ $katalog->judul }}" readonly 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 bg-gray-50">
                                </div>
                                
                                <!-- Training Date (readonly) -->
                                <div>
                                    <label class="block text-[#10162C] text-sm font-medium mb-2">Training Date</label>
                                    <input type="date" value="{{ $katalog->tanggal_mulai }}" readonly 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 bg-gray-50">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-6">
                            <h2 class="text-[#10162C] text-2xl font-bold mb-6">Payment Methods</h2>
                            
                            <!-- Bank Selection -->
                            <div class="mb-6">
                                <label class="block text-[#10162C] text-sm font-medium mb-2">Bank Account</label>
                                <div class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 bg-white flex items-center space-x-3">
                                    <img src="{{ asset('images/bsi.png') }}" alt="BSI Logo" class="h-8 w-auto">
                                    <div class="flex-1">
                                        <p class="text-[#10162C] font-medium">BSI (Bank Syariah Indonesia)</p>
                                        <p class="text-gray-600 text-sm">3974**********8472</p>
                                    </div>
                                </div>
                                <input type="hidden" name="bank_name" value="BSI">
                            </div>

                            <!-- Order Summary -->
                            <div class="bg-gray-50 p-6 rounded-xl mb-6">
                                <h2 class="text-[#10162C] text-xl font-bold mb-4">Order Summary</h2>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Balance Amount:</span>
                                        <span class="font-medium text-[#10162C]" id="balance-amount">
                                            Rp {{ number_format($katalog->harga, 2) }}
                                        </span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Tax (10%):</span>
                                        <span class="font-medium text-[#10162C]" id="tax-amount">
                                            Rp {{ number_format($katalog->harga * 0.1, 2) }}
                                        </span>
                                    </div>
                                    <div class="flex justify-between pt-3 border-t border-gray-200">
                                        <span class="text-[#10162C] font-medium">Total Amount</span>
                                        <span class="text-xl font-bold text-[#10162C]" id="total-amount">
                                            Rp {{ number_format($katalog->harga * 1.1, 2) }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-8">
                                <label class="block text-[#10162C] text-sm font-medium mb-2">Proof of Transfer Payment</label>
                                <input type="file" name="bukti_transfer" required accept="image/*"
                                       class="w-full px-4 py-3 rounded-xl border-2 border-blue-100 focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                            </div>

                            <input type="hidden" name="amount" id="amount-input" value="{{ $katalog->harga * 1.1 }}">
                            
                            <!-- Payment Button -->
                            <button type="submit" id="paymentButton"
                                    class="w-full py-4 bg-[#10162C] text-white rounded-full hover:bg-blue-900 transition-all duration-300 flex items-center justify-center space-x-2">
                                <span>Payment</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <script>
            // Kalkulasi harga
            document.getElementById('participants').addEventListener('change', function() {
                const basePrice = {{ $katalog->harga }};
                const participants = this.value;
                const totalAmount = basePrice * participants;
                const tax = totalAmount * 0.1;
                const finalAmount = totalAmount + tax;
                
                document.getElementById('balance-amount').textContent = 'Rp ' + totalAmount.toLocaleString('id-ID', {minimumFractionDigits: 2});
                document.getElementById('tax-amount').textContent = 'Rp ' + tax.toLocaleString('id-ID', {minimumFractionDigits: 2});
                document.getElementById('total-amount').textContent = 'Rp ' + finalAmount.toLocaleString('id-ID', {minimumFractionDigits: 2});
                document.getElementById('amount-input').value = finalAmount;
            });

            document.querySelector('form').addEventListener('submit', function() {
                const button = document.getElementById('paymentButton');
                button.disabled = true;
                button.innerHTML = '<span>Processing...</span>';
            });

        </script>
    </x-app-layout>
</body>
</html>