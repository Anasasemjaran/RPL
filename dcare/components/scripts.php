<script>
        /* =============== JAVASCRIPT LOGIC =============== */
        
        // Custom Message Box Logic
        function showMessageBox(message) {
            const modal = document.getElementById('custom-message-box');
            const textEl = document.getElementById('custom-message-text');
            textEl.innerText = message;
            
            modal.classList.remove('hidden');
            // Sedikit delay agar transisi CSS berjalan
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

        // Fitur Download File Hasil Analisis
        function downloadHasil() {
            const content = `HASIL ANALISIS RISIKO DIABETES - D-CARE\n` +
                            `------------------------------------------\n` +
                            `Skor Risiko: 65% (Risiko Sedang)\n\n` +
                            `Ringkasan Analisis:\n` +
                            `- Memiliki riwayat keluarga dengan diabetes.\n` +
                            `- Sering merasa haus dari biasanya.\n` +
                            `- Sering terbangun di malam hari untuk buang air kecil.\n` +
                            `- Merasa mudah lapar meskipun sudah cukup makan.\n` +
                            `- Memiliki luka yang sulit sembuh.\n\n` +
                            `Catatan:\n` +
                            `Hasil ini bukan diagnosis medis. Konsultasikan dengan dokter.\n` +
                            `------------------------------------------\n` +
                            `D-Care App © 2026`;

            const blob = new Blob([content], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Hasil_Analisis_DCare.txt';
            document.body.appendChild(a);
            a.click(); 
            
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            showMessageBox("Laporan Hasil_Analisis_DCare.txt berhasil diunduh ke perangkat Anda.");
        }

        // Fungsi Simpan Data Monitoring
        function simpanDataMonitoring(event) {
            event.preventDefault(); // Mencegah reload halaman
            showMessageBox("Data parameter kesehatan harian Anda berhasil disimpan dan dienkripsi dengan aman.");
            
            // Opsional: Setelah 2 detik pindah kembali ke menu monitoring
            setTimeout(() => {
                closeMessageBox();
                navigateTo('monitoring');
            }, 2500);
        }

        // Logic untuk mengganti halaman (View)
        function navigateTo(viewId) {
            // Sembunyikan semua section
            document.querySelectorAll('.view-section').forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('flex');
            });

            // Tampilkan section yang dituju
            const target = document.getElementById('view-' + viewId);
            if (target) {
                target.classList.remove('hidden');
                target.classList.add('flex');
            }

            // Update Background color based on view
            const body = document.getElementById('app-body');
            
            // Halaman-halaman dengan background hijau
            if (viewId === 'login' || viewId === 'chatbot' || viewId === 'monitoring' || viewId === 'riwayat' || viewId === 'inputMonitoring') {
                body.className = 'bg-view-green transition-colors duration-1000 min-h-screen flex flex-col';
            } 
            // Halaman-halaman dengan background ungu
            else if (viewId === 'signup' || viewId === 'cekDini' || viewId === 'home' || viewId === 'hasilAnalisis') {
                body.className = 'bg-view-purple transition-colors duration-1000 min-h-screen flex flex-col';
            }
            
            // Scroll to top smoothly
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Jalankan halaman Home (Edukasi) sebagai default saat pertama dimuat
        document.addEventListener('DOMContentLoaded', () => {
            navigateTo('home');
        });
    </script>