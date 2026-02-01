<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Testimonial;

class PortfolioController extends Controller
{
    // Data dummy kita simpan di fungsi private agar bisa dipanggil berulang
    private function getData() {
        return [
            'name' => 'Nama Kamu', // Ganti Nama Disini
            'role' => 'Junior Laravel Developer',
            'about' => 'Saya adalah programmer junior yang bersemangat dengan spesialisasi di ekosistem Laravel.',
            'services' => [
                ['title' => 'Web Development', 'desc' => 'Membangun website responsif.', 'icon' => '🌐'],
                ['title' => 'Web Application', 'desc' => 'Sistem manajemen berbasis web.', 'icon' => '💻'],
                ['title' => 'Maintenance', 'desc' => 'Perbaikan bug dan error.', 'icon' => '🛠️']
            ],
            'skills' => ['Laravel', 'PHP', 'MySQL', 'Tailwind', 'Git']
        ];
    }

    public function home() {
    $testimonials = Testimonial::latest()->get(); // Ambil data
    return view('home', [
        'data' => $this->getData(),
        'testimonials' => $testimonials // Kirim ke view
    ]);
}

    public function about() {
        return view('about', ['data' => $this->getData()]);
    }

    public function services() {
        return view('services', ['data' => $this->getData()]);
    }

    // --- FUNGSI BARU UNTUK HALAMAN PROJECTS ---
    public function projects() {
        // Mengambil data project dari database, diurutkan dari yang terbaru
        $projects = Project::latest()->get();
        
        // Kita kirimkan data projects DAN data profil (untuk jaga-jaga jika layout butuh nama)
        return view('projects', [
            'projects' => $projects,
            'data' => $this->getData()
        ]);
    }

    public function contact() {
        // Kita kirim $data juga ke halaman contact agar konsisten
        return view('contact', ['data' => $this->getData()]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        
        Contact::create($validated);
        
        // Redirect kembali ke halaman contact dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pesan terkirim!');
    }
    
}