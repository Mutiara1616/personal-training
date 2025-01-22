<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="title">
            Feedback Form - PT Dirgantara Indonesia
        </x-slot>

        <main class="container mx-auto px-8 py-12">
            <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-8">
                <h1 class="text-2xl font-bold mb-6">Your Feedback</h1>

                <form action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Rating -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                        <div class="flex space-x-4">
                            @for($i = 1; $i <= 5; $i++)
                            <label class="flex items-center">
                                <input type="radio" name="rating" value="{{ $i }}" class="mr-2">
                                <span>{{ $i }} Star</span>
                            </label>
                            @endfor
                        </div>
                    </div>

                    <!-- Feedback Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Feedback Type</label>
                        <select name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="general">General Feedback</option>
                            <option value="training">Training Content</option>
                            <option value="instructor">Instructor</option>
                            <option value="facility">Facility</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                        <textarea name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-3 bg-[#25317C] text-white rounded-full hover:bg-blue-800 transition duration-300">
                        Submit Feedback
                    </button>
                </form>
            </div>
        </main>
    </x-app-layout>
</body>
</html>