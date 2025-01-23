{{-- success.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .success-icon {
            position: relative;
            width: 96px;
            height: 96px;
            background: #3446AC;
            border-radius: 50%;
            margin: 0 auto;
        }
        .decoration {
            position: absolute;
            inset: -2rem;
        }
        .dot {
            position: absolute;
            border-radius: 50%;
        }
        .line {
            position: absolute;
            border-radius: 999px;
        }
    </style>
</head>
<body class="bg-white">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex items-center justify-between">
                <img src="/path-to-your-logo.svg" alt="Logo" class="h-8">
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-gray-500">Home</a>
                    <a href="#" class="text-[#3446AC] border-b-2 border-[#3446AC]">Catalog</a>
                    <a href="#" class="text-gray-500">Contact</a>
                    <a href="#" class="px-8 py-2 rounded-full border border-[#3446AC] text-[#3446AC]">Login</a>
                </div>
            </div>
        </x-slot>

        <main class="container mx-auto max-w-4xl px-4 py-8">
            <div class="text-center mb-16">
                <div class="success-icon mb-6">
                    <div class="flex items-center justify-center h-full">
                        <svg class="h-12 w-12 text-white" viewBox="0 0 24 24" fill="none">
                            <path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="decoration">
                        <div class="dot bg-purple-400 h-3 w-3" style="top: 0; left: 50%"></div>
                        <div class="dot bg-yellow-300 h-2 w-2" style="top: 25%; right: 0"></div>
                        <div class="dot bg-blue-300 h-2 w-2" style="bottom: 25%; left: 0"></div>
                        <div class="dot bg-green-300 h-2 w-2" style="bottom: 0; right: 25%"></div>
                        <div class="line bg-pink-400 h-6 w-1.5" style="top: 25%; left: 25%; transform: rotate(45deg)"></div>
                        <div class="line bg-blue-300 h-6 w-1.5" style="top: 75%; right: 25%; transform: rotate(-45deg)"></div>
                        <div class="line bg-yellow-300 h-6 w-1.5" style="bottom: 25%; right: 50%; transform: rotate(30deg)"></div>
                    </div>
                </div>
                
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Successfully Submitted!</h1>
                <p class="text-gray-500 mb-4">The confirmation has been sent to {{ Auth::guard('member')->user()->email }}</p>

                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-8">
                    <div class="grid grid-cols-2 gap-y-6">
                        <div class="text-left text-gray-500">Full Name</div>
                        <div class="text-right">{{ session('payment_details.name') }}</div>
                        
                        <div class="text-left text-gray-500">Email</div>
                        <div class="text-right">{{ session('payment_details.email') }}</div>
                        
                        <div class="text-left text-gray-500">Phone Number</div>
                        <div class="text-right">{{ session('payment_details.phone') }}</div>
                        
                        <div class="text-left text-gray-500">Number of Participants</div>
                        <div class="text-right">{{ session('payment_details.participants') }}</div>
                        
                        <div class="text-left text-gray-500">Training Package</div>
                        <div class="text-right">{{ session('payment_details.training_package') }}</div>
                        
                        <div class="text-left text-gray-500">Training Date</div>
                        <div class="text-right">{{ session('payment_details.training_date') }}</div>

                        <div class="col-span-2 border-t w-full"></div>
                        
                        <div class="text-left text-gray-500">Balance Amount :</div>
                        <div class="text-right">Rp {{ number_format(session('payment_data.balance_amount', 0), 2, ',', '.') }}</div>
                        
                        <div class="text-left text-gray-500">Tax (10%):</div>
                        <div class="text-right">Rp {{ number_format(session('payment_data.tax_amount', 0), 2, ',', '.') }}</div>
                        <div class="col-span-2 border-t w-full"></div>
                        <div class="text-left text-gray-700 font-medium">Total :</div>
                        <div class="text-right">Rp {{ number_format(session('payment_data.total_amount', 0), 2, ',', '.') }}</div>
                    </div>
                </div>

                <div class="text-center mb-8">
                    <p class="text-gray-600 mb-4">
                        Thank you for your payment. We have received your payment submission and it is currently under review.
                        You will receive an email confirmation once your payment has been verified.
                    </p>
                </div>
    
                <!-- Navigation Buttons -->
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('catalog') }}" 
                       class="inline-flex items-center px-6 py-3 bg-[#25317C] text-white rounded-full hover:bg-blue-800 transition duration-300">
                        Back to Catalog
                    </a>
                    <a href="{{ route('feedback.create') }}" 
                       class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-full hover:bg-green-700 transition duration-300">
                        Give Feedback
                    </a>
                </div>
            </div>
        </main>
    </x-app-layout>
</body>
</html>