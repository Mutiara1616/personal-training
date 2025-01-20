<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset Password</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background-color: black;
            }
            
            .fullscreen-container {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                overflow: hidden;
            }

            .bg-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: grayscale(100%);
            }
        </style>
    </head>
    <body class="h-full">
        <div class="fullscreen-container">
            <!-- Background Image -->
            <img src="{{ asset('images/image 6.png') }}" alt="Background" class="bg-image">
            
            <!-- Content -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white rounded-[32px] w-[420px] p-8">
                    <h2 class="text-2xl font-medium text-center mb-6">Reset Your Password</h2>

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Email</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200 @error('email') border-red-500 @enderror" 
                                type="email" 
                                name="email" 
                                placeholder="Enter your email adress"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="text-gray-800 mb-1.5 block">New Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200 @error('password') border-red-500 @enderror" 
                                type="password" 
                                name="password" 
                                placeholder="Enter your new password"
                                required
                            >
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Confirm Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="password" 
                                name="password_confirmation" 
                                placeholder="Confirm your new password"
                                required
                            >
                        </div>

                        <div class="pt-4">
                            <button 
                                type="submit"
                                class="w-full bg-[#3B4EDB] hover:bg-blue-700 text-white py-2.5 rounded-lg"
                            >
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-guest-layout>