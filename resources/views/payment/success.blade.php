<!-- resources/views/payment/success.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Payment Success - PT Dirgantara Indonesia
        </x-slot>

        <main class="container mx-auto px-8 py-12">
            <div class="max-w-lg mx-auto text-center">
                <!-- Success Icon -->
                <div class="mb-8">
                    <svg class="mx-auto h-24 w-24 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>

                <!-- Success Message -->
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Successfully Submitted!</h1>
                <p class="text-gray-600 mb-8">
                    Thank you for your payment. We have received your payment submission and it is currently under review. 
                    You will receive an email confirmation once your payment has been verified.
                </p>

                <!-- Navigation Buttons -->
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('catalog') }}" 
                       class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-full text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Back to Catalog
                    </a>
                    <a href="{{ route('payment.history') }}" 
                       class="inline-flex items-center px-6 py-3 border border-transparent rounded-full text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        View Payment History
                    </a>
                </div>
            </div>
        </main>
    </x-app-layout>
</body>
</html>