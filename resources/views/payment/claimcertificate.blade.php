<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Claim Certificate</title>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   @vite('resources/css/app.css')
   <style>
       body {
           font-family: 'Poppins', sans-serif;
       }
   </style>
</head>
<body class="bg-gray-50">
    <x-app-layout>
        <x-slot name="title">
            Payment - PT Dirgantara Indonesia
        </x-slot>

        <main class="container mx-auto px-8 py-12">
            <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h1 class="text-2xl font-semibold text-center mb-8">Claim Your Certificate</h1>
                
                <form action="{{ route('certificate.process-claim', $payment->id) }}" method="POST">
                    @csrf
                    <div class="space-y-6">
                    <div>
                            <label class="block mb-2 text-gray-700">Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your full name" class="w-full px-4 py-2 rounded-lg border border-gray-300">
                        </div>

                        <div>
                            <label class="block mb-2 text-gray-700">Name of Training</label>
                            <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-100" readonly>
                        </div>

                        <div>
                            <label class="block mb-2 text-gray-700">Date of Training</label>
                            <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-100" readonly>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full border">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 text-left border">No</th>
                                        <th class="px-4 py-2 text-left border">Full Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @for ($i = 0; $i < 10; $i++)
                                        <tr>
                                            <td class="px-4 py-2 border">{{ $i + 1 }}</td>
                                            <td class="px-4 py-2 border">
                                                <input type="text" name="participants[]">
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-medium">Submit</button>
            </div>
                    </div>
                </form>
            </div>
        </main>
    </x-app-layout>  
</body>
</html>