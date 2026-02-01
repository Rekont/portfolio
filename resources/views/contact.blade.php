@extends('layouts.app')

@section('title', 'Hubungi Saya')

@section('content')
<div class="min-h-screen flex items-center justify-center py-20 px-4 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000 -z-10"></div>

    <div class="max-w-5xl w-full grid md:grid-cols-2 gap-12 items-center">
        
        <div data-aos="fade-right">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Mari Bekerja Sama! 🚀</h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                Tertarik membuat website atau aplikasi? Atau sekadar ingin berdiskusi tentang teknologi? Jangan ragu untuk mengirim pesan. Saya selalu terbuka untuk peluang baru.
            </p>

            <div class="space-y-6">
                
                <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-indigo-500 transition cursor-pointer group"
                     x-data="{ copied: false }"
                     @click="navigator.clipboard.writeText('emailanda@contoh.com'); copied = true; setTimeout(() => copied = false, 2000)">
                    
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center text-xl group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
                        📧
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">Email Saya</p>
                        <div class="flex items-center gap-2">
                            <p class="font-medium text-gray-800">vakarlubiss00@gmail.com</p>
                            <span x-show="copied" x-transition class="text-xs text-green-600 font-bold bg-green-100 px-2 py-0.5 rounded">Tersalin!</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 group hover:border-indigo-500 transition">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center text-xl group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
                        📍
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">Lokasi</p>
                        <p class="font-medium text-gray-800">Sumatra Utara, Indonesia (Remote Available)</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex gap-4">
                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-gray-900 hover:text-white transition transform hover:-translate-y-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition transform hover:-translate-y-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-pink-600 hover:text-white transition transform hover:-translate-y-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
        </div>

        <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100 relative z-10" data-aos="fade-left" data-aos-delay="200">
            
            <h3 class="text-2xl font-bold mb-6 text-gray-800">Kirim Pesan</h3>

            @if(session('success'))
                <div class="flex items-center gap-3 bg-green-50 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded mb-6 animate-pulse" role="alert">
                    <span class="text-xl">✅</span>
                    <div>
                        <p class="font-bold">Berhasil!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="space-y-5">
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" 
                               class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 @error('name') border-red-500 @enderror" 
                               placeholder="Nama Anda">
                        @error('name') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 @error('email') border-red-500 @enderror" 
                               placeholder="email@contoh.com">
                        @error('email') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Detail Project / Pesan</label>
                        <textarea name="message" rows="4" 
                                  class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 @error('message') border-red-500 @enderror" 
                                  placeholder="Ceritakan apa yang bisa saya bantu...">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-4 rounded-xl hover:bg-indigo-700 transition shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-1">
                        🚀 Kirim Pesan Sekarang
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection