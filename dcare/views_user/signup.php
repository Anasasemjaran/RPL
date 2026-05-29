<section id="view-signup" class="view-section hidden flex-col items-center justify-center flex-1 px-4 py-8 z-10 animate-fade-in">
            <div class="bg-[#9c99c7] p-8 md:p-12 rounded-[2.5rem] w-full max-w-md shadow-2xl hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] transition-shadow duration-300">
                <!-- Toggle -->
                <div class="flex justify-center gap-4 mb-8">
                    <button onclick="navigateTo('login')" class="bg-white/40 px-8 py-2 rounded-full font-bold text-gray-700 hover:bg-white/70 hover:shadow-md transition-all">LOGIN</button>
                    <button class="bg-white px-8 py-2 rounded-full font-bold shadow-md transform hover:scale-105 transition-transform text-gray-800">SIGNUP</button>
                </div>

                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="flex-1">
                            <label class="block text-gray-900 font-semibold mb-1.5 text-sm">First Name</label>
                            <input type="text" placeholder="Input your first name......" class="w-full px-4 py-3 text-sm rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all" />
                        </div>
                        <div class="flex-1">
                            <label class="block text-gray-900 font-semibold mb-1.5 text-sm">Last Name</label>
                            <input type="text" placeholder="Input your last name......" class="w-full px-4 py-3 text-sm rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-900 font-semibold mb-1.5 text-sm">Email Address</label>
                        <input type="email" placeholder="Input your email address......" class="w-full px-4 py-3 text-sm rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all" />
                    </div>
                    <div>
                        <label class="block text-gray-900 font-semibold mb-1.5 text-sm">Password</label>
                        <div class="relative">
                            <input type="password" placeholder="Input your password......" class="w-full px-4 py-3 text-sm rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all pr-10" />
                            <i class="fa-solid fa-eye-slash absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer hover:text-gray-800 transition-colors"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-900 font-semibold mb-1.5 text-sm">Confirm Password</label>
                        <div class="relative">
                            <input type="password" placeholder="Confirm your password......" class="w-full px-4 py-3 text-sm rounded-xl border-none outline-none shadow-inner bg-white/90 focus:bg-white transition-all pr-10" />
                            <i class="fa-solid fa-eye-slash absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer hover:text-gray-800 transition-colors"></i>
                        </div>
                    </div>
                    <div class="pt-6 flex justify-center">
                        <button onclick="navigateTo('login')" class="border-2 border-white text-gray-900 font-bold px-12 py-3 rounded-full hover:bg-white hover:shadow-lg active:scale-95 hover:-translate-y-1 transition-all duration-200">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </section>