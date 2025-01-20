<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Home - PT Dirgantara Indonesia
        </x-slot>

        <!-- Payment Form -->
        <main class="container mx-auto px-8 py-12">
            <div class="max-w-6xl mx-auto bg-white rounded-[32px] border-2 border-blue-200 p-12">
                <div class="grid grid-cols-2 gap-12">
                    <!-- Left Column - Payment Details -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-8">Payment Details</h2>
                        <form method="POST" action="{{ route('payment.store') }}" class="space-y-6" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="katalog_id" value="{{ $katalog->id }}">
                            <div>
                                <label class="block mb-2">Full Name</label>
                                <input type="text" name="name" placeholder="Enter your name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block mb-2">Email</label>
                                <input type="email" name="email" placeholder="Enter your email address" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block mb-2">Phone Number</label>
                                <input type="tel" name="phone" placeholder="Enter your phone number" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block mb-2">Number of Participants</label>
                                <input type="number" name="participants" id="participants" placeholder="Enter number of participants" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block mb-2">Training Package</label>
                                <input type="text" name="package" value="{{ $katalog->judul }}" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50">
                            </div>
                            <div>
                                <label class="block mb-2">Training Date</label>
                                <input type="date" name="training_date" value="{{ $katalog->tanggal_mulai }}" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50">
                            </div>
                            <div>
                                <label class="block mb-2">Payment Proof</label>
                                <input type="file" name="bukti_transfer" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <input type="hidden" name="amount" id="total_amount" value="{{ $katalog->harga }}">
                            <input type="hidden" name="payment_method" id="payment_method" value="bank_transfer">

                            <!-- Payment Methods -->
                            <div>
                                <h2 class="text-2xl font-semibold mb-8">Payment Methods</h2>
                                <!-- Dropdown Container -->
                                <div class="relative mb-6">
                                    <!-- Payment method selection -->
                                    <select name="bank_name" class="w-full p-4 bg-white rounded-lg border-2 border-gray-200 appearance-none">
                                        <option value="bri">BRI - 3974**********8472</option>
                                        <option value="bca">BCA - 1234**********8765</option>
                                    </select>
                                </div>

                                <!-- Price Summary -->
                                <div class="flex justify-between items-center mb-6">
                                    <span>Due Today</span>
                                    <div class="text-right">
                                        <span class="text-3xl font-bold" id="display_amount">Rp {{ number_format($katalog->harga, 2) }}</span>
                                        <span class="text-gray-500">/Person</span>
                                    </div>
                                </div>

                                <!-- Payment Button -->
                                <button type="submit" class="w-full py-3 bg-[#3B4EDB] text-white rounded-full hover:bg-blue-700">
                                    Payment
                                </button>
                            </div>
                        </form>
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
                
                document.getElementById('total_amount').value = totalAmount;
                document.getElementById('display_amount').textContent = 'Rp ' + totalAmount.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            });
        </script>
    </x-app-layout>
</body>
</html>