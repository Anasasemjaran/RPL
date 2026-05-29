<section id="view-hasilAnalisis" class="view-section hidden flex-col items-center flex-1 px-4 w-full max-w-5xl mx-auto py-4 animate-fade-in">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Hasil Analisis Risiko Diabetes</h1>
                <p class="text-gray-600 mt-1 font-medium">Berdasarkan jawaban yang Anda isi, berikut hasil awal kondisi anda</p>
            </div>

            <div class="bg-[#9c99c7] p-6 md:p-8 rounded-[2rem] w-full shadow-lg space-y-6">
                
                <!-- Kotak Atas: Skor Risiko -->
                <div class="bg-white p-8 rounded-[1.8rem] flex flex-col md:flex-row items-center justify-between shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="flex-1 flex justify-center mb-6 md:mb-0 relative z-10">
                        <div class="w-40 h-40 bg-[#fff8db] rounded-full flex flex-col items-center justify-center shadow-inner group-hover:scale-105 transition-transform duration-300">
                            <i class="fa-solid fa-shield-cat text-6xl text-[#f39c12] mb-2"></i>
                            <span class="text-[#f39c12] font-semibold text-sm">Risiko Sedang</span>
                        </div>
                    </div>
                    
                    <div class="flex-1 text-center md:text-left md:px-8 relative z-10">
                        <h3 class="text-gray-800 font-bold text-xl">Skor Risiko Diabetes Anda</h3>
                        <h2 class="text-8xl font-bold text-[#f39c12] my-2 drop-shadow-sm">65%</h2>
                        <p class="text-gray-600 text-sm leading-relaxed">Anda memiliki beberapa faktor risiko diabetes dan disarankan melakukan pemeriksaan lebih lanjut</p>
                    </div>
                    
                    <div class="flex-1 hidden md:flex justify-center relative z-10">
                        <!-- Icon Dokumen Kanan -->
                        <div class="relative group-hover:scale-105 transition-transform duration-500">
                            <i class="fa-regular fa-file text-8xl text-purple-300/50"></i>
                            <i class="fa-solid fa-check text-5xl absolute -bottom-2 -right-4 text-purple-600"></i>
                        </div>
                    </div>
                </div>

                <!-- Kotak Tengah: 2 Kolom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kiri: Ringkasan Analisis -->
                    <div class="bg-white p-6 md:p-8 rounded-[1.8rem] shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-gray-800 font-bold text-lg mb-6 flex items-center gap-3 border-b pb-3 border-gray-100">
                            <i class="fa-solid fa-list-check text-purple-600 text-xl"></i> Ringkasan Analisis
                        </h3>
                        <ul class="space-y-4 text-sm text-gray-700 font-medium">
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-users text-purple-600 mt-1 text-lg w-5 text-center"></i> 
                                <span>Anda memiliki riwayat keluarga dengan diabetes.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-glass-water text-purple-600 mt-1 text-lg w-5 text-center"></i> 
                                <span>Anda sering merasa haus dari biasanya (Polidipsia).</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-toilet text-purple-600 mt-1 text-lg w-5 text-center"></i> 
                                <span>Anda sering terbangun di malam hari untuk buang air kecil (Poliuria).</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-utensils text-purple-600 mt-1 text-lg w-5 text-center"></i> 
                                <span>Anda merasa mudah lapar meskipun sudah cukup makan (Polifagia).</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-band-aid text-purple-600 mt-1 text-lg w-5 text-center"></i> 
                                <span>Anda memiliki luka yang sulit sembuh.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Kanan: Rekomendasi -->
                    <div class="bg-white p-6 md:p-8 rounded-[1.8rem] shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-gray-800 font-bold text-lg mb-6 flex items-center gap-3 border-b pb-3 border-gray-100">
                            <i class="fa-solid fa-lightbulb text-purple-600 text-xl"></i> Rekomendasi Untuk Anda
                        </h3>
                        <ul class="space-y-5 text-sm text-gray-700 font-medium">
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-check text-purple-600 mt-0.5 text-lg font-bold"></i> 
                                <span>Kurangi konsumsi makanan dan minuman manis.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-check text-purple-600 mt-0.5 text-lg font-bold"></i> 
                                <span>Rutin berolahraga minimal 30 menit setiap hari.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-check text-purple-600 mt-0.5 text-lg font-bold"></i> 
                                <span>Perbanyak minum air putih.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-check text-purple-600 mt-0.5 text-lg font-bold"></i> 
                                <span>Lakukan pemeriksaan gula darah di fasilitas kesehatan.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-check text-purple-600 mt-0.5 text-lg font-bold"></i> 
                                <span>Jaga Pola tidur dan berat badan ideal.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kotak Bawah: Catatan Penting -->
                <div class="bg-white p-5 rounded-2xl shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
                    <div class="bg-purple-600 text-white w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm">
                        <i class="fa-solid fa-exclamation font-bold text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Catatan Penting</h4>
                        <p class="text-gray-600 text-sm mt-1 leading-relaxed">Hasil ini bukan merupakan hasil diagnosis medis. Untuk hasil yang lebih baik, Silahkan konsultasikan dengan dokter atau tenaga kesehatan professional.</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row gap-4 pt-2">
                    <button onclick="navigateTo('cekDini')" class="flex-1 bg-white text-gray-800 font-bold py-4 rounded-xl flex items-center justify-center gap-3 hover:bg-gray-50 transition-all hover:shadow-lg active:scale-95 group border border-gray-100">
                        <i class="fa-solid fa-rotate-left text-purple-600 text-xl group-hover:-rotate-90 transition-transform duration-500"></i> Cek Ulang
                    </button>
                    <button onclick="downloadHasil()" class="flex-1 bg-[#6b4cde] text-white font-bold py-4 rounded-xl flex items-center justify-center gap-3 hover:bg-purple-700 transition-all hover:shadow-lg active:scale-95 group">
                        <i class="fa-solid fa-download text-xl group-hover:translate-y-1 transition-transform"></i> Download Hasil
                    </button>
                </div>
            </div>
        </section>