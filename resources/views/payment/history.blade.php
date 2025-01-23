<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Payment History</title>
   @vite('resources/css/app.css')
</head>
<body class="bg-white">
   <x-app-layout>
       <x-slot name="title">
           Payment History - PT Dirgantara Indonesia
       </x-slot>

       <main class="container mx-auto px-8 py-12">
           <h1 class="text-3xl font-bold mb-8">Payment History</h1>
           
           <div class="bg-white rounded-lg shadow overflow-hidden">
               <table class="min-w-full divide-y divide-gray-200">
                   <thead class="bg-gray-50">
                       <tr>
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Training
                           </th>
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Amount
                           </th>
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Status
                           </th>
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Date
                           </th>
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Action
                           </th>
                       </tr>
                   </thead>
                   <tbody class="bg-white divide-y divide-gray-200">
                       @forelse($payments as $payment)
                           <tr>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <div class="text-sm font-medium text-gray-900">
                                       {{ $payment->katalog->judul }}
                                   </div>
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <div class="text-sm text-gray-900">
                                       Rp {{ number_format($payment->amount, 2) }}
                                   </div>
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                       {{ $payment->status === 'approved' ? 'bg-green-100 text-green-800' : 
                                          ($payment->status === 'rejected' ? 'bg-red-100 text-red-800' : 
                                          'bg-yellow-100 text-yellow-800') }}">
                                       {{ ucfirst($payment->status) }}
                                   </span>
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                   {{ $payment->created_at->format('d M Y, H:i') }}
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
    <a href="{{ route('certificate.claim', $payment->id) }}" 
       class="flex items-center gap-2 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
        </svg>
        Download Certificate
    </a>
</td>
                           </tr>
                       @empty
                           <tr>
                               <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                   No payment history found
                               </td>
                           </tr>
                       @endforelse
                   </tbody>
               </table>
           </div>
       </main>
   </x-app-layout>
</body>
</html>