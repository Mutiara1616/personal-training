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
                            <label class="block mb-2 text-gray-700">Full Name of Participants</label>
                            <input type="text" name="full_name" placeholder="Enter your full name" class="w-full px-4 py-3 rounded-lg border border-gray-300">
                        </div>

                        <script>
                            document.querySelector('input[name="full_name"]').addEventListener('keypress', function(e) {
                                if (e.key === 'Enter') {
                                    e.preventDefault();
                                    
                                    const name = this.value.trim();
                                    if (!name) return;
                            
                                    // Find first empty row
                                    const rows = document.querySelectorAll('tbody tr');
                                    for (let row of rows) {
                                        const input = row.querySelector('input');
                                        if (!input.value) {
                                            input.value = name;
                                            this.value = ''; // Clear input
                                            break;
                                        }
                                    }
                                }
                            });
                        </script>

                        <div>
                            <label class="block mb-2 text-gray-700">Name of Training</label>
                            <input type="text" value="{{ $payment->katalog->judul }}" class="w-full px-4 py-3 rounded-lg bg-gray-100" readonly>
                        </div>
                        
                        <div>
                            <label class="block mb-2 text-gray-700">Date of Training</label>
                            <input type="text" value="{{ $payment->katalog->tanggal_mulai->format('d F Y') }}" class="w-full px-4 py-3 rounded-lg bg-gray-100" readonly>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full border">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 text-left border">No</th>
                                        <th class="px-4 py-2 text-left border">Participants Name</th>
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