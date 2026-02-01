<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Pola Background Grid Halus - Tema Samudra */
        .bg-grid-pattern {
            /* Mengubah warna titik grid menjadi Cyan (Biru Laut) */
            background-image: radial-gradient(#06b6d4 0.7px, transparent 0.7px);
            background-size: 24px 24px;
        }

        /* Custom Scrollbar agar lebih estetik */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #0ea5e9; /* Sky Blue */
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #0284c7; /* Darker Blue */
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen relative overflow-x-hidden">

    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-grid-pattern opacity-[0.04]"></div>
    </div>

    <nav class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-3">
                
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg group-hover:shadow-cyan-500/50 transition duration-300 transform group-hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V9s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                            <path d="M4 22v-7" />
                            <path d="M20 22v-7" />
                        </svg>
                    </div>
                    
                    <div class="flex flex-col leading-tight">
                        <span class="font-extrabold text-xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-700 font-sans">
                            Samudra<span class="text-gray-800">Dev</span>
                        </span>
                        <span class="text-[10px] font-bold text-gray-400 tracking-[0.2em] uppercase">Digital Solutions</span>
                    </div>
                </a>

                <div class="space-x-1 hidden md:flex items-center">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg transition {{ request()->routeIs('home') ? 'bg-cyan-50 text-cyan-700 font-bold' : 'text-gray-600 hover:text-cyan-600 hover:bg-gray-50' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-4 py-2 rounded-lg transition {{ request()->routeIs('about') ? 'bg-cyan-50 text-cyan-700 font-bold' : 'text-gray-600 hover:text-cyan-600 hover:bg-gray-50' }}">About</a>
                    <a href="{{ route('services') }}" class="px-4 py-2 rounded-lg transition {{ request()->routeIs('services') ? 'bg-cyan-50 text-cyan-700 font-bold' : 'text-gray-600 hover:text-cyan-600 hover:bg-gray-50' }}">Services</a>
                    <a href="{{ route('projects') }}" class="px-4 py-2 rounded-lg transition {{ request()->routeIs('projects') ? 'bg-cyan-50 text-cyan-700 font-bold' : 'text-gray-600 hover:text-cyan-600 hover:bg-gray-50' }}">Project</a>
                    <a href="{{ route('contact') }}" class="ml-4 bg-gradient-to-r from-cyan-600 to-blue-600 text-white px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-cyan-500/30 transform hover:-translate-y-0.5 transition duration-300 font-medium text-sm">Contact Me</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow z-10 pt-24">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-100 py-8 text-center z-10 mt-auto">
        <p class="text-gray-500 font-medium text-sm">
            &copy; {{ date('Y') }} SamudraDev. Dibuat dengan 
            <span class="text-red-500 animate-pulse">❤️</span> menggunakan Laravel.
        </p>
    </footer>

    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4" 
         x-data="{ showTop: false }" 
         @scroll.window="showTop = (window.pageYOffset > 300)">

        <a href="https://wa.me/6281269598659?text=Halo%20saya%20tertarik%20dengan%20jasa%20anda" target="_blank" 
           class="group flex items-center justify-center w-14 h-14 bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 hover:scale-110 transition duration-300 relative">
            
            <span class="absolute right-16 bg-white text-gray-800 text-xs font-bold px-2 py-1 rounded shadow-md opacity-0 group-hover:opacity-100 transition duration-300 whitespace-nowrap">
                Chat WhatsApp
            </span>

            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
            
            <span class="absolute w-full h-full rounded-full bg-green-500 opacity-75 animate-ping -z-10"></span>
        </a>

        <button @click="window.scrollTo({top: 0, behavior: 'smooth'})"
                x-show="showTop"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-10"
                class="w-12 h-12 bg-gray-800 text-white rounded-full shadow-lg hover:bg-cyan-600 transition flex items-center justify-center">
            
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });
    </script>
</body>
</html>