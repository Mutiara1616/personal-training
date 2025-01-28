<div class="fixed top-0 left-0 right-0 w-full bg-white/100 shadow-sm z-50">
    <nav class="container mx-auto px-8 py-2 flex justify-between items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20">
        </div>
        <div class="flex space-x-8">
            <a href="/" class="{{ request()->is('/') ? 'text-blue-900 font-medium border-b-2 border-blue-900' : 'text-gray-400' }}">Home</a>
            <a href="{{ route('catalog') }}" class="{{ request()->routeIs('catalog*') ? 'text-blue-900 font-medium border-b-2 border-blue-900' : 'text-gray-400' }}">Catalog</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-900 font-medium border-b-2 border-blue-900' : 'text-gray-400' }}">Contact</a>
            @auth('member')
                <a href="{{ route('payment.history') }}" class="{{ request()->routeIs('payment.history') ? 'text-blue-900 font-medium border-b-2 border-blue-900' : 'text-gray-400' }}">Payment History</a>
            @endauth
        </div>
        <div>
            @auth('member')
                <div class="relative group">
                    <!-- Profile Button -->
                    <button class="flex items-center space-x-2 bg-white border-2 border-gray-200 rounded-full px-6 py-2.5 hover:border-blue-600 transition-all duration-300">
                        <span class="text-[#10162c] text-lg font-medium">
                            {{ auth('member')->user()->name }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg py-2 invisible opacity-0 translate-y-2 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0">
                        <!-- User Info -->
                        <div class="px-4 py-2 ">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex-shrink-0 flex items-center justify-center">
                                    <span class="text-lg text-white font-medium">
                                        {{ strtoupper(substr(auth('member')->user()->name, 0, 1)) }}
                                    </span>
                                </div>
                                <div class="flex flex-col min-w-0"> <!-- Tambahkan min-w-0 untuk mengaktifkan truncate -->
                                    <span class="text-sm font-medium text-gray-900 truncate">
                                        {{ auth('member')->user()->name }}
                                    </span>
                                    <span class="text-sm text-gray-500 truncate max-w-[250px]"> <!-- Tambahkan truncate dan max-width -->
                                        {{ auth('member')->user()->email }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Logout Button -->
                        <div class="px-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                    class="w-full text-left px-4 py-2 mt-2 text-md text-gray-900 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="flex items-center space-x-2 bg-white border-2 border-gray-100 rounded-full px-6 py-2 transition-all duration-300 hover:border-blue-600">
                    <span class="text-[#10162c] text-lg font-regular">Login</span>
                </a>
            @endauth
        </div>
    </nav>
</div>

<div class="mt-[116px]"></div>