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
                
                <form id="participantForm" action="{{ route('certificate.show', $payment->id) }}" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="block mb-2 text-gray-700">Name of Training</label>
                            <input type="text" value="{{ $payment->katalog->judul }}" class="w-full px-4 py-3 rounded-lg bg-gray-100" readonly>
                        </div>
                        
                        <div>
                            <label class="block mb-2 text-gray-700">Date of Training</label>
                            <input type="text" value="{{ $payment->katalog->tanggal_mulai->format('d F Y') }}" class="w-full px-4 py-3 rounded-lg bg-gray-100" readonly>
                        </div>
             
                        <!-- Input field for names -->
                        <div>
                            <label class="block mb-2 text-gray-700">Input Full Name of The Participants</label>
                            <div class="flex gap-2">
                                <input type="text" id="participantInput" placeholder="Enter participant name" class="flex-1 px-4 py-3 rounded-lg border border-gray-300">
                                <button type="button" id="addParticipant" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800">Add</button>
                            </div>
                        </div>
             
                        <!-- Participant table -->
                        <div class="overflow-x-auto">
                            <table class="w-full border">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 text-center border w-10">No</th>
                                        <th class="px-4 py-2 text-center border w-full">Participants Name</th>
                                        <th class="px-4 py-2 text-center border">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="participantsList">
                                </tbody>
                            </table>
                        </div>
                        
                        <div id="pagination" class="mt-4"></div>
                        
                        <input type="hidden" name="participants" id="participantsData">
                        <div class="text-center mt-6">
                            <button type="submit" onclick="handleSubmit(event)" class="px-6 py-2 border-2 border-blue-700 text-blue-700 rounded-3xl hover:bg-blue-700 hover:text-white">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
             
            <script>
                // Pagination constants
                const PARTICIPANTS_PER_PAGE = 10;
                let currentPage = 1;
                let participants = JSON.parse(localStorage.getItem('tempParticipants')) || [];
                
                // Add participant
                function addParticipant(name) {
                    participants.push(name);
                    localStorage.setItem('tempParticipants', JSON.stringify(participants));
    
                    const newPage = Math.ceil(participants.length / PARTICIPANTS_PER_PAGE);
                    if (newPage > currentPage) {
                        currentPage = newPage;
                    }
                    renderParticipants();
                }
                
                // Remove participant
                function removeParticipant(index) {
                    participants.splice(index, 1);
                    localStorage.setItem('tempParticipants', JSON.stringify(participants));
                    
                    const startIndex = (currentPage - 1) * PARTICIPANTS_PER_PAGE;
                    if (startIndex >= participants.length && currentPage > 1) {
                        currentPage--;
                    }
                    renderParticipants();
                }
                
                // Render pagination
                function renderPagination() {
                    const totalPages = Math.max(1, Math.ceil(participants.length / PARTICIPANTS_PER_PAGE));
                    const paginationHtml = `
                        <div class="flex justify-center gap-2">
                            ${Array.from({length: totalPages}, (_, i) => i + 1).map(page => `
                                <button onclick="changePage(${page})" 
                                    class="px-3 py-1 rounded ${currentPage === page ? 'bg-blue-600 text-white' : 'bg-gray-200'}">
                                    ${page}
                                </button>
                            `).join('')}
                        </div>
                    `;
                    document.getElementById('pagination').innerHTML = paginationHtml;
                }
                
                // Change page
                function changePage(page) {
                    currentPage = page;
                    renderParticipants();
                }
                
                // Render participants table
                function renderParticipants() {
                    const start = (currentPage - 1) * PARTICIPANTS_PER_PAGE;
                    const end = start + PARTICIPANTS_PER_PAGE;
                    const pageParticipants = participants.slice(start, end);
                    
                    participantsList.innerHTML = pageParticipants.map((name, index) => `
                        <tr>
                            <td class="px-4 py-2 border">${start + index + 1}</td>
                            <td class="px-4 py-2 border">${name}</td>
                            <td class="px-4 py-2 border">
                                <button onclick="removeParticipant(${start + index})" class="text-red-600 hover:text-red-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    `).join('');
                    
                    renderPagination();
                }
                
                // Event listeners
                document.getElementById('participantInput').addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const name = e.target.value.trim();
                        if (name) {
                            addParticipant(name);
                            e.target.value = '';
                        }
                    }
                });
                
                document.getElementById('addParticipant').addEventListener('click', () => {
                    const input = document.getElementById('participantInput');
                    const name = input.value.trim();
                    if (name) {
                        addParticipant(name);
                        input.value = '';
                    }
                });

                function handleSubmit(e) {
                    e.preventDefault();
                    document.getElementById('participantsData').value = JSON.stringify(participants);
                    localStorage.removeItem('tempParticipants');
                    document.getElementById('participantForm').submit();
                }   
                
                // Render participants saat halaman dimuat
                document.addEventListener('DOMContentLoaded', function() {
                    renderParticipants();
                });
            </script>
        </main>
    </x-app-layout>  
</body>
</html>