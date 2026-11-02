<script setup>
import { ref, computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const currentSlide = ref(0);

const rawSlides = [
    {
        tagId: 'KONSULTASI GRATIS',
        tagEn: 'FREE CONSULTATION',
        titleId: 'Bingung Menentukan Pilihan Paket?',
        titleEn: 'Need Help Choosing the Right Package?',
        subtitleId: 'Rencanakan ibadah umrah & haji Anda dengan tenang bersama asisten layanan resmi Almubarak.',
        subtitleEn: 'Plan your holy Umrah and Hajj pilgrimage with peace of mind guided by Almubarak official care assistant.',
        buttonTextId: 'TANYA ALMA DULU',
        buttonTextEn: 'ASK ALMA NOW',
        userQuestionId: 'Bingung mencari paket umrah yang pas?',
        userQuestionEn: 'Confused which Umrah package suits you best?',
        assistantReplyId: 'Hai! Saya ALMA, asisten customer care Almubarak.com 😊 Saya siap membantu Anda memilih jadwal keberangkatan, tipe kamar, dan estimasi biaya terbaik!',
        assistantReplyEn: 'Hello! I am ALMA, Almubarak.com customer assistant 😊 I am ready to help you select departure schedules, room types, and the best cost estimations!',
        whatsappUrl: 'https://wa.me/6281260003484?text=Assalamu%27alaikum%20ALMA%20Almubarak,%20saya%20ingin%20konsultasi%20pilihan%20paket%20umrah'
    },
    {
        tagId: 'PROGRAM TABUNGAN',
        tagEn: 'SAVINGS PROGRAM',
        titleId: 'Mau Umrah Tapi Dana Belum Cukup?',
        titleEn: 'Wish to Perform Umrah with Flexible Savings?',
        subtitleId: 'Daftar program Tabungan Umrah Syariah 0% tanpa riba dan amankan porsi keberangkatan Anda.',
        subtitleEn: 'Register for 0% interest Sharia Umrah Savings and secure your departure seat conveniently.',
        buttonTextId: 'SIMULASI TABUNGAN',
        buttonTextEn: 'SAVINGS SIMULATION',
        userQuestionId: 'Apakah bisa cicilan atau tabungan bertahap?',
        userQuestionEn: 'Can I do phased savings or installments?',
        assistantReplyId: 'Bisa sekali! Kami bekerjasama dengan BSI & Muamalat untuk program tabungan ibadah yang fleksibel mulai Rp 500rb/bulan.',
        assistantReplyEn: 'Absolutely! We partner with BSI & Muamalat for flexible pilgrimage savings starting from Rp 500k/month.',
        whatsappUrl: 'https://wa.me/6281260003484?text=Assalamu%27alaikum%20ALMA%20Almubarak,%20saya%20ingin%20informasi%20program%20tabungan%20umrah'
    },
    {
        tagId: 'HAJI KHUSUS & FURODA',
        tagEn: 'VIP & FURODA HAJJ',
        titleId: 'Ingin Berhaji Tanpa Antre Bertahun-tahun?',
        titleEn: 'Wish to Perform Hajj Without Years of Waiting?',
        subtitleId: 'Tersedia kuota resmi Haji Furoda Mujamalah dengan visa haji resmi terdaftar e-Hajj Kemenag RI.',
        subtitleEn: 'Official Mujamalah Furoda Hajj quota available with direct e-Hajj visa from Saudi authorities.',
        buttonTextId: 'KONSULTASI HAJI',
        buttonTextEn: 'HAJJ CONSULTATION',
        userQuestionId: 'Bagaimana kepastian visa Haji Furoda?',
        userQuestionEn: 'How certain is the Furoda Hajj visa?',
        assistantReplyId: 'Visa diterbitkan resmi melalui muassasah Kerajaan Arab Saudi bergaransi 100% uang kembali jika visa tidak terbit. Mari kami jelaskan teknisnya!',
        assistantReplyEn: 'Visas are officially issued by Saudi Royal muassasah with a 100% money-back guarantee if not issued. Let us explain!',
        whatsappUrl: 'https://wa.me/6281260003484?text=Assalamu%27alaikum%20ALMA%20Almubarak,%20saya%20ingin%20konsultasi%20haji%20khusus%20furoda'
    }
];

const slides = computed(() => {
    const isEn = locale.value === 'EN';
    return rawSlides.map(s => ({
        tag: isEn ? s.tagEn : s.tagId,
        title: isEn ? s.titleEn : s.titleId,
        subtitle: isEn ? s.subtitleEn : s.subtitleId,
        buttonText: isEn ? s.buttonTextEn : s.buttonTextId,
        userQuestion: isEn ? s.userQuestionEn : s.userQuestionId,
        assistantReply: isEn ? s.assistantReplyEn : s.assistantReplyId,
        whatsappUrl: s.whatsappUrl,
    }));
});

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % slides.value.length;
};

const prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + slides.value.length) % slides.value.length;
};
</script>

<template>
    <!-- SECTION: KONSULTASI INTERAKTIF (SESUAI GAMBAR 1) -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="relative w-full rounded-3xl md:rounded-[36px] overflow-hidden bg-gradient-to-br from-[#1c1208] via-[#2d1b0d] to-[#120a04] border border-amber-900/40 shadow-2xl text-white p-6 sm:p-10 lg:p-12">
            <!-- Background Decorative Texture & Glows -->
            <div class="absolute -top-24 -left-24 w-80 h-80 rounded-full bg-amber-600/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 rounded-full bg-amber-500/10 blur-3xl pointer-events-none"></div>
            <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:24px_24px] opacity-10 pointer-events-none"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <!-- Left Column: Branding, Headline & Glowing Action Button -->
                <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left gap-4 sm:gap-6">
                    <!-- Brand Pill -->
                    <div class="flex items-center gap-3">
                        <img 
                            src="/images/logo.png" 
                            alt="Almubarak Wisata" 
                            class="h-10 w-auto object-contain bg-white rounded-xl p-1 shadow-sm"
                        />
                        <div class="flex flex-col text-left">
                            <span class="text-xl font-extrabold tracking-tight text-white leading-tight">
                                Almubarak<span class="text-amber-400">.com</span>
                            </span>
                            <span class="text-[10px] uppercase font-bold tracking-widest text-amber-300">
                                {{ slides[currentSlide].tag }}
                            </span>
                        </div>
                    </div>

                    <!-- Dynamic Headline -->
                    <h2 class="font-headline-xl text-3xl sm:text-4xl lg:text-[44px] font-black tracking-tight text-white leading-tight">
                        {{ slides[currentSlide].title }}
                    </h2>

                    <!-- Subtitle -->
                    <p class="text-amber-100/80 text-sm sm:text-base lg:text-lg leading-relaxed max-w-xl">
                        {{ slides[currentSlide].subtitle }}
                    </p>

                    <!-- Glowing Pill Button (Persis seperti "TANYA TIKA DULU" di Gambar 1) -->
                    <div class="pt-2">
                        <a 
                            :href="slides[currentSlide].whatsappUrl"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-500 hover:to-amber-600 text-white font-extrabold text-base sm:text-lg tracking-wider uppercase border-2 border-amber-300/60 shadow-[0_0_30px_rgba(245,158,11,0.45)] hover:shadow-[0_0_45px_rgba(245,158,11,0.7)] hover:scale-105 transition-all cursor-pointer group"
                        >
                            <span>{{ slides[currentSlide].buttonText }}</span>
                            <span class="material-symbols-outlined text-[22px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Smartphone Mockup with Chat Assistant (Persis Gambar 1) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-[320px] sm:max-w-[340px] bg-neutral-900 rounded-[44px] p-3 shadow-2xl border-4 border-neutral-700/80 ring-1 ring-amber-500/20">
                        <!-- Phone Screen -->
                        <div class="w-full bg-[#fdfbf7] rounded-[36px] overflow-hidden text-neutral-800 p-4 pt-3 flex flex-col gap-4 shadow-inner">
                            <!-- Phone Status Bar -->
                            <div class="flex items-center justify-between text-[11px] font-bold text-neutral-700 px-2">
                                <span>9:41</span>
                                <div class="w-20 h-4 bg-black rounded-full mx-auto"></div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">signal_cellular_alt</span>
                                    <span class="material-symbols-outlined text-[14px]">wifi</span>
                                    <span class="material-symbols-outlined text-[14px]">battery_full</span>
                                </div>
                            </div>

                            <!-- Chat Header -->
                            <div class="flex items-center justify-between pb-3 border-b border-neutral-200/80 px-1">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-9 h-9 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-xs shadow-xs">
                                        AL
                                    </div>
                                    <div class="text-left">
                                        <span class="block text-xs font-black text-neutral-900 leading-tight">ALMA</span>
                                        <span class="block text-[10px] text-emerald-600 font-semibold flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                            {{ locale === 'ID' ? 'Asisten Layanan Almubarak' : 'Almubarak Service Assistant' }}
                                        </span>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-[18px] text-neutral-400">close</span>
                            </div>

                            <!-- Chat Messages Area -->
                            <div class="flex flex-col gap-3 py-2 text-xs min-h-[190px]">
                                <!-- User Message Bubble (Right) -->
                                <div class="self-end max-w-[85%] bg-amber-100 text-amber-950 p-3 rounded-2xl rounded-tr-xs shadow-xs text-left leading-snug">
                                    {{ slides[currentSlide].userQuestion }}
                                </div>

                                <!-- Assistant Reply Bubble (Left with Avatar) -->
                                <div class="self-start flex items-start gap-2 max-w-[95%]">
                                    <div class="w-7 h-7 rounded-full bg-emerald-700 text-white flex items-center justify-center shrink-0 mt-1 shadow-xs p-1">
                                        <img src="/images/logo.png" alt="Almubarak" class="w-full h-full object-contain filter brightness-200" />
                                    </div>
                                    <div class="bg-white border border-neutral-200 text-neutral-800 p-3 rounded-2xl rounded-tl-xs shadow-sm text-left leading-relaxed">
                                        {{ slides[currentSlide].assistantReply }}
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Input Mockup -->
                            <div class="flex items-center gap-2 p-2 rounded-full bg-neutral-100 border border-neutral-200 text-neutral-400 text-xs px-3">
                                <span class="flex-1 text-left text-[11px]">{{ locale === 'ID' ? 'Ketik pertanyaan Anda...' : 'Type your question...' }}</span>
                                <span class="material-symbols-outlined text-amber-600 text-[18px]">send</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation Arrows (< & >) -->
            <button 
                @click="prevSlide"
                type="button"
                aria-label="Slide sebelumnya"
                class="absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/60 hover:bg-black text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
            >
                <span class="material-symbols-outlined text-[22px]">chevron_left</span>
            </button>
            <button 
                @click="nextSlide"
                type="button"
                aria-label="Slide berikutnya"
                class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/60 hover:bg-black text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
            >
                <span class="material-symbols-outlined text-[22px]">chevron_right</span>
            </button>

            <!-- Slider Pagination Dots -->
            <div class="flex items-center justify-center gap-2 pt-6">
                <button 
                    v-for="(_, idx) in slides" 
                    :key="idx"
                    @click="currentSlide = idx"
                    type="button"
                    :class="currentSlide === idx ? 'w-8 bg-amber-400' : 'w-2.5 bg-white/30 hover:bg-white/60'"
                    class="h-2 rounded-full transition-all cursor-pointer"
                    :aria-label="'Pindah ke slide ' + (idx + 1)"
                ></button>
            </div>
        </div>
    </section>
</template>

