@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="min-h-[90vh] flex items-center justify-center relative overflow-hidden">
    <div class="absolute top-20 left-10 w-72 h-72 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>

    <div class="text-center px-4 relative z-10">
        <div data-aos="fade-down">
            <span class="bg-cyan-100 text-cyan-800 text-sm font-bold px-4 py-1.5 rounded-full border border-cyan-200 inline-block mb-6">
                🚀 Available for Freelance & Hire
            </span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 mb-6 tracking-tight" data-aos="fade-up" data-aos-delay="100">
            Halo, Saya <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-600">Samudra</span>
        </h1>

        <div class="text-2xl md:text-3xl text-gray-600 mb-10 h-10" data-aos="fade-up" data-aos-delay="200"
             x-data="{ 
                 text: '', 
                 words: ['Junior Programmer.', 'Laravel Developer.', 'Backend Enthusiast.'], 
                 wordIndex: 0, 
                 charIndex: 0, 
                 isDeleting: false, 
                 type() {
                     const currentWord = this.words[this.wordIndex];
                     if (this.isDeleting) {
                         this.text = currentWord.substring(0, this.charIndex - 1);
                         this.charIndex--;
                     } else {
                         this.text = currentWord.substring(0, this.charIndex + 1);
                         this.charIndex++;
                     }

                     if (!this.isDeleting && this.charIndex === currentWord.length) {
                         this.isDeleting = true;
                         setTimeout(() => this.type(), 2000);
                     } else if (this.isDeleting && this.charIndex === 0) {
                         this.isDeleting = false;
                         this.wordIndex = (this.wordIndex + 1) % this.words.length;
                         setTimeout(() => this.type(), 500);
                     } else {
                         setTimeout(() => this.type(), this.isDeleting ? 50 : 100);
                     }
                 }
             }" 
             x-init="type()">
            Saya seorang <span class="text-cyan-600 font-bold" x-text="text"></span><span class="animate-pulse">|</span>
        </div>

        <div class="flex justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('projects') }}" class="group bg-gradient-to-r from-cyan-600 to-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:shadow-lg hover:shadow-cyan-500/50 transition transform hover:-translate-y-1 flex items-center gap-2">
                Lihat Karya Saya
                <span class="group-hover:translate-x-1 transition">➜</span>
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-700 border border-gray-200 px-8 py-4 rounded-xl font-bold hover:bg-gray-50 transition hover:shadow-lg">
                Hubungi Saya
            </a>
        </div>
    </div>
</section>

@if(isset($testimonials) && $testimonials->count() > 0)
<section class="py-20 bg-white relative overflow-hidden border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-10" data-aos="fade-down">Apa Kata Mereka?</h2>

        <div x-data="{ 
                activeSlide: 0, 
                slides: {{ $testimonials->count() }},
                interval: null,
                startAutoSlide() { this.interval = setInterval(() => { this.activeSlide = (this.activeSlide + 1) % this.slides; }, 5000); },
                stopAutoSlide() { clearInterval(this.interval); }
             }" 
             x-init="startAutoSlide()" 
             @mouseenter="stopAutoSlide()" 
             @mouseleave="startAutoSlide()"
             class="relative min-h-[300px]">

            <div class="relative h-64 md:h-56"> 
                @foreach($testimonials as $index => $item)
                    <div x-show="activeSlide === {{ $index }}"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform scale-95 translate-x-10"
                         x-transition:enter-end="opacity-100 transform scale-100 translate-x-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform scale-100 translate-x-0"
                         x-transition:leave-end="opacity-0 transform scale-95 -translate-x-10"
                         class="absolute inset-0 flex flex-col items-center justify-center">
                        
                        <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-xl max-w-2xl w-full relative">
                            <div class="absolute -top-4 -left-4 text-6xl text-cyan-100 font-serif">“</div>
                            <p class="text-gray-600 text-lg italic mb-6">"{{ $item->content }}"</p>
                            <div class="flex items-center justify-center gap-4">
                                @if($item->avatar)
                                    <img src="{{ asset('storage/' . $item->avatar) }}" class="w-12 h-12 rounded-full object-cover border-2 border-cyan-500">
                                @else
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 font-bold text-xl">{{ substr($item->name, 0, 1) }}</div>
                                @endif
                                <div class="text-left">
                                    <h4 class="font-bold text-gray-900">{{ $item->name }}</h4>
                                    <p class="text-xs text-gray-500 uppercase tracking-wide">{{ $item->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center gap-2 mt-8">
                @foreach($testimonials as $index => $item)
                    <button @click="activeSlide = {{ $index }}" :class="activeSlide === {{ $index }} ? 'bg-cyan-600 w-8' : 'bg-gray-300 w-2'" class="h-2 rounded-full transition-all duration-300"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<style>
    @keyframes blob { 0% { transform: translate(0px, 0px) scale(1); } 33% { transform: translate(30px, -50px) scale(1.1); } 66% { transform: translate(-20px, 20px) scale(0.9); } 100% { transform: translate(0px, 0px) scale(1); } }
    .animate-blob { animation: blob 7s infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
</style>
@endsection