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

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-4">
                            <label class="block text-gray-800 mb-1">Email</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="email" 
                                name="email" 
                                value="{{ old('email', $request->email) }}"
                                placeholder="Enter your email adress"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-800 mb-1">New Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="password" 
                                name="password" 
                                placeholder="Enter your new password"
                                required
                            >
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-800 mb-1">Confirm Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="password" 
                                name="password_confirmation" 
                                placeholder="Confirm your new password"
                                required
                            >
                        </div>

                        <div class="flex justify-center">
                            <button 
                                type="submit"
                                class="bg-[#3B4EDB] text-white py-2.5 px-8 rounded-full"
                            >
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

        </div>
    </body>
    </html>
</x-guest-layout>