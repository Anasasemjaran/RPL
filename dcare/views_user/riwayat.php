<section id="view-riwayat" class="view-section hidden flex-col items-center flex-1 px-4 w-full max-w-4xl mx-auto py-6 animate-fade-in">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Riwayat Pemeriksaan</h1>
                <p class="text-gray-600 mt-1 font-medium">Daftar rekam medis dan hasil screening terdahulu Anda.</p>
            </div>

            <div class="bg-[#a5dbb7] p-6 md:p-8 rounded-[2rem] w-full shadow-xl border-b-4 border-r-4 border-[#8ebf9e] space-y-5">
                
                <!-- History Card 1 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-l-4 border-orange-400 hover:-translate-y-1">
                    <div>
                        <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                            <i class="fa-solid fa-file-medical text-orange-400"></i> Cek Dini Risiko Diabetes
                        </h3>
                        <p class="text-sm text-gray-500 mt-1"><i class="fa-regular fa-calendar-days mr-1"></i> 25 Mei 2026, 14:30 WIB</p>
                    </div>
                    <div class="flex flex-col md:items-end gap-2 w-full md:w-auto">
                        <span class="bg-orange-100 text-orange-600 px-4 py-1.5 rounded-full text-sm font-bold border border-orange-200 text-center w-full md:w-auto">Risiko Sedang (65%)</span>
                        <button onclick="navigateTo('hasilAnalisis')" class="text-blue-600 hover:text-blue-800 font-semibold text-sm underline md:mr-2">Lihat Laporan Lengkap</button>
                    </div>
                </div>

                <!-- History Card 2 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-l-4 border-green-500 hover:-translate-y-1">
                    <div>
                        <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                            <i class="fa-solid fa-file-medical text-green-500"></i> Cek Dini Risiko Diabetes
                        </h3>
                        <p class="text-sm text-gray-500 mt-1"><i class="fa-regular fa-calendar-days mr-1"></i> 10 April 2026, 09:15 WIB</p>
                    </div>
                    <div class="flex flex-col md:items-end gap-2 w-full md:w-auto">
                        <span class="bg-green-100 text-green-700 px-4 py-1.5 rounded-full text-sm font-bold border border-green-200 text-center w-full md:w-auto">Risiko Rendah (30%)</span>
                        <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm underline md:mr-2">Lihat Laporan Lengkap</button>
                    </div>
                </div>

                 <!-- History Card 3 (Data Monitoring Harian) -->
                 <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-l-4 border-blue-400 hover:-translate-y-1 opacity-80">
                    <div>
                        <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                            <i class="fa-solid fa-clipboard-check text-blue-400"></i> Data Monitoring Harian
                        </h3>
                        <p class="text-sm text-gray-500 mt-1"><i class="fa-regular fa-calendar-days mr-1"></i> 24 Mei 2026, 20:00 WIB</p>
                        <p class="text-xs text-gray-600 mt-2 bg-gray-50 p-2 rounded w-full md:max-w-md border border-gray-100">Gula: 110 mg/dL | Air: 7 Gelas | Keluhan: Tidak ada</p>
                    </div>
                    <div class="flex flex-col md:items-end gap-2 w-full md:w-auto">
                        <span class="bg-gray-100 text-gray-600 px-4 py-1.5 rounded-full text-sm font-bold border border-gray-200 text-center w-full md:w-auto"><i class="fa-solid fa-check"></i> Tersimpan</span>
                    </div>
                </div>

            </div>
        </section>