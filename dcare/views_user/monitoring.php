<section id="view-monitoring" class="view-section hidden flex-col items-center flex-1 px-4 w-full max-w-5xl mx-auto py-6 animate-fade-in">
            <!-- Header Top -->
            <div class="w-full flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
                <!-- Title Badge -->
                <div class="bg-[#b3be93] px-12 py-3 rounded-full shadow-md border border-[#a2ad83] transform hover:scale-105 transition-transform cursor-default">
                    <h1 class="text-3xl font-semibold text-gray-800">Monitoring Kesehatan</h1>
                </div>
                <!-- Tombol Input Data Harian -->
                <button onclick="navigateTo('inputMonitoring')" class="bg-[#6b4cde] text-white px-6 py-3 rounded-full font-bold hover:bg-purple-700 transition-all shadow-lg active:scale-95 flex items-center gap-2 hover:-translate-y-1">
                    <i class="fa-solid fa-plus-circle text-xl"></i> Input Data Harian
                </button>
            </div>

            <div class="bg-[#d5deac] p-6 md:p-8 rounded-[2rem] w-full shadow-xl hover:shadow-2xl flex flex-col md:flex-row gap-6 border-b-4 border-r-4 border-[#b9c68c] transition-shadow duration-300">
                
                <!-- Left Side Placeholder -->
                <div class="bg-[#c2cc8d] w-full md:w-1/3 rounded-[1.5rem] min-h-[300px] shadow-inner flex flex-col items-center justify-center hover:bg-[#b8c283] transition-colors group cursor-pointer border-2 border-dashed border-[#a6af77]">
                   <i class="fa-regular fa-image text-5xl text-[#a6af77] group-hover:scale-125 transition-transform duration-300"></i>
                   <p class="text-[#8c9462] font-semibold mt-4">Foto Profil / Data</p>
                </div>

                <!-- Middle Stats -->
                <div class="flex flex-col gap-4 flex-1">
                    <!-- Air Minum -->
                    <div class="bg-[#e4ebc5] p-5 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <p class="text-gray-800 font-semibold text-sm">Air Minum</p>
                        <p class="text-gray-800 font-bold mb-3 text-xl">5 / 8 Gelas</p>
                        <div class="flex items-center gap-3">
                            <span class="font-bold text-gray-800">[</span>
                            <div class="flex-1 bg-white h-5 w-full rounded-sm overflow-hidden flex border border-gray-300 shadow-inner">
                                <div class="bg-gray-800 w-[60%] h-full hover:bg-black transition-colors"></div>
                                <div class="bg-[#c5d0a5] pattern-dots w-[40%] h-full opacity-60"></div>
                            </div>
                            <span class="font-bold text-gray-800">] 60%</span>
                        </div>
                    </div>

                    <!-- Olahraga -->
                    <div class="bg-[#e4ebc5] p-5 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <p class="text-gray-800 font-semibold text-sm">Olahraga</p>
                        <p class="text-gray-800 font-bold mb-3 text-xl">20 / 30 Menit</p>
                        <div class="flex items-center gap-3">
                            <span class="font-bold text-gray-800">[</span>
                            <div class="flex-1 bg-white h-5 w-full rounded-sm overflow-hidden flex border border-gray-300 shadow-inner">
                                <div class="bg-gray-800 w-[70%] h-full hover:bg-black transition-colors"></div>
                                <div class="bg-[#c5d0a5] pattern-dots w-[30%] h-full opacity-60"></div>
                            </div>
                            <span class="font-bold text-gray-800">] 70%</span>
                        </div>
                    </div>

                    <!-- Target Gula -->
                    <div class="bg-[#e4ebc5] p-5 rounded-2xl shadow-sm h-full flex flex-col justify-center hover:shadow-md hover:-translate-y-1 transition-all">
                        <p class="text-gray-800 font-semibold text-sm">Target Gula</p>
                        <p class="text-gray-800 font-bold text-2xl mt-1">&lt; 140 mg/dL</p>
                        <p class="text-green-700 font-bold mt-2 bg-green-100 w-max px-3 py-1 rounded-full text-sm flex items-center gap-1">
                            <i class="fa-solid fa-circle-check"></i> Status: Aman
                        </p>
                    </div>
                </div>

                <!-- Right Chart -->
                <div class="bg-white p-6 rounded-[1.5rem] w-full md:w-1/3 flex flex-col items-center justify-between shadow-sm min-h-[300px] hover:shadow-md transition-shadow">
                    <h3 class="font-bold text-gray-800 mb-6 text-lg">Grafik Perkembangan</h3>
                    
                    <div class="flex items-end justify-around w-full h-48 border-b-2 border-gray-200 gap-2 pb-1 mt-auto">
                        <!-- Bar 1 -->
                        <div class="w-full bg-pink-200 h-[40%] rounded-t flex items-end justify-center group relative hover:h-[45%] hover:bg-pink-300 transition-all cursor-pointer">
                            <span class="opacity-0 group-hover:opacity-100 absolute -top-8 text-xs font-bold bg-gray-800 text-white px-2 py-1 rounded transition-opacity">40%</span>
                        </div>
                        <!-- Bar 2 -->
                        <div class="w-full bg-pink-300 h-[70%] rounded-t flex items-end justify-center group relative hover:h-[75%] hover:bg-pink-400 transition-all cursor-pointer">
                            <span class="opacity-0 group-hover:opacity-100 absolute -top-8 text-xs font-bold bg-gray-800 text-white px-2 py-1 rounded transition-opacity">70%</span>
                        </div>
                        <!-- Bar 3 -->
                        <div class="w-full bg-pink-200 h-[50%] rounded-t flex items-end justify-center group relative hover:h-[55%] hover:bg-pink-300 transition-all cursor-pointer">
                            <span class="opacity-0 group-hover:opacity-100 absolute -top-8 text-xs font-bold bg-gray-800 text-white px-2 py-1 rounded transition-opacity">50%</span>
                        </div>
                        <!-- Bar 4 -->
                        <div class="w-full bg-pink-300 h-[30%] rounded-t flex items-end justify-center group relative hover:h-[35%] hover:bg-pink-400 transition-all cursor-pointer">
                            <span class="opacity-0 group-hover:opacity-100 absolute -top-8 text-xs font-bold bg-gray-800 text-white px-2 py-1 rounded transition-opacity">30%</span>
                        </div>
                        <!-- Bar 5 -->
                        <div class="w-full bg-pink-200 h-[80%] rounded-t flex items-end justify-center group relative hover:h-[85%] hover:bg-pink-300 transition-all cursor-pointer">
                            <span class="opacity-0 group-hover:opacity-100 absolute -top-8 text-xs font-bold bg-gray-800 text-white px-2 py-1 rounded transition-opacity">80%</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>