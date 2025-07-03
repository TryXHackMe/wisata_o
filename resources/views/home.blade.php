<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreNusantara - Wisata Modern</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        dark: '#1E293B',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-gradient {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary;
            }
            .btn-gradient {
                @apply bg-gradient-to-r from-primary to-secondary text-white;
            }
        }
    </style>
</head>
<body class="font-poppins bg-gray-50">
    <!-- Header/Navbar -->
    <header class="fixed w-full bg-white shadow-md z-50">
        <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <span class="text-primary">Explore</span><span class="text-secondary">Nusantara</span>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-dark hover:text-primary font-medium">Beranda</a>
                <a href="#destinasi" class="text-dark hover:text-primary font-medium">Destinasi</a>
                <a href="#paket" class="text-dark hover:text-primary font-medium">Paket Wisata</a>
                <a href="#tentang" class="text-dark hover:text-primary font-medium">Tentang Kami</a>
                <a href="#kontak" class="text-dark hover:text-primary font-medium">Kontak</a>
            </div>
            
            <button class="md:hidden text-dark text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 bg-gradient-to-br from-blue-50 to-red-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-dark">
                    Jelajahi Keindahan <span class="text-gradient">Indonesia</span>
                </h1>
                <p class="text-gray-600 mb-8 text-lg">
                    Temukan pengalaman wisata tak terlupakan di berbagai destinasi eksotis di seluruh Nusantara.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="btn-gradient px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition duration-300">
                        Jelajahi Sekarang
                    </button>
                    <button class="border-2 border-primary text-primary px-6 py-3 rounded-lg font-medium hover:bg-primary hover:text-white transition duration-300">
                        <i class="fas fa-play mr-2"></i> Video Wisata
                    </button>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1503917988258-f87a78e3c995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Wisata Indonesia" 
                     class="rounded-xl shadow-2xl w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <!-- Destinasi Populer -->
    <section id="destinasi" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-3">Destinasi Populer</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Temukan destinasi wisata terbaik yang telah dipilih khusus untuk Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card Destinasi 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Raja Ampat" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">
                            Populer
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-dark">Raja Ampat, Papua</h3>
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-700">4.9</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Surga bawah laut dengan keanekaragaman hayati tertinggi di dunia.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold">Rp 3.500.000</span>
                            <button class="text-secondary hover:text-primary font-medium flex items-center">
                                Detail <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Card Destinasi 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Bali" 
                             class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-dark">Ubud, Bali</h3>
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-700">4.8</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Pusat budaya Bali dengan pemandangan sawah terasering dan seni tradisional.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold">Rp 2.800.000</span>
                            <button class="text-secondary hover:text-primary font-medium flex items-center">
                                Detail <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Card Destinasi 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Bromo" 
                             class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-dark">Gunung Bromo, Jawa Timur</h3>
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-700">4.7</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Pesona sunrise di atas lautan pasir dengan pemandangan gunung berapi.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-bold">Rp 1.200.000</span>
                            <button class="text-secondary hover:text-primary font-medium flex items-center">
                                Detail <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="btn-gradient px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition duration-300">
                    Lihat Semua Destinasi
                </button>
            </div>
        </div>
    </section>

    <!-- Paket Wisata -->
    <section id="paket" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-3">Paket Wisata</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Pilihan paket wisata lengkap dengan fasilitas terbaik untuk liburan Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Paket 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Paket Petualangan</h3>
                            <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                                Best Seller
                            </span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Untuk Anda yang menyukai tantangan dan petualangan seru di alam bebas.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Tracking gunung & hutan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Snorkeling & diving</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Arung jeram</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Pemandu profesional</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-primary mb-2">Rp 4.200.000</span>
                            <span class="text-gray-500">/orang</span>
                            <button class="btn-gradient w-full mt-4 py-3 rounded-lg font-medium">
                                Pilih Paket
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Paket 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border-2 border-primary">
                    <div class="bg-primary text-white text-center py-2">
                        <span class="font-bold">RECOMMENDED</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Paket Keluarga</h3>
                            <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">
                                Hemat
                            </span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Liburan menyenangkan untuk seluruh keluarga dengan fasilitas lengkap.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Akomodasi bintang 4</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Destinasi ramah anak</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Makanan keluarga</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Transportasi pribadi</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Diskon anak 50%</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-primary mb-2">Rp 3.500.000</span>
                            <span class="text-gray-500">/orang</span>
                            <button class="btn-gradient w-full mt-4 py-3 rounded-lg font-medium">
                                Pilih Paket
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Paket 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Paket Romantis</h3>
                            <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                New
                            </span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Pengalaman romantis untuk pasangan dengan suasana khusus dan privat.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Penginapan mewah</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Makan malam romantis</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Tur pribadi</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Hadiah spesial</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-primary mb-2">Rp 5.800.000</span>
                            <span class="text-gray-500">/pasang</span>
                            <button class="btn-gradient w-full mt-4 py-3 rounded-lg font-medium">
                                Pilih Paket
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-3">Apa Kata Mereka?</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Testimoni dari pelanggan yang telah merasakan pengalaman berwisata bersama kami
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" 
                             alt="Testimoni" 
                             class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold text-dark">Sarah Wijaya</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Pengalaman luar biasa! Paket keluarga yang kami pilih sangat worth it. Anak-anak senang, kami sebagai orang tua juga bisa benar-benar relaks."
                    </p>
                </div>
                
                <!-- Testimoni 2 -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                             alt="Testimoni" 
                             class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold text-dark">Budi Santoso</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Pemandu wisatanya sangat profesional dan ramah. Semua itinerary berjalan lancar sesuai rencana. Tidak ada kendala berarti selama perjalanan."
                    </p>
                </div>
                
                <!-- Testimoni 3 -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                             alt="Testimoni" 
                             class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold text-dark">Dewi Lestari</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Paket romantisnya benar-benar spesial! Suasana makan malam di pantai dengan dekorasi lilin sangat memukau. Suami saya sangat terkesan."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary to-secondary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Memulai Petualangan Anda?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Dapatkan penawaran spesial untuk pemesanan pertama Anda!
            </p>
            <button class="bg-white text-primary px-8 py-3 rounded-lg font-bold shadow-lg hover:bg-gray-100 transition duration-300">
                Pesan Sekarang
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        <span class="text-primary">Explore</span><span class="text-secondary">Nusantara</span>
                    </h3>
                    <p class="text-gray-400 mb-4">
                        Perusahaan wisata terpercaya yang menghadirkan pengalaman liburan tak terlupakan di seluruh Indonesia.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#destinasi" class="text-gray-400 hover:text-white">Destinasi</a></li>
                        <li><a href="#paket" class="text-gray-400 hover:text-white">Paket Wisata</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#kontak" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-secondary"></i>
                            <span>Jl. Wisata No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-secondary"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary"></i>
                            <span>info@explorenusantara.com</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">
                        Berlangganan newsletter kami untuk mendapatkan promo dan info terbaru.
                    </p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" 
                               class="px-4 py-2 rounded-l-lg focus:outline-none text-dark w-full">
                        <button class="bg-secondary text-white px-4 py-2 rounded-r-lg hover:bg-green-600 transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2023 ExploreNusantara. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu button').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>