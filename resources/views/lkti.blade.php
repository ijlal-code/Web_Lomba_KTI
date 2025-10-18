<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOMBA KARYA TULIS ILMIAH SMA/SMK SE-SULBAR | ISC UNSULBAR</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-50 text-gray-800 pt-12">

    <nav id="main-nav" class="bg-white shadow-md fixed top-0 w-full z-50 transition-all duration-300"> 
        <div class="container w-11/12 max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            
            <a href="#" class="text-blue-600 font-extrabold text-lg flex items-center">
                <span class="hidden sm:inline">LKTI</span> INFINITEC
            </a>

            <div class="hidden md:flex space-x-6">
                <a href="#tentang" class="text-gray-700 hover:text-blue-600 font-medium transition">Tentang</a>
                <a href="#timeline" class="text-gray-700 hover:text-blue-600 font-medium transition">Jadwal</a>
                <a href="#tema" class="text-gray-700 hover:text-blue-600 font-medium transition">Tema</a>
                <a href="#syarat" class="text-gray-700 hover:text-blue-600 font-medium transition">Ketentuan</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition">Kontak</a>
                
                <a href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" target="_blank" class="text-gray-800 bg-yellow-400 px-3 py-1 rounded hover:bg-yellow-500 font-semibold transition shadow-sm">
                    DAFTAR
                </a>
            </div>

            <button id="menu-button" class="md:hidden text-gray-700 focus:outline-none p-1 rounded hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white">
            <a href="#tentang" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Tentang</a>
            <a href="#timeline" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Jadwal</a>
            <a href="#tema" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Tema</a>
            <a href="#syarat" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Ketentuan</a>
            <a href="#contact" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 transition">Kontak</a>
            <a href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" target="_blank" class="block py-2 px-4 text-white bg-blue-600 hover:bg-blue-700 text-center font-semibold">DAFTAR SEKARANG</a>
        </div>
    </nav>
    
    <header class="bg-blue-600 text-white pt-10 pb-10 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="container w-11/12 max-w-6xl mx-auto py-5 px-4">
            <p class="text-sm md:text-base" data-aos="fade-up" data-aos-delay="100">Informatics Study Club (ISC) Unsulbar Proudly Present:</p>
            <h1 class="font-['Arial Black'] mb-1 text-3xl md:text-5xl" data-aos="fade-up" data-aos-delay="200">LOMBA KARYA TULIS ILMIAH</h1>
            <h2 class="text-xl md:text-2xl mt-0" data-aos="fade-up" data-aos-delay="300">SMA/SMK Sederajat Se-Sulawesi Barat</h2>
            <p class="italic text-lg" data-aos="fade-up" data-aos-delay="400">"Berkarya dengan Teknologi, Berkreasi dengan Ide, Bertumbuh lewat Kompetisi."</p>
            <p class="mt-4" data-aos="fade-up" data-aos-delay="500">Pendaftaran & Pengumpulan Fullpaper: **18 Oktober - 30 November 2025**</p>
            
            <a href="https://forms.gle/Y1DQ5zGcsuQ7BoDi9" target="_blank" 
               class="inline-block bg-yellow-400 text-gray-800 py-4 px-8 font-bold rounded mt-5 transition hover:bg-yellow-500 shadow-lg" data-aos="zoom-in" data-aos-delay="700">
                DAFTAR SEKARANG
            </a>
        </div>
    </header>

    <section id="tentang" class="py-16 border-b border-gray-200">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-blue-600 text-center mb-10 text-2xl md:text-3xl" data-aos="fade-right">Tentang LKTI INFINITEC 2025</h2>
            <p class="text-center max-w-3xl mx-auto text-lg" data-aos="fade-left" data-aos-delay="200">
                Lomba Karya Tulis Ilmiah (KTI) ini adalah bagian dari rangkaian acara INFINITEC 2025 yang diselenggarakan oleh ISC Unsulbar. Kami mengajak pelajar inovatif di Sulawesi Barat untuk menuangkan gagasan solutif dan inovatif berbasis teknologi demi kemajuan daerah.
            </p>
        </div>
    </section>

    <section id="timeline" class="py-16 bg-white border-b border-gray-200">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-blue-600 text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Jadwal Penting</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="timeline-item" data-aos="zoom-in" data-aos-delay="100">
                    <h4 class="m-0 mb-1 text-blue-600 font-bold">Pendaftaran & Pengumpulan Fullpaper</h4>
                    <p>18 Oktober - 30 November 2025</p>
                </div>
                <div class="timeline-item" data-aos="zoom-in" data-aos-delay="200">
                    <h4 class="m-0 mb-1 text-blue-600 font-bold">Penilaian Karya oleh Dewan Juri</h4>
                    <p>1 - 10 Desember 2025</p>
                </div>
                <div class="timeline-item" data-aos="zoom-in" data-aos-delay="300">
                    <h4 class="m-0 mb-1 text-blue-600 font-bold">Pengumuman Finalis & Technical Meeting</h4>
                    <p>11 Desember & 13 Desember 2025</p>
                </div>
                <div class="timeline-item" data-aos="zoom-in" data-aos-delay="400">
                    <h4 class="m-0 mb-1 text-blue-600 font-bold">Pengumpulan PTT (Power Point) & Presentasi Final</h4>
                    <p>14 - 16 Desember 2025 & 17 Desember 2025</p>
                </div>
                <div class="timeline-item border-yellow-400" data-aos="zoom-in" data-aos-delay="500">
                    <h4 class="m-0 mb-1 text-yellow-600 font-extrabold">Pengumuman Pemenang</h4>
                    <p>18 Desember 2025</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tema" class="py-16">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-blue-600 text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Tema & Subtema</h2>
            <p class="text-center mb-8" data-aos="fade-up" data-aos-delay="100">Pilih salah satu dari subtema berikut untuk ide kreatifmu:</p>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                
                <div class="card bg-white p-5 rounded-lg shadow-md" data-aos="flip-left">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Subtema Pilihan</h4>
                    <ul class="check-list">
                        <li>Aplikasi Digital</li>
                        <li>Teknologi Usaha Lokal</li>
                        <li>Teknologi Hijau</li>
                        <li>Pertanian Modern</li>
                        <li>Teknologi Kesehatan</li>
                    </ul>
                    <p class="text-center mt-6">
                        <a href="https://bit.ly/lkti-infinitec-2025" target="_blank" 
                           class="inline-block bg-blue-600 text-white py-2 px-5 font-bold rounded transition hover:bg-blue-700">
                            Buku Panduan
                        </a>
                    </p>
                </div>
                
                <div class="card bg-white p-5 rounded-lg shadow-md lg:col-span-2" data-aos="flip-right" data-aos-delay="200">
                    <h4 class="text-green-600 font-bold text-lg mb-4">Biaya Pendaftaran & Hadiah</h4>
                    <p>Biaya Pendaftaran: **Rp50.000 / Tim**</p>
                    <p>Transfer ke:</p>
                    <p class="font-bold text-xl my-2">Bank BRI: 0047 0107 2191 508</p>
                    <p>(a.n. Puput Yunita)</p>
                    <hr class="my-4">
                    <p class="font-semibold mb-2">Hadiah Pemenang:</p>
                    <ol class="list-decimal list-inside ml-4">
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                        <li class="mb-1">Uang Pembinaan + Trofi + Sertifikat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="syarat" class="py-16 bg-white border-b border-gray-200">
        <div class="container w-11/12 max-w-6xl mx-auto px-4">
            <h2 class="font-['Arial Black'] text-blue-600 text-center mb-10 text-2xl md:text-3xl" data-aos="fade-up">Ketentuan Lomba</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                
                <div class="card bg-white p-5 rounded-lg shadow-md lg:col-span-2" data-aos="fade-right">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Kriteria Peserta</h4>
                    <ul class="check-list">
                        <li>Peserta siswa aktif SMA/SMK/Sederajat (dibuktikan dengan Kartu Tanda Siswa/Kartu Sekolah).</li>
                        <li>Setiap tim terdiri dari 2 orang, dengan 1 orang sebagai Ketua Tim dan 1 orang sebagai Anggota.</li>
                        <li>Peserta harus berasal dari sekolah yang sama, namun boleh dari jurusan berbeda.</li>
                        <li>Anggota tim dapat berasal dari kelas 10, 11, atau 12.</li>
                    </ul>
                </div>
                
                <div class="card bg-white p-5 rounded-lg shadow-md" data-aos="fade-left" data-aos-delay="200">
                    <h4 class="text-blue-600 font-bold text-lg mb-4">Berkas Wajib Upload</h4>
                    <ul class="check-list">
                        <li>Buku panduan yang sudah ditandatangani</li>
                        <li>Scan Kartu Pelajar seluruh anggota</li>
                        <li>Bukti publikasi (reborn & pamphlet dibagikan ke 3 grup + IG Story)</li>
                        <li class="font-bold">File Fullpaper PDF</li>
                        <li>Bukti Pembayaran (Rp50.000)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 border-b border-gray-200">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 text-center">
            <h2 class="font-['Arial Black'] text-blue-600 mb-6 text-2xl md:text-3xl" data-aos="fade-up">CONTACT US</h2>
            
            <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                <h4 class="m-0 mb-4 text-xl font-bold text-gray-800">Narahubung Lomba</h4>
                <div class="space-y-2 text-lg">
                    <p>Ainul Hayat: <strong class="text-blue-600">0812-6416-7744</strong></p>
                    <p>Nirwana: <strong class="text-blue-600">0852-1621-4198</strong></p>
                </div>
            </div>
            
            <p class="mt-8 text-sm" data-aos="fade-up" data-aos-delay="300">
                <a href="https://isc.unsulbar.ac.id" target="_blank" class="text-blue-600 mx-2 hover:underline">Website ISC</a> | 
                <a href="https://instagram.com/isc.unsulbar" target="_blank" class="text-blue-600 mx-2 hover:underline">Instagram: @isc.unsulbar</a>
            </p>
        </div>
    </section>

    <footer class="bg-gray-100 text-gray-700 py-4">
        <div class="container w-11/12 max-w-6xl mx-auto px-4 flex justify-center items-center">
            <p class="text-sm opacity-90 text-center"> 
                &copy; Copyright Informatics Study Club. All Rights Reserved
            </p>
        </div>
    </footer>

    <a href="#" id="back-to-top" class="fixed bottom-5 right-5 z-50 p-3 rounded-md bg-blue-600 text-white shadow-xl transition-opacity duration-300 opacity-0 invisible hover:bg-blue-700" aria-label="Kembali ke atas">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </a>

    @vite('resources/js/app.js')
    
</body>
</html>