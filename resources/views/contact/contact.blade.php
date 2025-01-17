<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-[Poppins]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - PT Dirgantara Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white font-[Poppins]">
    <x-app-layout>
        <x-slot name="title">
            Home - PT Dirgantara Indonesia
        </x-slot>

        <div class="relative h-[400px] bg-black font-[Poppins]">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Aircraft" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
                <h1 class="text-5xl font-bold mb-6">Contact Us</h1>
                <p class="max-w-3xl text-center px-4">
                    Thank you for visiting our site! If you have any questions about aerospace training services, would like a consultation, or require further information, please do not hesitate to contact us. Our team is ready to help you achieve your career goals and personal development in the world of aerospace.
                </p>
            </div>
        </div>

    </x-app-layout>
</body>
</html>