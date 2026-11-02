<script setup>
import { ref, computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const currentSlide = ref(0);
const scrollContainer = ref(null);

const rawSlides = [
    {
        tagId: 'KONSULTASI GRATIS',
        tagEn: 'FREE CONSULTATION',
        titleLine1Id: 'Bingung Menentukan',
        titleLine1En: 'Need Help Choosing',
        titleLine2Id: 'Pilihan Paket?',
        titleLine2En: 'The Right Package?',
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
        titleLine1Id: 'Mau Umrah Tapi',
        titleLine1En: 'Wish to Perform Umrah',
        titleLine2Id: 'Dana Belum Cukup?',
        titleLine2En: 'With Flexible Savings?',
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
        titleLine1Id: 'Ingin Berhaji',
        titleLine1En: 'Perform Hajj Without',
        titleLine2Id: 'Tanpa Antre Bertahun-tahun?',
        titleLine2En: 'Years of Waiting?',
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
        titleLine1: isEn ? s.titleLine1En : s.titleLine1Id,
        titleLine2: isEn ? s.titleLine2En : s.titleLine2Id,
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

// ==========================================
// PROMO CARDS (DISATUKAN DARI SPECIAL OFFERS)
// ==========================================
const rawPromoCards = [
    {
        tagId: 'KUPON TERBATAS',
        tagEn: 'LIMITED COUPON',
        discountId: 'Diskon Rp 3 Jt',
        discountEn: 'Discount Rp 3M',
        titleId: 'Umrah Plus Turki 12 Hari',
        titleEn: 'Umrah Plus Turkey 12 Days',
        routeId: 'Jakarta - Istanbul - Madinah - Makkah',
        routeEn: 'Jakarta - Istanbul - Madinah - Makkah',
        image: '/images/landing/package-turki-plus.jpg',
        badgeColor: 'bg-amber-500',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Diskon%203%20Juta%20Umrah%20Plus%20Turki'
    },
    {
        tagId: 'CASHBACK INSTAN',
        tagEn: 'INSTANT CASHBACK',
        discountId: 'Cashback Rp 2 Jt',
        discountEn: 'Cashback Rp 2M',
        titleId: 'Umrah Reguler 9 Hari Saudia Direct',
        titleEn: 'Regular Umrah 9 Days Saudia Direct',
        routeId: 'Direct Landing Jeddah Tanpa Transit',
        routeEn: 'Direct Jeddah Landing Non-Stop',
        image: '/images/landing/package-reguler-9hari.jpg',
        badgeColor: 'bg-emerald-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Cashback%202%20Juta%20Umrah%20Reguler'
    },
    {
        tagId: 'PROMO RAMADHAN',
        tagEn: 'RAMADAN SPECIAL',
        discountId: 'Free Upgrade Kamar',
        discountEn: 'Free Room Upgrade',
        titleId: 'Umrah Ramadhan & Lailatul Qadar',
        titleEn: 'Ramadan & Laylatul Qadr Umrah',
        routeId: '10 Malam Terakhir di Depan Ka\'bah',
        routeEn: 'Last 10 Nights Facing Kaaba',
        image: '/images/landing/package-ramadhan-16hari.jpg',
        badgeColor: 'bg-rose-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Umrah%20Ramadhan%20Free%20Upgrade'
    },
    {
        tagId: 'GRUP KELUARGA',
        tagEn: 'FAMILY GROUP',
        discountId: 'Diskon s.d. 5 Jt',
        discountEn: 'Discount up to 5M',
        titleId: 'Paket Haji Khusus & Furoda VIP',
        titleEn: 'VIP Special & Furoda Hajj Package',
        routeId: 'Direct Madinah & Maktab VIP Mina',
        routeEn: 'Direct Madinah & VIP Mina Maktab',
        image: '/images/landing/package-haji-furoda.jpg',
        badgeColor: 'bg-indigo-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20informasi%20Promo%20Haji%20Furoda%20Keluarga'
    }
];

const promoCards = computed(() => {
    const isEn = locale.value === 'EN';
    return rawPromoCards.map(c => ({
        tag: isEn ? c.tagEn : c.tagId,
        discount: isEn ? c.discountEn : c.discountId,
        title: isEn ? c.titleEn : c.titleId,
        route: isEn ? c.routeEn : c.routeId,
        image: c.image,
        badgeColor: c.badgeColor,
        waMessage: c.waMessage,
    }));
});

const scrollLeft = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: -320, behavior: 'smooth' });
    }
};

const scrollRight = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: 320, behavior: 'smooth' });
    }
};
</script>

