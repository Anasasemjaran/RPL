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
