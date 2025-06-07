<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">
    <!-- Navigation -->
    <nav class="bg-red-600 text-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold">Koila</a>
            <div>
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}" class="mr-4 hover:text-red-100">Dashboard</a>
                    {{-- <form method="POST" action="{{ route('logout') }}" class="inline"> --}}
                        @csrf
                        <button type="submit" class="hover:text-red-100">Logout</button>
                    </form>
                @else
                    {{-- <a href="{{ route('login') }}" class="mr-4 hover:text-red-100">Login</a> --}}
                    {{-- <a href="{{ route('register') }}" class="hover:text-red-100">Register</a> --}}
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-red-600 text-black py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Order Delicious Food Anytime</h1>
            <p class="text-xl mb-8">Discover a variety of cuisines and have them delivered to your door!</p>
            {{-- <a href="{{ route('menu') }}" class="bg-white text-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-100 transition">Browse Menu</a> --}}
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-red-600">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Why Choose Koila?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l4 2m0-6a8 8 0 11-8-8 8 8 0 018 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Fast Delivery</h3>
                    <p class="text-black">Get your food delivered in under 30 minutes.</p>
                </div>
                <div class="text-center">
                    <div class="bg-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Quality Food</h3>
                    <p class="text-black">Fresh ingredients from local vendors.</p>
                </div>
                <div class="text-center">
                    <div class="bg-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Affordable Prices</h3>
                    <p class="text-black">Enjoy great meals at budget-friendly prices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-red-600 text-black py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Satisfy Your Cravings?</h2>
            <p class="text-lg mb-8">Join Koila today and start ordering !</p>
            @if (Auth::check())
                {{-- <a href="{{ route('menu') }}" class="bg-white text-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-100 transition">Order Now</a> --}}
            @else
                {{-- <a href="{{ route('register') }}" class="bg-white text-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-100 transition">Sign Up Now</a> --}}
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-black py-8">
        <livewire:about>
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Koila. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>