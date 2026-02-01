@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-20">
    
    <div class="text-center mb-16 space-y-4" data-aos="fade-down">
        <span class="bg-cyan-50 text-cyan-600 px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase">Layanan Saya</span>
        <h2 class="text-4xl font-extrabold text-gray-900">Solusi Digital Berkualitas</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Saya membantu mengubah ide bisnis anda menjadi produk digital yang fungsional.</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8 mb-32">
        @foreach($data['services'] as $index => $service)
        <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 relative overflow-hidden"
             data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition duration-500 origin-left"></div>
            <div class="w-16 h-16 bg-cyan-50 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-cyan-600 group-hover:text-white transition duration-500 transform group-hover:rotate-6 shadow-sm">{{ $service['icon'] }}</div>
            <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-cyan-600 transition">{{ $service['title'] }}</h3>
            <p class="text-gray-600 leading-relaxed mb-6">{{ $service['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <div class="text-center mb-16" data-aos="fade-down">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Pilih Paket Terbaik</h2>
        <p class="text-gray-600">Investasi transparan tanpa biaya tersembunyi.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 items-center max-w-6xl mx-auto mb-20">
        
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
            <h3 class="text-xl font-bold text-gray-800">Landing Page</h3>
            <p class="text-gray-500 text-sm mt-2">Personal Branding / UMKM.</p>
            <div class="my-6">
                <span class="text-4xl font-extrabold text-gray-900">Rp 1.5jt</span>
            </div>
            <ul class="space-y-3 mb-8 text-gray-600 text-sm">
                <li class="flex gap-2">✅ 1 Halaman Responsif</li>
                <li class="flex gap-2">✅ Hosting Gratis (1 Thn)</li>
                <li class="flex gap-2">✅ Revisi 2x</li>
            </ul>
            <a href="{{ route('contact') }}" class="block text-center w-full py-3 rounded-xl border border-cyan-600 text-cyan-600 font-bold hover:bg-cyan-50 transition">Pilih Paket</a>
        </div>

        <div class="bg-gradient-to-br from-cyan-600 to-blue-600 p-8 rounded-3xl shadow-2xl transform scale-105 relative" data-aos="fade-up" data-aos-delay="100">
            <div class="absolute top-0 right-0 bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-bl-xl rounded-tr-2xl">POPULAR</div>
            <h3 class="text-xl font-bold text-white">Company Profile</h3>
            <p class="text-cyan-100 text-sm mt-2">Untuk bisnis & perusahaan.</p>
            <div class="my-6 text-white">
                <span class="text-5xl font-extrabold">Rp 3.5jt</span>
            </div>
            <ul class="space-y-3 mb-8 text-cyan-50 text-sm font-medium">
                <li class="flex gap-2">✨ <strong class="text-white">Admin Panel (Filament)</strong></li>
                <li class="flex gap-2">✅ Hingga 5 Halaman</li>
                <li class="flex gap-2">✅ SEO Basic Optimization</li>
                <li class="flex gap-2">✅ Domain .com Gratis</li>
            </ul>
            <a href="{{ route('contact') }}" class="block text-center w-full py-4 rounded-xl bg-white text-blue-600 font-bold shadow-lg hover:bg-gray-50 transition">Pilih Paket Ini</a>
        </div>

        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-xl font-bold text-gray-800">Web App</h3>
            <p class="text-gray-500 text-sm mt-2">Sistem Kasir / HRD / Inventory.</p>
            <div class="my-6">
                <span class="text-4xl font-extrabold text-gray-900">Rp 5jt+</span>
            </div>
            <ul class="space-y-3 mb-8 text-gray-600 text-sm">
                <li class="flex gap-2">✅ <strong>Complex Database</strong></li>
                <li class="flex gap-2">✅ Multi User Role</li>
                <li class="flex gap-2">✅ Laporan & Grafik</li>
            </ul>
            <a href="{{ route('contact') }}" class="block text-center w-full py-3 rounded-xl border border-gray-300 text-gray-700 font-bold hover:bg-gray-50 transition">Konsultasi Dulu</a>
        </div>
    </div>

    <div class="bg-blue-900 rounded-3xl p-10 md:p-16 text-center text-white shadow-2xl relative overflow-hidden" data-aos="zoom-in">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-500 opacity-20 rounded-full translate-x-1/2 translate-y-1/2"></div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6 relative z-10">Punya Ide Project?</h2>
        <p class="text-cyan-200 mb-8 max-w-xl mx-auto text-lg relative z-10">Jangan ragu untuk mendiskusikan kebutuhan anda.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-900 font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition shadow-lg hover:shadow-white/20 transform hover:-translate-y-1 relative z-10">Hubungi Saya Gratis</a>
    </div>
</div>
@endsection