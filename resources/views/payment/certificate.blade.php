<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificate</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Payment - PT Dirgantara Indonesia
        </x-slot>

        <main class="container mx-auto px-8 py-12">
            <h1 class="text-3xl font-bold text-center mb-12">Here's Your Certificate</h1>
            
            <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm p-8">
                <!-- Certificate Preview -->
                <div class="mb-8">
                    <img src="/path/to/certificate/template.jpg" alt="Certificate Preview" class="w-full rounded-lg">
                </div>

                <!-- Download Button -->
                <div class="flex justify-center">
                    <a href="{{ route('certificate.download', $payment->id) }}" 
                    class="inline-flex items-center gap-2 bg-white text-gray-700 border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
        </main>
    </x-app-layout> 
</body>
</html>