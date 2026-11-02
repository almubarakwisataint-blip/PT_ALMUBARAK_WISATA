<script setup>
const whatsappUrl = "https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20konsultasi%20jadwal%20dan%20pilihan%20paket%20ibadah";
</script>

<template>
    <!-- CALL TO ACTION (CTA) BANNER MATCHING OFFICIAL SPEC -->
    <section class="w-full py-12 sm:py-16 bg-gradient-to-r from-[#005138] via-[#00583d] to-[#004832] text-white relative overflow-hidden">
        <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-white/5 pointer-events-none blur-3xl"></div>
        <div class="absolute left-10 top-0 w-72 h-72 rounded-full bg-white/5 pointer-events-none blur-2xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
            <!-- Left Text Content -->
            <div class="max-w-2xl text-center lg:text-left">
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
                    <span class="material-symbols-outlined text-[16px] text-emerald-200">support_agent</span>
                    Konsultasi Haji &amp; Umrah Gratis Tanpa Komitmen
                </span>
                <h2 class="font-headline-xl text-[28px] sm:text-[38px] lg:text-[44px] font-extrabold tracking-tight text-white leading-tight">
                    Masih Bingung Menentukan Jadwal &amp; Pilihan Paket?
                </h2>
                <p class="font-body-lg text-white/90 text-sm sm:text-base lg:text-[17px] mt-3 leading-relaxed">
                    Konsultan ibadah kami siap membantu menghitung estimasi biaya, pemilihan tipe kamar (Double/Triple/Quad), dan pengurusan paspor &amp; vaksinasi secara komprehensif.
                </p>
            </div>

            <!-- Right WhatsApp Button (Warm Amber Bronze matching image) -->
            <div class="flex flex-col sm:flex-row items-center gap-4 w-full lg:w-auto shrink-0 justify-center">
                <a 
                    :href="whatsappUrl" 
                    target="_blank"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-3.5 bg-[#8c4e09] hover:bg-[#754107] text-white rounded-xl font-bold text-base transition-all shadow-lg hover:shadow-xl hover:scale-105 cursor-pointer group"
                >
                    <span class="material-symbols-outlined text-[22px] group-hover:scale-110 transition-transform">chat</span>
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>
    </section>
</template>