<template>
    <!-- ==================================================================== -->
    <!-- SECTION UNIFIKASI: KONSULTASI INTERAKTIF & KATALOG PROMO KEBERANGKATAN -->
    <!-- ==================================================================== -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10 overflow-hidden">
        
        <!-- ================================================================ -->
        <!-- 1. BANNER UTAMA (SESUAI UKURAN & BENTUK GAMBAR 3 & GAMBAR 5)     -->
        <!-- ================================================================ -->
        <div class="relative w-full rounded-[28px] sm:rounded-[36px] overflow-hidden bg-gradient-to-r from-[#1c1108] via-[#2c170b] to-[#180e06] border border-amber-600/35 shadow-2xl text-white p-5 sm:p-8 lg:px-10 lg:py-7 min-h-[340px] lg:h-[370px] flex items-center mb-10">
            
            <!-- DEKORASI BULAT-BULAT & GELOMBANG EMAS (PERSIS TANDA MERAH GAMBAR 5) -->
            <!-- 1) 6x4 Dot Grid Matrix Pattern di kanan atas -->
            <div class="absolute right-[280px] lg:right-[320px] top-6 hidden md:grid grid-cols-6 gap-2.5 opacity-55 z-0 pointer-events-none">
                <span v-for="i in 24" :key="i" class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            </div>

            <!-- 2) Garis Gelombang Abstrak Emas (Wavy Lines) -->
            <svg class="absolute inset-0 w-full h-full pointer-events-none opacity-35 z-0" preserveAspectRatio="none" viewBox="0 0 1000 370" fill="none">
                <path d="M520,25 Q640,130 610,230 T750,345" stroke="#f59e0b" stroke-width="1.6" />
                <path d="M460,335 Q610,245 770,285 T980,195" stroke="#d97706" stroke-width="1.3" />
            </svg>

            <!-- 3) Halftone Radial Dots di kiri bawah (Bulat-bulat Halftone) -->
            <div class="absolute -bottom-2 -left-2 pointer-events-none opacity-30 z-0">
                <svg width="150" height="150" viewBox="0 0 150 150" fill="#f59e0b">
                    <circle cx="20" cy="130" r="4" />
                    <circle cx="38" cy="130" r="3.5" />
                    <circle cx="56" cy="130" r="3" />
                    <circle cx="74" cy="130" r="2.5" />
                    <circle cx="92" cy="130" r="2" />
                    <circle cx="20" cy="112" r="3.5" />
                    <circle cx="38" cy="112" r="3" />
                    <circle cx="56" cy="112" r="2.5" />
                    <circle cx="74" cy="112" r="2" />
                    <circle cx="20" cy="94" r="3" />
                    <circle cx="38" cy="94" r="2.5" />
                    <circle cx="56" cy="94" r="2" />
                    <circle cx="20" cy="76" r="2.5" />
                    <circle cx="38" cy="76" r="2" />
                    <circle cx="20" cy="58" r="2" />
                </svg>
            </div>

            <!-- 4) Ambient Warm Glows -->
            <div class="absolute -top-20 -left-20 w-72 h-72 rounded-full bg-amber-600/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 right-10 w-80 h-80 rounded-full bg-amber-500/15 blur-3xl pointer-events-none"></div>

            <!-- KONTEN GRID 2 KOLOM (PROPORSI PERSIS GAMBAR 3) -->
            <div class="relative z-10 w-full grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
                
                <!-- KOLOM KIRI: BRAND, HEADLINE & TOMBOL GLOWING CAPSULE -->
                <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left gap-3.5 sm:gap-4 pl-0 lg:pl-4">
                    
                    <!-- Brand Pill & Subtitle (Persis Gambar 3) -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-white p-1.5 shadow-md flex items-center justify-center shrink-0 border border-amber-300">
                            <img 
                                src="/images/logo.png" 
                                alt="Almubarak Wisata" 
                                class="w-full h-full object-contain"
                            />
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-xl sm:text-2xl font-black tracking-tight text-white leading-tight">
                                Almubarak<span class="text-amber-400">.com</span>
                            </span>
                            <span class="text-[9px] font-bold text-amber-300/80 uppercase tracking-widest leading-none">
                                {{ slides[currentSlide].tag }}
                            </span>
                        </div>
                    </div>

                    <!-- Main Headline (2 Baris Elegan, Baris Kedua Gradient Emas Persis Gambar 3) -->
                    <div class="space-y-0.5">
                        <h2 class="font-headline-xl text-2xl sm:text-3xl lg:text-[38px] font-black text-white tracking-tight leading-tight">
                            {{ slides[currentSlide].titleLine1 }}
                        </h2>
                        <h2 class="font-headline-xl text-2xl sm:text-3xl lg:text-[38px] font-black text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-amber-300 to-amber-500 tracking-tight leading-tight">
                            {{ slides[currentSlide].titleLine2 }}
                        </h2>
                    </div>

                    <!-- Subtitle Deskriptif -->
                    <p class="font-body-md text-xs sm:text-sm text-amber-100/85 max-w-lg leading-relaxed line-clamp-2">
                        {{ slides[currentSlide].subtitle }}
                    </p>

                    <!-- Glowing Capsule Button (Persis "TANYA TIKA DULU" di Gambar 3 & 5) -->
                    <div class="pt-2">
                        <a 
                            :href="slides[currentSlide].whatsappUrl" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="group inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full bg-gradient-to-r from-[#d97706] via-[#f59e0b] to-[#d97706] text-white font-black text-sm tracking-wider uppercase shadow-[0_0_25px_rgba(245,158,11,0.55)] border-2 border-amber-300 hover:scale-105 hover:shadow-[0_0_35px_rgba(245,158,11,0.85)] transition-all duration-300 cursor-pointer"
                        >
                            <span>{{ slides[currentSlide].buttonText }}</span>
                            <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- KOLOM KANAN: SMARTPHONE MOCKUP DENGAN CHAT ASSISTANT ALMA -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="relative w-[270px] sm:w-[285px] lg:w-[295px] h-[310px] sm:h-[320px] lg:h-[330px] rounded-[38px] sm:rounded-[42px] border-[5px] sm:border-[6px] border-neutral-900 bg-white shadow-2xl overflow-hidden flex flex-col justify-between text-neutral-900">
                        
                        <!-- Top iPhone Bar: Clock, Dynamic Island Notch & Battery -->
                        <div class="pt-2 px-5 flex items-center justify-between text-[11px] font-bold text-neutral-800 shrink-0">
                            <span>9:41</span>
                            <div class="w-16 h-4 bg-neutral-900 rounded-full"></div>
                            <div class="flex items-center gap-1 text-[11px]">
                                <span class="material-symbols-outlined text-[13px]">signal_cellular_alt</span>
                                <span class="material-symbols-outlined text-[13px]">wifi</span>
                                <span class="material-symbols-outlined text-[13px]">battery_full</span>
                            </div>
                        </div>

                        <!-- Chat Header (ALMA - Asisten Layanan Almubarak) -->
                        <div class="px-3.5 py-1.5 border-b border-neutral-100 flex items-center justify-between shrink-0">
                            <span class="material-symbols-outlined text-[18px] text-neutral-400">close</span>
                            <div class="flex flex-col items-center">
                                <span class="font-extrabold text-xs text-neutral-900 leading-tight">ALMA</span>
                                <span class="text-[9px] text-emerald-600 font-semibold flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>{{ locale === 'ID' ? 'Asisten Layanan Almubarak' : 'Almubarak Service Assistant' }}</span>
                                </span>
                            </div>
                            <span class="w-4"></span>
                        </div>

                        <!-- Chat Messages Body -->
                        <div class="flex flex-col gap-2.5 px-3 py-2 text-xs flex-1 justify-center">
                            <!-- User Message Bubble (Right, Soft Beige) -->
                            <div class="self-end max-w-[85%] bg-[#f5ede3] text-neutral-900 p-2.5 rounded-2xl rounded-tr-xs shadow-xs text-left text-[11px] leading-snug">
                                {{ slides[currentSlide].userQuestion }}
                            </div>

                            <!-- ALMA Assistant Reply Bubble (Left, White with Avatar) -->
                            <div class="self-start flex items-start gap-2 max-w-[95%]">
                                <div class="w-7 h-7 rounded-full bg-amber-500 text-white flex items-center justify-center shrink-0 mt-0.5 shadow-xs font-bold text-[10px]">
                                    AL
                                </div>
                                <div class="bg-white border border-neutral-200 text-neutral-800 p-2.5 rounded-2xl rounded-tl-xs shadow-xs text-left text-[11px] leading-relaxed">
                                    {{ slides[currentSlide].assistantReply }}
                                </div>
                            </div>
                        </div>

                        <!-- Chat Input Simulation -->
                        <div class="p-2.5 pt-0 shrink-0">
                            <div class="flex items-center gap-2 p-1.5 rounded-full bg-neutral-100 border border-neutral-200 text-neutral-400 text-xs px-3">
                                <span class="flex-1 text-left text-[10px]">{{ locale === 'ID' ? 'Ketik pertanyaan Anda...' : 'Type your question...' }}</span>
                                <span class="material-symbols-outlined text-amber-600 text-[16px]">send</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigasi Panah Kiri (<) & Kanan (>) di Tepi Banner -->
            <button 
                @click="prevSlide"
                type="button"
                aria-label="Slide sebelumnya"
                class="absolute left-2 sm:left-3 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
            >
                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>
            <button 
                @click="nextSlide"
                type="button"
                aria-label="Slide berikutnya"
                class="absolute right-2 sm:right-3 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
            >
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>

            <!-- Titik Pagination di Bawah Tengah Banner -->
            <div class="absolute bottom-2.5 left-1/2 -translate-x-1/2 flex items-center gap-1.5 z-20">
                <button 
                    v-for="(_, idx) in slides" 
                    :key="idx"
                    @click="currentSlide = idx"
                    type="button"
                    :class="currentSlide === idx ? 'w-6 bg-amber-400' : 'w-2 bg-white/40 hover:bg-white/70'"
                    class="h-1.5 rounded-full transition-all cursor-pointer"
                    :aria-label="'Pindah ke slide ' + (idx + 1)"
                ></button>
            </div>
        </div>

        <!-- ================================================================ -->
        <!-- 2. KATALOG PROMO KEBERANGKATAN (DISATUKAN LANGSUNG DI BAWAH KARTU)-->
        <!-- ================================================================ -->
        <div class="relative w-full">
            <!-- Header Penawaran -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 mb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block mb-1">
                        {{ locale === 'ID' ? 'PENAWARAN SPESIAL TERBATAS' : 'LIMITED SPECIAL OFFERS' }}
                    </span>
                    <h3 class="font-headline-md text-2xl sm:text-3xl font-extrabold text-[#005138]">
                        {{ locale === 'ID' ? 'Katalog Promo & Diskon Spesial Keberangkatan' : 'Special Pilgrimage Offers & Deals' }}
                    </h3>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <button 
                        @click="scrollLeft"
                        type="button"
                        aria-label="Geser ke kiri"
                        class="w-10 h-10 rounded-full bg-white text-neutral-800 border border-gray-200 shadow-sm flex items-center justify-center hover:bg-gray-50 hover:scale-105 transition-all cursor-pointer"
                    >
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button 
                        @click="scrollRight"
                        type="button"
                        aria-label="Geser ke kanan"
                        class="w-10 h-10 rounded-full bg-white text-neutral-800 border border-gray-200 shadow-sm flex items-center justify-center hover:bg-gray-50 hover:scale-105 transition-all cursor-pointer"
                    >
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </div>

            <!-- Horizontal Scrollable Cards -->
            <div 
                ref="scrollContainer"
                class="flex gap-5 overflow-x-auto scrollbar-none pb-4 pt-1 px-1 scroll-smooth"
            >
                <div 
                    v-for="(card, idx) in promoCards" 
                    :key="idx"
                    class="w-[280px] sm:w-[350px] shrink-0 rounded-2xl overflow-hidden bg-white border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group"
                >
                    <!-- Card Image with Coupon Badge -->
                    <div class="relative h-44 sm:h-48 overflow-hidden bg-slate-100">
                        <img 
                            :src="card.image" 
                            :alt="card.title" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent flex items-end justify-between p-3">
                            <span :class="card.badgeColor" class="px-2.5 py-1 rounded-lg text-white font-black text-xs shadow-sm">
                                {{ card.discount }}
                            </span>
                            <span class="px-2 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider">
                                {{ card.tag }}
                            </span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-4 sm:p-5 flex flex-col justify-between flex-1 gap-3">
                        <div>
                            <h4 class="font-headline-sm text-base sm:text-lg font-bold text-neutral-900 group-hover:text-emerald-700 transition-colors leading-snug">
                                {{ card.title }}
                            </h4>
                            <p class="text-xs text-neutral-500 flex items-center gap-1.5 mt-1.5">
                                <span class="material-symbols-outlined text-[16px] text-emerald-600">flight_takeoff</span>
                                <span>{{ card.route }}</span>
                            </p>
                        </div>

                        <div class="pt-2 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-semibold text-emerald-700">
                                {{ locale === 'ID' ? 'Kupon Aktif' : 'Coupon Active' }}
                            </span>
                            <a 
                                :href="`https://wa.me/6281260003484?text=${card.waMessage}`"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm hover:scale-105 transition-all cursor-pointer"
                            >
                                <span>{{ locale === 'ID' ? 'Klaim Promo' : 'Claim Offer' }}</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>