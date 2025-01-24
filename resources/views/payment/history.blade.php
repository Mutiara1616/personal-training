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
                           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Feedback
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
                                    @if($payment->status === 'approved')
                                        <a href="{{ route('certificate.claim', $payment->id) }}" class="inline-block w-48 text-center bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                            Claim Certificate
                                        </a>
                                    @else
                                        <button onclick="openCertModal()" class="inline-block w-48 text-center bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                            Claim Certificate
                                        </button>
                                    @endif
                                </td>

                                <!-- Modal for Certificate -->
                                <div id="certificateModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
                                    <div class="bg-white rounded-3xl p-4 max-w-sm w-full">
                                        <div class="text-center">
                                            <div class="w-20 h-20 mx-auto mb-6">
                                                <svg class="w-full h-full text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.59-13L12 10.59 8.41 7 7 8.41 10.59 12 7 15.59 8.41 17 12 13.41 15.59 17 17 15.59 13.41 12 17 8.41z"/>
                                                </svg>
                                            </div>
                                            <p class="text-xl mb-8">Certificate only available after payment is approved by admin.</p>
                                            <button onclick="closeCertModal()" class="border-2 border-[#3B4EDB] text-[#3B4EDB] px-8 py-3 rounded-full hover:bg-[#3B4EDB] hover:text-white transition-colors">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                function openCertModal() {
                                    const modal = document.getElementById('certificateModal');
                                    modal.classList.remove('hidden');
                                    modal.classList.add('flex');
                                    modal.querySelector('.bg-white').classList.add('modal-pop');
                                }

                                function closeCertModal() {
                                    const modal = document.getElementById('certificateModal');
                                    modal.classList.add('hidden');
                                    modal.classList.remove('flex'); 
                                    modal.querySelector('.bg-white').classList.remove('modal-pop');
                                }
                                </script>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($payment->status === 'approved')
                                        <a href="{{ route('feedback.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                            Give Feedback
                                        </a>
                                    @else
                                        <button onclick="openModal()" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                            Give Feedback
                                        </button>
                                    @endif
                                </td>

                                <!-- Pop Up -->
                                <div id="pendingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
                                    <div class="bg-white rounded-3xl p-4 max-w-sm w-full ">
                                        <div class="text-center">
                                            <div class="w-20 h-20 mx-auto mb-6">
                                                <svg class="w-full h-full text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.59-13L12 10.59 8.41 7 7 8.41 10.59 12 7 15.59 8.41 17 12 13.41 15.59 17 17 15.59 13.41 12 17 8.41z"/>
                                                </svg>
                                            </div>
                                            <p class="text-xl mb-8">You can only give feedback after your payment is approved by admin.</p>
                                            <button onclick="closeModal()" class=" border-2 border-[#3B4EDB] text-black px-8 py-3 rounded-full hover:bg-blue-700 hover:text-white transition-colors">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    @keyframes popIn {
                                    0% {
                                        transform: scale(0.3);
                                        opacity: 0;
                                    }
                                    50% {
                                        transform: scale(1.1);
                                    }
                                    70% {
                                        transform: scale(0.9);
                                    }
                                    100% {
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                    }

                                    .modal-pop {
                                    animation: popIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                                    }
                                    </style>
                                    
                                    <script>
                                    function openModal() {
                                        const modal = document.getElementById('pendingModal');
                                        modal.classList.remove('hidden');
                                        modal.classList.add('flex');
                                        modal.querySelector('.bg-white').classList.add('modal-pop');
                                    }

                                    function closeModal() {
                                        const modal = document.getElementById('pendingModal');
                                        modal.classList.add('hidden');
                                        modal.classList.remove('flex');
                                        modal.querySelector('.bg-white').classList.remove('modal-pop');
                                    }
                                </script>
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