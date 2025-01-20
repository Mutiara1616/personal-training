<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                    <h2 class="text-2xl font-medium text-center mb-6">Login To Your Account</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="text-gray-800 mb-1.5 block text-sm">Email</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded border border-gray-200 bg-gray-50" 
                                type="email" 
                                name="email" 
                                placeholder="Enter your email adress"
                                required
                            >
                        </div>

                        <div class="mb-1">
                            <label class="text-gray-800 mb-1.5 block text-sm">Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded border border-gray-200 bg-gray-50" 
                                type="password" 
                                name="password" 
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                        <div class="mb-6">
                            <a href="{{ route('password.reset') }}" class="text-[#3B4EDB] hover:text-blue-700">Forgot Password?</a>
                        </div>

                        <button 
                            type="submit"
                            class="w-full bg-[#3B4EDB] text-white py-2.5 rounded-lg mb-4"
                        >
                            Sign In
                        </button>

                        <div class="text-center text-sm">
                            <span class="text-gray-600">Don't Have an Account? </span>
                            <a href="{{ route('register') }}" class="text-[#3B4EDB]">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>

            @if (session('success'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </body>
    </html>
</x-guest-layout>