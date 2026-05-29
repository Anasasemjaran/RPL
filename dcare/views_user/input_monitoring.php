<section id="view-inputMonitoring" class="view-section hidden flex-col items-center flex-1 px-4 w-full max-w-3xl mx-auto py-6 animate-fade-in">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Input Data Harian</h1>
                <p class="text-gray-600 mt-1 font-medium">Catat parameter kesehatan Anda hari ini untuk pemantauan.</p>
            </div>

            <div class="bg-[#d5deac] p-8 md:p-10 rounded-[2rem] w-full shadow-2xl border-b-4 border-r-4 border-[#b9c68c]">
                <form onsubmit="simpanDataMonitoring(event)" class="space-y-6">
                    
                    <!-- Input 1 -->
                    <div class="animate-slide-up" style="animation-delay: 0.1s">
                        <label class="block text-gray-800 font-bold mb-2"><i class="fa-solid fa-droplet text-red-500 mr-2"></i>Kadar Gula Darah (mg/dL)</label>
                        <input type="number" required placeholder="Contoh: 120" class="w-full px-5 py-3.5 rounded-xl border-none outline-none bg-white shadow-sm focus:ring-4 focus:ring-white/50 transition-all text-gray-700" />
                    </div>

                    <!-- Input 2 -->
                    <div class="animate-slide-up" style="animation-delay: 0.2s">
                        <label class="block text-gray-800 font-bold mb-2"><i class="fa-solid fa-glass-water text-blue-500 mr-2"></i>Konsumsi Air Putih (Gelas)</label>
                        <input type="number" required placeholder="Contoh: 8" class="w-full px-5 py-3.5 rounded-xl border-none outline-none bg-white shadow-sm focus:ring-4 focus:ring-white/50 transition-all text-gray-700" />
                    </div>

                    <!-- Input 3 -->
                    <div class="animate-slide-up" style="animation-delay: 0.3s">
                        <label class="block text-gray-800 font-bold mb-2"><i class="fa-solid fa-person-running text-orange-500 mr-2"></i>Durasi Olahraga (Menit)</label>
                        <input type="number" required placeholder="Contoh: 30" class="w-full px-5 py-3.5 rounded-xl border-none outline-none bg-white shadow-sm focus:ring-4 focus:ring-white/50 transition-all text-gray-700" />
                    </div>

                    <!-- Input 4 -->
                    <div class="animate-slide-up" style="animation-delay: 0.4s">
                        <label class="block text-gray-800 font-bold mb-2"><i class="fa-solid fa-notes-medical text-green-600 mr-2"></i>Keluhan Kesehatan (Opsional)</label>
                        <textarea rows="4" placeholder="Contoh: Merasa sedikit pusing setelah makan siang, atau pandangan agak kabur..." class="w-full px-5 py-3.5 rounded-xl border-none outline-none bg-white shadow-sm focus:ring-4 focus:ring-white/50 transition-all text-gray-700 resize-none"></textarea>
                    </div>
                    
                    <div class="pt-6 flex flex-col md:flex-row gap-4 animate-slide-up" style="animation-delay: 0.5s">
                        <button type="button" onclick="navigateTo('monitoring')" class="flex-1 bg-white text-gray-800 font-bold py-4 rounded-xl flex items-center justify-center gap-2 hover:bg-gray-50 transition-all hover:shadow-md active:scale-95 border border-gray-200">
                            Batal
                        </button>
                        <button type="submit" class="flex-1 bg-[#6b4cde] text-white font-bold py-4 rounded-xl flex items-center justify-center gap-2 hover:bg-purple-700 transition-all hover:shadow-lg active:scale-95">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan Data Harian
                        </button>
                    </div>
                </form>
            </div>
        </section>
