<section id="view-chatbot" class="view-section hidden flex-col items-center flex-1 px-4 w-full max-w-4xl mx-auto py-6 animate-fade-in">
            <div class="bg-[#a5dbb7] rounded-[2rem] w-full shadow-2xl border-b-4 border-r-4 border-[#8ebf9e] overflow-hidden flex flex-col transition-shadow hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                
                <!-- Header -->
                <div class="bg-[#8ebf9e] py-5 px-8 border-b border-[#7bab8a] flex items-center justify-center shadow-sm">
                    <h1 class="text-2xl font-bold text-gray-800 tracking-wide flex items-center gap-2">
                        <i class="fa-solid fa-robot text-gray-700"></i> Chat Bot
                    </h1>
                </div>

                <!-- Chat Messages Area -->
                <div class="flex-1 p-6 md:p-8 space-y-6 min-h-[400px] max-h-[500px] overflow-y-auto bg-white/30 backdrop-blur-sm scroll-smooth">
                    
                    <!-- Bot Message 1 -->
                    <div class="flex items-start gap-4 animate-slide-up" style="animation-delay: 0.1s">
                        <div class="w-12 h-12 rounded-full bg-[#bc705b] border-2 border-white shadow-md flex items-center justify-center flex-shrink-0 mt-1 hover:scale-110 transition-transform">
                            <i class="fa-solid fa-user-nurse text-white text-xl"></i>
                        </div>
                        <div class="bg-white px-6 py-4 rounded-2xl rounded-tl-none shadow-md max-w-[85%] relative hover:shadow-lg transition-shadow">
                            <div class="absolute w-4 h-4 bg-white -left-2 top-0 transform rotate-45"></div>
                            <p class="text-gray-800 leading-relaxed font-medium">
                                Halo! Saya chatbot kesehatan <span class="inline-block animate-bounce">👋</span><br/>
                                Saya bisa membantu informasi seputar diabetes melitus.<br/>
                                Mau tanya apa hari ini?
                            </p>
                        </div>
                    </div>

                    <!-- User Message 1 -->
                    <div class="flex items-start gap-4 justify-end animate-slide-up" style="animation-delay: 0.6s">
                        <div class="bg-blue-500 px-6 py-4 rounded-2xl rounded-tr-none shadow-md max-w-[85%] relative hover:shadow-lg transition-shadow text-white">
                            <div class="absolute w-4 h-4 bg-blue-500 -right-2 top-0 transform rotate-45"></div>
                            <p class="leading-relaxed font-medium">
                                Bagaimana cara menurunkan gula darah?
                            </p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-blue-800 border-2 border-white shadow-md flex items-center justify-center flex-shrink-0 mt-1 hover:scale-110 transition-transform">
                            <i class="fa-solid fa-user text-white text-xl"></i>
                        </div>
                    </div>

                    <!-- Bot Message 2 -->
                    <div class="flex items-start gap-4 animate-slide-up" style="animation-delay: 1.2s">
                        <div class="w-12 h-12 rounded-full bg-[#bc705b] border-2 border-white shadow-md flex items-center justify-center flex-shrink-0 mt-1 hover:scale-110 transition-transform">
                            <i class="fa-solid fa-user-nurse text-white text-xl"></i>
                        </div>
                        <div class="bg-white px-6 py-5 rounded-2xl rounded-tl-none shadow-md max-w-[85%] relative hover:shadow-lg transition-shadow">
                            <div class="absolute w-4 h-4 bg-white -left-2 top-0 transform rotate-45"></div>
                            <p class="text-gray-800 leading-relaxed font-medium mb-3">
                                Untuk membantu menurunkan gula darah, kamu bisa:
                            </p>
                            <ul class="space-y-2 text-gray-700 font-medium">
                                <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-[8px] text-[#bc705b]"></i> Mengurangi makanan manis</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-[8px] text-[#bc705b]"></i> Rutin olahraga ringan</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-[8px] text-[#bc705b]"></i> Minum air putih yang cukup</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-[8px] text-[#bc705b]"></i> Mengatur pola makan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Fake Chat Input -->
                <div class="bg-white p-4 flex items-center gap-4 border-t border-[#8ebf9e]/50">
                    <button class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-paperclip text-xl"></i></button>
                    <input type="text" placeholder="Ketik pesan Anda..." class="flex-1 bg-gray-100 rounded-full px-5 py-3 outline-none focus:ring-2 focus:ring-[#8ebf9e] transition-all" />
                    <button class="bg-[#bc705b] text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-[#a6624e] hover:shadow-md active:scale-90 transition-all">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </section>