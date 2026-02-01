@extends('layouts.app')

@section('title', 'Portofolio Saya')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-20">
    <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold mb-4 text-gray-900">Hasil Karya Terbaru</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Beberapa project yang telah saya kerjakan dengan sepenuh hati, mulai dari landing page hingga sistem manajemen kompleks.</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $index => $project)
        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 overflow-hidden flex flex-col"
             data-aos="fade-up" 
             data-aos-delay="{{ $index * 100 }}"> <div class="h-56 overflow-hidden bg-gray-100 relative">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                @else
                    <div class="flex items-center justify-center h-full text-gray-400 font-medium">No Image Available</div>
                @endif
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            </div>

            <div class="p-8 flex-grow flex flex-col relative">
                <div class="mb-4">
                    <span class="text-xs font-bold tracking-wider text-indigo-600 uppercase bg-indigo-50 px-3 py-1 rounded-full">
                        {{ $project->tech_stack }}
                    </span>
                </div>
                
                <h3 class="font-bold text-2xl mb-3 text-gray-900 group-hover:text-indigo-600 transition">{{ $project->title }}</h3>
                
                <p class="text-gray-600 mb-6 leading-relaxed flex-grow">
                    {{ $project->description }}
                </p>
                
                @if($project->link)
                    <a href="{{ $project->link }}" target="_blank" class="inline-flex items-center justify-center w-full bg-gray-900 text-white px-6 py-3 rounded-xl font-medium hover:bg-indigo-600 transition shadow-md hover:shadow-lg transform active:scale-95">
                        Lihat Project <span class="ml-2">↗</span>
                    </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    @if($projects->isEmpty())
        <div class="text-center text-gray-400 py-20" data-aos="fade-in">
            <div class="text-6xl mb-4">📂</div>
            <p class="text-xl">Belum ada project yang diupload.</p>
        </div>
    @endif
</div>
@endsection