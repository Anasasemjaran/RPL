<nav class="flex justify-between items-center py-6 px-4 md:px-8 max-w-6xl mx-auto w-full z-10 relative">
    <div class="flex items-center gap-2 cursor-pointer group" onclick="navigateTo('home')">
        <div class="bg-white p-2 rounded-lg shadow-sm group-hover:shadow-md transition-all group-hover:-rotate-3">
            <i class="fa-solid fa-heart-pulse text-blue-700 text-2xl"></i>
        </div>
        <span class="text-2xl font-bold text-blue-900 tracking-wider group-hover:text-blue-700 transition-colors">
            D-Care
        </span>
    </div>

    <div class="hidden md:flex gap-6 lg:gap-8 text-sm font-semibold text-gray-800">
        <button onclick="navigateTo('home')" class="relative overflow-hidden group pb-1">
            <span class="group-hover:text-blue-600 transition-colors">Home</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
        </button>
        <button onclick="navigateTo('cekDini')" class="relative overflow-hidden group pb-1">
            <span class="group-hover:text-blue-600 transition-colors">Cek Dini</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
        </button>
        <button onclick="navigateTo('monitoring')" class="relative overflow-hidden group pb-1">
            <span class="group-hover:text-blue-600 transition-colors">Monitoring</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
        </button>
        <button onclick="navigateTo('riwayat')" class="relative overflow-hidden group pb-1">
            <span class="group-hover:text-blue-600 transition-colors">Riwayat</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
        </button>
        <button onclick="navigateTo('chatbot')" class="relative overflow-hidden group pb-1">
            <span class="group-hover:text-blue-600 transition-colors">Chatbot</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
        </button>
        <button onclick="navigateTo('login')" class="bg-[#6b4cde] text-white px-5 py-1.5 ml-2 rounded-full font-bold hover:bg-purple-700 transition-all shadow-md active:scale-95 flex items-center gap-2">
            <i class="fa-solid fa-right-to-bracket"></i> Login
        </button>
    </div>
</nav>