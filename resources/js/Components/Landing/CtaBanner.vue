<script setup>
const whatsappUrl = "https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20konsultasi%20paket%20ibadah%20umrah/haji";
</script>

<template>
    <!-- CALL TO ACTION (CTA) BANNER BAWAH -->
    <section class="w-full py-space-xl bg-gradient-to-br from-primary via-primary-container to-tertiary text-on-primary relative overflow-hidden">
        <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-white/5 pointer-events-none blur-3xl"></div>
        <div class="absolute left-10 top-0 w-72 h-72 rounded-full bg-secondary/10 pointer-events-none blur-2xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-gutter flex flex-col lg:flex-row items-center justify-between gap-space-xl">
            <div class="max-w-2xl text-center lg:text-left">
                <span class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-surface-container-lowest/20 backdrop-blur-md text-on-primary font-label-sm text-label-sm uppercase tracking-wider mb-space-sm">
                    <span class="material-symbols-outlined text-[16px] text-secondary-fixed">support_agent</span>
                    Konsultasi Haji &amp; Umrah Gratis Tanpa Komitmen
                </span>
                <h2 class="font-headline-xl text-[30px] sm:text-[38px] lg:text-[44px] lg:leading-[54px] font-extrabold tracking-tight">
                    Masih Bingung Menentukan Jadwal &amp; Pilihan Paket?
                </h2>
                <p class="font-body-lg text-body-lg text-surface-container-low mt-space-sm leading-relaxed">
                    Konsultan ibadah kami siap membantu menghitung estimasi biaya, pemilihan tipe kamar (Double/Triple/Quad), dan pengurusan paspor &amp; vaksinasi secara komprehensif.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-space-md w-full lg:w-auto shrink-0">
                <a 
                    :href="whatsappUrl" 
                    target="_blank"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-space-sm px-space-xl py-space-md bg-secondary hover:bg-on-secondary-container text-on-secondary rounded-lg font-label-lg text-label-lg transition-all shadow-lg hover:shadow-xl font-bold group cursor-pointer"
                >
                    <span class="material-symbols-outlined text-[22px] group-hover:scale-110 transition-transform">chat</span>
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>
    </section>
</template>

