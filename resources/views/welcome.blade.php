@extends('layouts.landing')

@section('content')

<div class="min-h-screen relative z-10">

    {{-- ================= NAVBAR ================= --}}
    <header class="fixed top-0 left-0 w-full z-50 backdrop-blur-md bg-black/40 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            
            <div class="flex items-center gap-2">
                <img src="{{ asset('public/logos/AgriSenso_logo.png') }}" class="w-8 h-8" alt="logo">
                <span class="font-semibold text-lg">AgriSenso</span>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm text-gray-300">
                <a href="#" class="hover:text-white transition">About</a>
                <a href="#" class="hover:text-white transition">Features</a>
                <a href="#" class="hover:text-white transition">Pricing</a>
                <a href="#" class="hover:text-white transition">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" 
                       class="px-4 py-2 text-sm rounded-full bg-gradient-to-r from-green-400 to-blue-500">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-white">Sign In</a>
                    <a href="{{ route('register') }}" 
                       class="px-4 py-2 text-sm rounded-full bg-gradient-to-r from-green-400 to-blue-500">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </header>

    {{-- ================= HERO ================= --}}
    <section class="pt-40 pb-24 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <span class="inline-block px-4 py-1 text-xs bg-green-500/20 text-green-400 rounded-full mb-6">
                NEXT-GEN AGRICULTURAL TECHNOLOGY
            </span>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                The Future of
                <span class="bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent">
                    Smart Farming
                </span>
            </h1>

            <p class="text-gray-400 mb-8 text-lg">
                Experience the future of agriculture with climate-aware technology.
                Monitor health, track environmental conditions, and optimize operations.
            </p>

            <div class="flex gap-4 mb-8">
                <a href="{{ route('register') }}"
                   class="px-6 py-3 rounded-full bg-gradient-to-r from-green-400 to-blue-500 font-medium">
                    Get Started
                </a>

                <a href="{{ route('login') }}"
                   class="px-6 py-3 rounded-full border border-white/20 text-gray-300 hover:bg-white/10">
                    Sign In
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-gray-400">
                <div>✔ Real-time Monitoring</div>
                <div>✔ Weather Intelligence</div>
                <div>✔ Smart Alerts</div>
                <div>✔ Data Analytics</div>
            </div>
        </div>

        <div class="w-full md:w-[540px] lg:w-[660px] mx-auto">
            <div class="bg-gradient-to-br from-slate-900/60 to-slate-800/60 rounded-3xl p-4 border border-white/10 shadow-2xl">

                <div class="rounded-xl overflow-hidden border border-white/10 bg-black aspect-video">
                    <div class="relative w-full h-full">
                        <video autoplay loop muted playsinline class="w-full h-full object-contain">
                            <source src="{{ asset('public/videos/Pen1.mp4') }}" type="video/mp4">
                        </video>

                        <!-- Timestamp (top-left) -->
                        <div class="absolute top-2 left-3 text-xs text-white/80 bg-black/40 px-2 py-1 rounded">03-06-2024 Wed 17:47:45</div>

                        <!-- LIVE badge (top-right) -->
                        <div class="absolute top-3 right-3 bg-emerald-500 text-xs text-white px-3 py-1 rounded-full font-semibold">LIVE</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 mt-4">
                    <img src="{{ asset('public/logos/AgriSenso_logo.png') }}" class="w-10 h-10 rounded-full">
                    <div>
                        <div class="text-white font-semibold">AgriSenso Dashboard</div>
                        <div class="text-sm text-gray-400">Real-time monitoring</div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-3 gap-3">
                    <div class="bg-slate-900/50 p-4 rounded-lg">
                        <div class="text-xs text-amber-400 mb-1">Temperature</div>
                        <div class="text-2xl font-bold text-white">24°C</div>
                    </div>

                    <div class="bg-slate-900/50 p-4 rounded-lg">
                        <div class="text-xs text-sky-300 mb-1">Humidity</div>
                        <div class="text-2xl font-bold text-white">65%</div>
                    </div>

                    <div class="bg-slate-900/50 p-4 rounded-lg">
                        <div class="text-xs text-emerald-300 mb-1">Health</div>
                        <div class="text-2xl font-bold text-white">Optimal</div>
                    </div>
                </div>

            </div>
        </div>
        
        

    </section>

    {{-- ================= PRODUCT SHOWCASE ================= --}}
    <section class="py-24 text-center max-w-6xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">See AgriSenso in Action</h2>
        <p class="text-gray-400 mb-12">
            Transform traditional farming into data-driven operations.
        </p>

        <div class="rounded-2xl overflow-hidden border border-white/10 shadow-xl relative">
              <video autoplay loop muted playsinline class="w-full h-auto object-cover">
                  <source src="{{ asset('public/videos/inAction.mp4') }}" type="video/mp4">
                  <!-- Fallback image -->
                  <img src="{{ asset('public/images/product-demo.jpg') }}" alt="Product Demo" loading="lazy">
              </video>

              <div class="absolute top-4 left-4 bg-black/40 px-3 py-1 rounded-full flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-blue-500 inline-block"></span>
                  <span class="text-sm text-white">3D Model</span>
              </div>
        </div>
    </section>
    {{-- ================= PRICING ================= --}}
        <div class="py-24 max-w-6xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center">Simple, Transparent Pricing</h2>
        <p class="text-gray-400 mb-12 text-center">
            Get started with AgriSenso today with our affordable camera installation package.
        </p>

        <div class="grid md:grid-cols-2 gap-8 items-start">
            <!-- Left: Pricing card -->
            <div class="max-w-md mx-auto bg-white/5 border border-white/10 rounded-2xl p-20 backdrop-blur-xl">
                <h3 class="text-xl font-semibold mb-2">Camera Installment</h3>
                <p class="text-4xl font-bold mb-6">₱4,299</p>

                <ul class="text-gray-400 space-y-3 mb-6 text-left">
                    <li>✔ HD Camera</li>
                    <li>✔ Professional Installation</li>
                    <li>✔ Real-time monitoring access</li>
                    <li>✔ Cloud storage included</li>
                    <li>✔ 24/7 technical support</li>
                    <li>✔ Free 99 days subscription</li>
                </ul>

                <a href="{{ route('register') }}"
                   class="block w-full py-3 rounded-full bg-gradient-to-r from-green-400 to-blue-500">
                    Get Started Now
                </a>
            </div>

            <!-- Right: What You Get (video) -->
            <div class="mx-auto bg-white/5 border border-white/10 rounded-2xl p-10 backdrop-blur-xl">
                <h3 class="text-lg font-semibold mb-2">What You Get</h3>
                <p class="text-gray-400 mb-4">Premium components for complete farm monitoring</p>

                <div class="rounded-xl overflow-hidden border border-white/10 aspect-video bg-black">
                    <div class="relative w-full h-full">
                        <video autoplay loop muted playsinline class="w-full h-full object-contain">
                            <source src="{{ asset('public/videos/disassemble.mp4') }}" type="video/mp4">
                        </video>

                        <!-- Overlay text in top-left (matches screenshot style) -->
                        <div class="absolute top-3 left-3 bg-black/40 px-3 py-1 rounded text-sm text-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= STATS ================= --}}
    <section class="py-20 max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12">Trusted by Farmers Worldwide</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/5 border border-white/10 p-8 rounded-xl">
                <h3 class="text-3xl font-bold">12,000+</h3>
                <p class="text-gray-400 mt-2">Active Users</p>
            </div>

            <div class="bg-white/5 border border-white/10 p-8 rounded-xl">
                <h3 class="text-3xl font-bold">98%</h3>
                <p class="text-gray-400 mt-2">Customer Satisfaction</p>
            </div>

            <div class="bg-white/5 border border-white/10 p-8 rounded-xl">
                <h3 class="text-3xl font-bold">30%</h3>
                <p class="text-gray-400 mt-2">Productivity Increase</p>
            </div>
        </div>
    </section>

    {{-- ================= CTA ================= --}}
    <section class="py-24 text-center px-6">
        <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Farming?</h2>
        <p class="text-gray-400 mb-8">
            Join thousands of farmers already using AgriSenso.
        </p>

        <div class="flex justify-center gap-4">
            <a href="{{ route('register') }}"
               class="px-6 py-3 rounded-full bg-gradient-to-r from-green-400 to-blue-500">
                Get Started Now
            </a>

            <a href="#"
               class="px-6 py-3 rounded-full border border-white/20 hover:bg-white/10">
                Request Demo
            </a>
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer class="border-t border-white/10 py-10 text-center text-gray-500 text-sm">
        <div class="mb-4">
            <img src="{{ asset('public/logos/AgriSenso_logo.png') }}" class="w-6 h-6 inline">
            AgriSenso © {{ date('Y') }}
        </div>
        <div class="flex justify-center gap-6">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Support</a>
        </div>
    </footer>

</div>

@endsection