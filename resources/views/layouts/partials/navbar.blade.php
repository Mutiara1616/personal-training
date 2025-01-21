<nav class="container mx-auto px-8 py-6 flex justify-between items-center">
    <div>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
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
                <button class="flex items-center space-x-2 bg-white border-2 border-gray-100 rounded-full px-4 py-2 transition-all duration-300 hover:border-blue-600">
                    <span class="text-[#10162c] text-lg font-regular">
                        {{ ucfirst(strtolower(auth('member')->user()->name)) }}
                    </span>
                    <svg class="w-5 h-5 text-[#10162c] transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div class="absolute right-0 mt-2 w-72 bg-white rounded-2xl shadow-xl py-2 invisible opacity-0 translate-y-2 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0">
                    <!-- User info -->
                    <div class="px-4 py-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-xl text-white font-semibold">
                                    {{ substr(auth('member')->user()->name, 0, 1) }}
                                </span>
                            </div>
                            <div>
                                <p class="text-lg text-[#10162c]">{{ auth('member')->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Logout button -->
                    <div class="px-4 py-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                class="w-full text-left px-4 py-2 text-gray-600 rounded-xl hover:bg-gray-100 transition-colors">
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