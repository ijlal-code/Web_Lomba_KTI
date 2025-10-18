import './bootstrap';
import './menu';
import './kembali';

// Import AOS
import AOS from 'aos';

// Inisialisasi AOS setelah semua script dimuat
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        // Konfigurasi dasar (optional)
        duration: 1000, // Durasi animasi dalam milidetik
        once: true,     // Animasi hanya terjadi satu kali (ketika elemen muncul pertama kali)
    });
});