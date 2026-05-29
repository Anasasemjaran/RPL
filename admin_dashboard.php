<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Care Admin - Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Background Colors untuk Transisi Halaman (diambil dari tema User) */
        .bg-view-green { background: linear-gradient(180deg, #f8fafc 0%, #d1fae5 100%); }
        .bg-view-purple { background: linear-gradient(180deg, #f8fafc 0%, #e0e7ff 100%); }

        /* Custom Scrollbar for tables */
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.5); 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(147, 196, 162, 0.8); 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #7bab8a; 
        }

        /* Animasi Transisi Halus */
        .animate-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }
        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; filter: blur(4px); }
            to { opacity: 1; filter: blur(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Hover efek pada input */
        input:focus, select:focus, textarea:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body id="app-body" class="bg-view-green transition-colors duration-1000 min-h-screen flex flex-col text-slate-800">

    <!-- NAVBAR ADMIN (Menyesuaikan dengan style User) -->
    <nav class="flex justify-between items-center py-6 px-4 md:px-8 max-w-6xl mx-auto w-full z-10 relative">
        <!-- Logo -->
        <div class="flex items-center gap-2 cursor-pointer group" onclick="navigateAdmin('home')">
            <div class="bg-white p-2 rounded-lg shadow-sm group-hover:shadow-md transition-all group-hover:-rotate-3">
                <i class="fa-solid fa-heart-pulse text-blue-700 text-2xl"></i>
            </div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-blue-900 tracking-wider group-hover:text-blue-700 transition-colors leading-none">
                    D-Care
                </span>
                <span class="text-xs font-semibold text-blue-600 tracking-widest uppercase mt-1">Admin</span>
            </div>
        </div>

        <!-- Menu Links Desktop -->
        <div class="hidden md:flex gap-6 lg:gap-8 text-sm font-semibold text-gray-800 items-center">
            <button onclick="navigateAdmin('home')" id="nav-home" class="relative overflow-hidden group pb-1 text-blue-600">
                <span class="transition-colors">Home</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transition-all"></span>
            </button>
            <button onclick="navigateAdmin('artikel')" id="nav-artikel" class="relative overflow-hidden group pb-1">
                <span class="group-hover:text-blue-600 transition-colors">Kelola Artikel</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
            </button>
            <button onclick="navigateAdmin('pengguna')" id="nav-pengguna" class="relative overflow-hidden group pb-1">
                <span class="group-hover:text-blue-600 transition-colors">Data Pengguna</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
            </button>
            
            <div class="w-px h-5 bg-gray-400 mx-1"></div>
            
            <button onclick="logoutAdmin()" class="relative overflow-hidden group pb-1 flex items-center gap-1 text-red-600 hover:text-red-700 transition-colors">
                <i class="fa-solid fa-arrow-right-from-bracket group-hover:-translate-x-1 transition-transform"></i>
                <span>Log Out</span>
            </button>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col w-full relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4">

        <!-- 1. HOME / DASHBOARD PANTAUAN -->
        <section id="view-home" class="admin-section animate-fade-in space-y-6 w-full">
            <div class="text-center md:text-left mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Dashboard Pantauan</h1>
                <p class="text-gray-600 mt-1 font-medium">Ringkasan aktivitas dan data kesehatan pengguna aplikasi D-Care.</p>
            </div>

            <!-- Stat Cards Grid (Tema Hijau/Kuning seperti User) -->
            <div class="bg-[#d5deac] p-6 rounded-[2rem] w-full shadow-lg border-b-4 border-r-4 border-[#b9c68c] transition-shadow duration-300">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-[#e4ebc5] rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:-translate-y-1 animate-slide-up" style="animation-delay: 0.1s;">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-semibold text-gray-600 mb-1">Total Pengguna Terdaftar</p>
                                <h3 class="text-4xl font-bold text-gray-800">1,248</h3>
                                <p class="text-xs font-bold text-green-700 mt-2 bg-green-100 w-max px-3 py-1 rounded-full"><i class="fa-solid fa-arrow-trend-up"></i> +12 bulan ini</p>
                            </div>
                            <div class="w-12 h-12 bg-white text-[#a6af77] rounded-xl flex items-center justify-center text-2xl shadow-inner">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-[#e4ebc5] rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:-translate-y-1 animate-slide-up" style="animation-delay: 0.2s;">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-semibold text-gray-600 mb-1">Total Artikel Edukasi</p>
                                <h3 class="text-4xl font-bold text-gray-800">45</h3>
                                <p class="text-xs font-bold text-blue-700 mt-2 bg-blue-100 w-max px-3 py-1 rounded-full"><i class="fa-solid fa-book-medical"></i> Dikelola Admin</p>
                            </div>
                            <div class="w-12 h-12 bg-white text-[#a6af77] rounded-xl flex items-center justify-center text-2xl shadow-inner">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-[#e4ebc5] rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:-translate-y-1 animate-slide-up" style="animation-delay: 0.3s;">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-semibold text-gray-600 mb-1">Peringatan Risiko Tinggi</p>
                                <h3 class="text-4xl font-bold text-gray-800">86</h3>
                                <p class="text-xs font-bold text-red-700 mt-2 bg-red-100 w-max px-3 py-1 rounded-full"><i class="fa-solid fa-circle-exclamation"></i> Cek Dini</p>
                            </div>
                            <div class="w-12 h-12 bg-white text-[#a6af77] rounded-xl flex items-center justify-center text-2xl shadow-inner">
                                <i class="fa-solid fa-heart-crack"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Monitoring Table (Tema Hijau Chatbot) -->
            <div class="bg-[#a5dbb7] rounded-[2rem] w-full shadow-lg border-b-4 border-r-4 border-[#8ebf9e] overflow-hidden flex flex-col transition-shadow animate-slide-up" style="animation-delay: 0.4s;">
                <!-- Header Tabel -->
                <div class="bg-[#8ebf9e] py-4 px-6 border-b border-[#7bab8a] flex justify-between items-center shadow-sm">
                    <h3 class="font-bold text-lg text-gray-800"><i class="fa-solid fa-wave-square text-gray-700 mr-2"></i> Pantauan Monitoring Terbaru</h3>
                    <button onclick="navigateAdmin('pengguna')" class="text-sm bg-white/50 px-3 py-1.5 rounded-full text-gray-800 font-semibold hover:bg-white transition-colors">Lihat Semua &rarr;</button>
                </div>
                
                <!-- Isi Tabel -->
                <div class="p-4 bg-white/30 backdrop-blur-sm">
                    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto custom-scrollbar">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider border-b border-gray-100">
                                        <th class="px-6 py-4 font-bold">Pengguna</th>
                                        <th class="px-6 py-4 font-bold">Gula Darah</th>
                                        <th class="px-6 py-4 font-bold">Tekanan Darah</th>
                                        <th class="px-6 py-4 font-bold">Tanggal Input</th>
                                        <th class="px-6 py-4 font-bold">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-50 text-sm font-medium">
                                    <tr class="hover:bg-green-50/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-gray-800">Budi Santoso</div>
                                            <div class="text-xs text-gray-500 font-normal">ID: USR-001</div>
                                        </td>
                                        <td class="px-6 py-4 font-bold text-gray-700">125 mg/dL</td>
                                        <td class="px-6 py-4 text-gray-600">120/80</td>
                                        <td class="px-6 py-4 text-gray-500 font-normal">29 Mei 2026, 08:30</td>
                                        <td class="px-6 py-4">
                                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold border border-green-200">Normal</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-green-50/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-gray-800">Siti Aminah</div>
                                            <div class="text-xs text-gray-500 font-normal">ID: USR-045</div>
                                        </td>
                                        <td class="px-6 py-4 font-bold text-red-500">180 mg/dL</td>
                                        <td class="px-6 py-4 text-gray-600">130/85</td>
                                        <td class="px-6 py-4 text-gray-500 font-normal">28 Mei 2026, 19:15</td>
                                        <td class="px-6 py-4">
                                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-bold border border-red-200">Tinggi</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-green-50/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-gray-800">Ahmad Fauzi</div>
                                            <div class="text-xs text-gray-500 font-normal">ID: USR-112</div>
                                        </td>
                                        <td class="px-6 py-4 font-bold text-gray-700">100 mg/dL</td>
                                        <td class="px-6 py-4 text-gray-600">110/75</td>
                                        <td class="px-6 py-4 text-gray-500 font-normal">28 Mei 2026, 07:00</td>
                                        <td class="px-6 py-4">
                                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold border border-green-200">Normal</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. KELOLA ARTIKEL / MANAJEMEN EDUKASI -->
        <section id="view-artikel" class="admin-section hidden animate-fade-in w-full">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6 px-2">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Manajemen Edukasi</h1>
                    <p class="text-gray-600 mt-1 font-medium">Kelola artikel, panduan, dan informasi edukasi untuk pengguna.</p>
                </div>
                <button onclick="openModalArtikel()" class="bg-[#6b4cde] text-white px-6 py-3 rounded-full font-bold hover:bg-purple-700 transition-all shadow-lg active:scale-95 flex items-center gap-2 hover:-translate-y-1">
                    <i class="fa-solid fa-plus-circle text-xl"></i> Tambah Artikel
                </button>
            </div>

            <!-- Menggunakan Box Pembungkus Tema Ungu seperti Cek Dini -->
            <div class="bg-[#9c99c7] p-6 md:p-8 rounded-[2rem] w-full shadow-lg">
                <!-- Grid Artikel -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Card Artikel 1 -->
                    <div class="bg-white rounded-3xl shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group flex flex-col border border-gray-100">
                        <div class="h-40 bg-[#f3cce3] relative overflow-hidden flex items-center justify-center">
                            <i class="fa-solid fa-cake-candles text-5xl text-orange-400 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-gray-800 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                                Pola Makan
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-xl text-gray-900 leading-snug mb-3 group-hover:text-purple-600 transition-colors">Mengenal Pantangan Makanan untuk Penderita</h3>
                            <p class="text-sm text-gray-600 line-clamp-3 mb-4 font-medium leading-relaxed">Hindari makanan manis, tinggi lemak, dan karbohidrat sederhana untuk menjaga kestabilan gula darah harian Anda.</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-xs font-bold text-gray-400"><i class="fa-regular fa-calendar mr-1"></i> 20 Mei 2026</span>
                                <div class="flex gap-2">
                                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 hover:bg-purple-100 hover:text-purple-600 flex items-center justify-center transition-colors shadow-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 hover:bg-red-100 hover:text-red-500 flex items-center justify-center transition-colors shadow-sm" title="Hapus">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Artikel 2 -->
                    <div class="bg-white rounded-3xl shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group flex flex-col border border-gray-100">
                        <div class="h-40 bg-teal-50 relative overflow-hidden flex items-center justify-center border-b-2 border-teal-100">
                            <i class="fa-solid fa-person-running text-5xl text-teal-500 group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-gray-800 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                                Aktivitas Fisik
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-xl text-gray-900 leading-snug mb-3 group-hover:text-purple-600 transition-colors">Olahraga Ringan 30 Menit Turunkan Risiko</h3>
                            <p class="text-sm text-gray-600 line-clamp-3 mb-4 font-medium leading-relaxed">Berjalan kaki, bersepeda santai, atau senam ringan sangat dianjurkan untuk membantu sensitivitas insulin.</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-xs font-bold text-gray-400"><i class="fa-regular fa-calendar mr-1"></i> 18 Mei 2026</span>
                                <div class="flex gap-2">
                                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 hover:bg-purple-100 hover:text-purple-600 flex items-center justify-center transition-colors shadow-sm" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 hover:bg-red-100 hover:text-red-500 flex items-center justify-center transition-colors shadow-sm" title="Hapus">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 3. DATA PENGGUNA -->
        <section id="view-pengguna" class="admin-section hidden animate-fade-in w-full">
            <div class="mb-6 px-2">
                <h1 class="text-3xl font-bold text-gray-900">Manajemen Data Pengguna</h1>
                <p class="text-gray-600 mt-1 font-medium">Daftar pengguna (Pasien/User) yang terdaftar dalam sistem D-Care.</p>
            </div>

            <!-- Menggunakan Box Pembungkus Tema Hijau Tua -->
            <div class="bg-[#93c4a2] p-6 md:p-8 rounded-[2rem] w-full shadow-lg border-b-4 border-r-4 border-[#7ea98b]">
                
                <!-- Toolbar Table -->
                <div class="flex flex-col md:flex-row justify-between gap-4 bg-white/40 backdrop-blur-sm p-4 rounded-[1.5rem] shadow-sm mb-6">
                    <div class="relative flex-1 max-w-md">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"></i>
                        <input type="text" placeholder="Cari nama, email, atau no HP..." class="w-full pl-12 pr-4 py-3 rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all text-sm font-medium text-gray-700">
                    </div>
                    <div class="flex gap-3">
                        <button class="bg-white text-gray-700 px-6 py-3 rounded-xl text-sm font-bold shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-filter text-[#93c4a2]"></i> Filter
                        </button>
                        <button class="bg-gray-800 text-white px-6 py-3 rounded-xl text-sm font-bold shadow-sm hover:bg-black hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-download"></i> Export
                        </button>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="overflow-x-auto custom-scrollbar">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider border-b border-gray-100">
                                    <th class="px-6 py-5 font-bold">ID User</th>
                                    <th class="px-6 py-5 font-bold">Info Pengguna</th>
                                    <th class="px-6 py-5 font-bold">Jenis Kelamin</th>
                                    <th class="px-6 py-5 font-bold">No HP</th>
                                    <th class="px-6 py-5 font-bold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm font-medium">
                                <!-- Row 1 -->
                                <tr class="hover:bg-green-50 transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-gray-400 font-bold">#USR-001</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-gray-800 text-base">Budi Santoso</div>
                                        <div class="text-xs text-gray-500 font-normal">budi.santoso@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">Laki-laki</td>
                                    <td class="px-6 py-4 text-gray-600">081234567890</td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="text-blue-600 bg-blue-50 px-4 py-2 rounded-lg hover:bg-blue-100 font-bold text-xs transition-colors shadow-sm">
                                            <i class="fa-solid fa-eye mr-1"></i> Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-green-50 transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-gray-400 font-bold">#USR-045</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-gray-800 text-base">Siti Aminah</div>
                                        <div class="text-xs text-gray-500 font-normal">siti.am@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">Perempuan</td>
                                    <td class="px-6 py-4 text-gray-600">085612341234</td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="text-blue-600 bg-blue-50 px-4 py-2 rounded-lg hover:bg-blue-100 font-bold text-xs transition-colors shadow-sm">
                                            <i class="fa-solid fa-eye mr-1"></i> Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-green-50 transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-gray-400 font-bold">#USR-112</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-gray-800 text-base">Ahmad Fauzi</div>
                                        <div class="text-xs text-gray-500 font-normal">ahmad.fzi@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">Laki-laki</td>
                                    <td class="px-6 py-4 text-gray-600">081198765432</td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="text-blue-600 bg-blue-50 px-4 py-2 rounded-lg hover:bg-blue-100 font-bold text-xs transition-colors shadow-sm">
                                            <i class="fa-solid fa-eye mr-1"></i> Detail
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination Mockup -->
                    <div class="bg-gray-50 px-6 py-4 flex items-center justify-between border-t border-gray-100">
                        <span class="text-xs font-semibold text-gray-500">Menampilkan 1-3 dari 1,248</span>
                        <div class="flex gap-2">
                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-lg text-gray-400 shadow-sm cursor-not-allowed text-sm"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="w-8 h-8 flex items-center justify-center bg-[#93c4a2] text-white rounded-lg shadow-sm font-bold text-sm">1</button>
                            <button class="w-8 h-8 flex items-center justify-center bg-white hover:bg-gray-100 rounded-lg text-gray-600 shadow-sm font-bold text-sm transition-colors">2</button>
                            <button class="w-8 h-8 flex items-center justify-center bg-white hover:bg-gray-100 rounded-lg text-gray-600 shadow-sm font-bold text-sm transition-colors"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER ADMIN -->
    <footer class="pb-8 pt-4 w-full flex justify-center mt-auto z-10 relative">
        <div class="bg-[#2a2424] text-gray-300 text-sm py-4 px-12 md:w-3/4 max-w-4xl rounded-2xl text-center shadow-lg">
            Copyright - 2026 D-Care Admin Portal - All rights reserved.
        </div>
    </footer>

    <!-- MODAL TAMBAH ARTIKEL -->
    <div id="modal-artikel" class="fixed inset-0 z-50 hidden flex justify-center items-start pt-10 px-4 pb-10 overflow-y-auto custom-scrollbar">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black/40 backdrop-blur-sm transition-opacity opacity-0" id="modal-backdrop" onclick="closeModalArtikel()"></div>
        
        <!-- Modal Content (Tema Ungu Cek Dini) -->
        <div class="bg-[#9c99c7] p-2 rounded-[2rem] w-full max-w-2xl relative z-10 transform scale-95 opacity-0 transition-all duration-300 shadow-2xl" id="modal-content">
            <div class="bg-white rounded-[1.8rem] overflow-hidden border border-gray-100">
                <div class="flex justify-between items-center p-6 md:p-8 border-b border-gray-100 bg-gray-50">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900"><i class="fa-solid fa-pen-to-square text-purple-600 mr-2"></i> Form Artikel Baru</h2>
                        <p class="text-sm text-gray-500 font-medium mt-1">Tambahkan materi edukasi kesehatan ke dalam sistem.</p>
                    </div>
                    <button onclick="closeModalArtikel()" class="text-gray-400 hover:text-red-500 transition-colors w-10 h-10 flex justify-center items-center rounded-xl bg-white shadow-sm hover:shadow-md">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>
                
                <form onsubmit="submitArtikel(event)" class="p-6 md:p-8 space-y-6">
                    <div>
                        <label class="block text-gray-900 font-bold mb-2">Judul Artikel</label>
                        <input type="text" required placeholder="Masukkan judul artikel" class="w-full px-5 py-3.5 rounded-xl border-none outline-none shadow-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-purple-200 transition-all text-gray-700">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">Kategori</label>
                            <div class="relative">
                                <select required class="w-full px-5 py-3.5 rounded-xl border-none outline-none appearance-none shadow-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-purple-200 transition-all text-gray-700 cursor-pointer font-medium">
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <option value="Pola Makan">Pola Makan</option>
                                    <option value="Aktivitas Fisik">Aktivitas Fisik</option>
                                    <option value="Obat-obatan">Obat-obatan</option>
                                    <option value="Pencegahan">Pencegahan Risiko</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-5 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">URL Gambar (Opsional)</label>
                            <input type="text" placeholder="https://..." class="w-full px-5 py-3.5 rounded-xl border-none outline-none shadow-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-purple-200 transition-all text-gray-700">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-900 font-bold mb-2">Isi Konten</label>
                        <textarea required rows="6" placeholder="Tuliskan isi edukasi di sini..." class="w-full px-5 py-3.5 rounded-xl border-none outline-none shadow-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-purple-200 transition-all text-gray-700 resize-y custom-scrollbar"></textarea>
                    </div>

                    <div class="pt-6 border-t border-gray-100 flex justify-end gap-4">
                        <button type="button" onclick="closeModalArtikel()" class="px-8 py-3.5 rounded-xl text-gray-700 font-bold bg-white border border-gray-200 hover:bg-gray-50 hover:shadow-sm transition-all active:scale-95">Batal</button>
                        <button type="submit" class="px-8 py-3.5 rounded-xl text-white font-bold bg-[#6b4cde] hover:bg-purple-700 shadow-md active:scale-95 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-save"></i> Simpan Artikel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Kotak Pesan Kustom (Pengganti Alert - Sesuai Tema User) -->
    <div id="custom-message-box" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40 backdrop-blur-sm opacity-0 transition-opacity duration-300">
        <div class="bg-white p-6 md:p-8 rounded-[2rem] shadow-2xl max-w-sm w-11/12 transform scale-95 transition-transform duration-300 flex flex-col items-center text-center border-b-4 border-blue-600">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
                <i class="fa-solid fa-check text-4xl text-green-500"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Berhasil!</h3>
            <p class="text-gray-600 mb-8 font-medium leading-relaxed" id="custom-message-text">Aksi berhasil dilakukan.</p>
            <button onclick="closeMessageBox()" class="bg-blue-600 text-white px-10 py-3 rounded-full font-bold hover:bg-blue-700 transition-all active:scale-95 shadow-md w-full">Tutup</button>
        </div>
    </div>

    <script>
        // Custom Message Box Logic (Konsisten dengan sisi User)
        function showMessageBox(message) {
            const modal = document.getElementById('custom-message-box');
            const textEl = document.getElementById('custom-message-text');
            textEl.innerText = message;
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.querySelector('div').classList.remove('scale-95');
                modal.querySelector('div').classList.add('scale-100');
            }, 10);
        }

        function closeMessageBox() {
            const modal = document.getElementById('custom-message-box');
            modal.classList.add('opacity-0');
            modal.querySelector('div').classList.remove('scale-100');
            modal.querySelector('div').classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Logika Navigasi Admin
        function navigateAdmin(viewId) {
            // Sembunyikan semua section
            document.querySelectorAll('.admin-section').forEach(el => {
                el.classList.add('hidden');
            });
            
            // Reset style Navbar tombol (Garis bawah animasi)
            document.querySelectorAll('nav button').forEach(btn => {
                if(btn.id && btn.id.startsWith('nav-')) {
                    btn.classList.remove('text-blue-600');
                    const spanLine = btn.querySelector('span:last-child');
                    if(spanLine) {
                        spanLine.className = 'absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full';
                    }
                }
            });

            // Tampilkan section yang dipilih
            const target = document.getElementById('view-' + viewId);
            if (target) {
                target.classList.remove('hidden');
            }

            // Aktifkan style tombol navbar yang dipilih
            const activeBtn = document.getElementById('nav-' + viewId);
            if (activeBtn) {
                activeBtn.classList.add('text-blue-600');
                const spanLine = activeBtn.querySelector('span:last-child');
                if(spanLine) {
                    spanLine.className = 'absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transition-all';
                }
            }

            // Update Background color based on view (Konsisten dengan sisi User)
            const body = document.getElementById('app-body');
            
            // Halaman dengan background Hijau Gradien
            if (viewId === 'home' || viewId === 'pengguna') {
                body.className = 'bg-view-green transition-colors duration-1000 min-h-screen flex flex-col text-slate-800';
            } 
            // Halaman dengan background Ungu Gradien
            else if (viewId === 'artikel') {
                body.className = 'bg-view-purple transition-colors duration-1000 min-h-screen flex flex-col text-slate-800';
            }

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Logika Modal Form Artikel
        function openModalArtikel() {
            const modal = document.getElementById('modal-artikel');
            const backdrop = document.getElementById('modal-backdrop');
            const content = document.getElementById('modal-content');
            
            modal.classList.remove('hidden');
            
            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
                content.classList.remove('opacity-0', 'scale-95');
                content.classList.add('opacity-100', 'scale-100');
            }, 10);
        }

        function closeModalArtikel() {
            const modal = document.getElementById('modal-artikel');
            const backdrop = document.getElementById('modal-backdrop');
            const content = document.getElementById('modal-content');
            
            backdrop.classList.add('opacity-0');
            content.classList.remove('opacity-100', 'scale-100');
            content.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); 
        }

        // Submit Form Artikel 
        function submitArtikel(event) {
            event.preventDefault(); 
            closeModalArtikel();
            showMessageBox("Artikel edukasi berhasil ditambahkan ke database.");
        }

        // Log Out 
        function logoutAdmin() {
            // Karena tidak boleh pakai alert/confirm native, kita bisa modifikasi sedikit message box atau langsung kembali ke login
            // Untuk simulasi ini, kita tampilkan message box sukses dan redirect fiktif
            showMessageBox("Sesi Admin telah diakhiri. Mengarahkan ke halaman login...");
            // window.location.href = 'index.html'; // Contoh redirect
        }
    </script>
</body>
</html>