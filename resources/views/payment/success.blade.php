<!-- resources/views/payment/success.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Payment Success - PT Dirgantara Indonesia
        </x-slot>
        <main class="container mx-auto px-8 py-12">
            <div class="max-w-lg mx-auto text-center">
                <!-- Success Icon with Decorative Elements -->
                <div class="mb-8 relative">
                    <!-- Main Circle with Checkmark -->
                    <div class="relative mx-auto h-24 w-24">
                        <div class="absolute inset-0 bg-[#3446AC] rounded-full flex items-center justify-center">
                            <svg class="h-12 w-12 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <!-- Decorative Elements -->
                        <div class="absolute -inset-8">
                            <!-- Small Circles -->
                            <div class="absolute top-0 left-1/2 h-3 w-3 bg-purple-400 rounded-full"></div>
                            <div class="absolute top-1/4 right-0 h-2 w-2 bg-yellow-300 rounded-full"></div>
                            <div class="absolute bottom-1/4 left-0 h-2 w-2 bg-blue-300 rounded-full"></div>
                            <div class="absolute bottom-0 right-1/4 h-2 w-2 bg-green-300 rounded-full"></div>
                            <!-- Curved Lines -->
                            <div class="absolute top-1/4 left-1/4 h-6 w-1.5 bg-pink-400 rounded-full" style="transform: rotate(45deg)"></div>
                            <div class="absolute top-3/4 right-1/4 h-6 w-1.5 bg-blue-300 rounded-full" style="transform: rotate(-45deg)"></div>
                            <div class="absolute bottom-1/4 right-1/2 h-6 w-1.5 bg-yellow-300 rounded-full" style="transform: rotate(30deg)"></div>
                        </div>
                    </div>
                </div>
                <!-- Success Message -->
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Successfully Submitted!</h1>
                <p class="text-gray-600 mb-8">
                    Thank you for your payment. We have received your payment submission and it is currently under review.
                    You will receive an email confirmation once your payment has been verified.
                </p>
                <!-- Payment Approval Details -->
                <div class="bg-[#FAFBFF] p-6 rounded-md text-left mb-8 font-poppins">
                    <h2 class="text-lg font-bold mb-2">Payment Approved</h2>
                    <p class="font-normal">Dear Mutiara Sabrina,</p>
                    <p class="font-normal">Your payment for the latest and most engaging training program has been approved.</p>
                    <p class="font-bold">Amount: Rp 29.900.000,00</p>
                    <p class="font-normal">Thank you for your purchase! We greatly appreciate your support and trust in our services.</p>
                    <p class="font-normal">Best regards,<br>Personal-Training</p>
                </div>
                <!-- Navigation Buttons -->
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('catalog') }}"
                        class="inline-flex items-center px-6 py-3 border border-transparent rounded-full text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 font-poppins">
                        Back to Catalog
                    </a>
                </div>
            </div>
        </main>
    </x-app-layout>
</body>
</html>