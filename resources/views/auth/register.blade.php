<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
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
                    <h2 class="text-2xl font-medium text-center mb-6">Register Your Account</h2>

                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Namee</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="text" 
                                name="name" 
                                placeholder="Enter your name"
                                required
                            >
                        </div>

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Email</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="email" 
                                name="email" 
                                placeholder="Enter your email adress"
                                required
                            >
                        </div>

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="password" 
                                name="password" 
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                        <div>
                            <label class="text-gray-800 mb-1.5 block">Confirm Password</label>
                            <input 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-200" 
                                type="password" 
                                name="password_confirmation" 
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                        <div class="pt-4">
                            <button 
                                type="submit"
                                class="w-full bg-[#3B4EDB] hover:bg-blue-700 text-white py-2.5 rounded-lg"
                            >
                                Register
                            </button>
                        </div>

                        <div class="text-center text-sm mt-4">
                            <span class="text-gray-600">Already Have an Account? </span>
                            <a href="{{ route('login') }}" class="text-[#3B4EDB] hover:text-blue-700">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-guest-layout>