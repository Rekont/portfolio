@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-20 overflow-hidden">
    
    <div class="text-center mb-16" data-aos="fade-down">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Tentang Saya</h2>
        <div class="w-20 h-1 bg-indigo-600 mx-auto rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-16 items-center">
        
        <div data-aos="fade-right" data-aos-duration="1000">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
                Membangun Solusi Digital dengan <span class="text-indigo-600">Kode yang Bersih</span>
            </h3>
            
            <p class="text-lg leading-relaxed text-gray-600 mb-6 text-justify">
                {{ $data['about'] }}
            </p>
            
            <p class="text-gray-600 mb-8 leading-relaxed">
                Saya percaya bahwa website yang baik tidak hanya terlihat bagus, tapi juga cepat, aman, dan mudah digunakan. Saat ini saya fokus mendalami arsitektur <strong>Laravel</strong> dan modern frontend.
            </p>

            <div class="grid grid-cols-3 gap-4 border-t border-gray-100 pt-8">
                <div>
                    <h4 class="text-3xl font-bold text-indigo-600">1+</h4>
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Tahun Pengalaman</p>
                </div>
                <div>
                    <h4 class="text-3xl font-bold text-indigo-600">10+</h4>
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Project Selesai</p>
                </div>
                <div>
                    <h4 class="text-3xl font-bold text-indigo-600">100%</h4>
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Kepuasan Klien</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative" data-aos="fade-left" data-aos-duration="1000">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            
            <h3 class="font-bold text-xl mb-8 flex items-center gap-2 relative z-10">
                <span class="text-2xl">🛠️</span> Tech Stack & Tools
            </h3>

            <div class="flex flex-wrap gap-3 relative z-10">
                @foreach($data['skills'] as $index => $skill)
                    <div class="group flex items-center gap-2 px-5 py-3 bg-gray-50 border border-gray-200 rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300 cursor-default"
                         data-aos="zoom-in"
                         data-aos-delay="{{ $index * 100 }}"> <div class="w-2 h-2 rounded-full bg-indigo-500 group-hover:bg-white transition"></div>
                        <span class="font-semibold text-sm">{{ $skill }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 pt-6 border-t border-gray-100 relative z-10">
                <p class="text-sm text-gray-500 italic">
                    "Selalu belajar teknologi baru setiap hari untuk memberikan solusi terbaik."
                </p>
            </div>
        </div>
    </div>
</div>
@endsection