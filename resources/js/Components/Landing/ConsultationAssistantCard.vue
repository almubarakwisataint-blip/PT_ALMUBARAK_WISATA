<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

// ==========================================
// 1. KARTU KONSULTASI INTERAKTIF (GAMBAR 4)
// ==========================================
const currentSlide = ref(0);
let bannerTimer = null;

const rawSlides = [
    {
        tagId: 'KONSULTASI GRATIS',
        tagEn: 'FREE CONSULTATION',
        titleLine1Id: 'Bingung Menentukan',
        titleLine1En: 'Need Help Choosing',
        titleLine2Id: 'Pilihan Paket?',
        titleLine2En: 'The Right Package?',
        subtitleId: 'Rencanakan ibadah umrah & haji Anda dengan tenang bersama asisten resmi Almubarak.',
        subtitleEn: 'Plan your holy Umrah and Hajj pilgrimage with peace of mind guided by Almubarak official assistant.',
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

// Touch and drag swipe for banner
let touchStartX = 0;
let touchEndX = 0;

const handleBannerTouchStart = (e) => {
    stopBannerAutoRotate();
    touchStartX = e.touches ? e.touches[0].clientX : e.clientX;
};

const handleBannerTouchEnd = (e) => {
    touchEndX = e.changedTouches ? e.changedTouches[0].clientX : e.clientX;
    const diff = touchStartX - touchEndX;
    if (diff > 40) {
        nextSlide();
    } else if (diff < -40) {
        prevSlide();
    }
    startBannerAutoRotate();
};

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % slides.value.length;
};

const prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + slides.value.length) % slides.value.length;
};

// Auto-advance banner (gerak otomatis)
const startBannerAutoRotate = () => {
    stopBannerAutoRotate();
    bannerTimer = setInterval(() => {
        nextSlide();
    }, 4500);
};

const stopBannerAutoRotate = () => {
    if (bannerTimer) {
        clearInterval(bannerTimer);
        bannerTimer = null;
    }
};

// ====================================================================
// 2. KATALOG PROMO TIKET KUPON (PERSIS GAMBAR 3 TRAVELOKA VOUCHER)
// ====================================================================
const scrollContainer = ref(null);
let promoTimer = null;

const rawPromoCards = [
    {
        theme: 'orange',
        bgGradient: 'bg-gradient-to-r from-[#ea580c] via-[#f97316] to-[#fb923c]',
        borderColor: 'border-[#f97316]',
        tagId: 'KUPON TERBATAS',
        tagEn: 'LIMITED COUPON',
        discountId: 'Diskon Rp 3 Jt',
        discountEn: 'Discount Rp 3M',
        destTitleId: 'Travel to TURKI',
        destTitleEn: 'Travel to TURKEY',
        packageNameId: 'Umrah Plus Wisata Halal 12 Hari',
        packageNameEn: 'Umrah Plus Halal Tour 12 Days',
        image: '/images/landing/package-turki-plus.jpg',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Kupon%20Diskon%203%20Juta%20Umrah%20Plus%20Turki'
    },
    {
        theme: 'red',
        bgGradient: 'bg-gradient-to-r from-[#b91c1c] via-[#dc2626] to-[#ef4444]',
        borderColor: 'border-[#dc2626]',
        tagId: 'KUPON TERBATAS',
        tagEn: 'LIMITED COUPON',
        discountId: 'Cashback Rp 2 Jt',
        discountEn: 'Cashback Rp 2M',
        destTitleId: 'Travel to MADINAH',
        destTitleEn: 'Travel to MADINAH',
        packageNameId: 'Umrah Reguler 9 Hari Saudia Direct',
        packageNameEn: 'Regular Umrah 9 Days Saudia Direct',
        image: '/images/landing/package-reguler-9hari.jpg',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Kupon%20Cashback%202%20Juta%20Umrah%20Reguler'
    },
    {
        theme: 'blue',
        bgGradient: 'bg-gradient-to-r from-[#1d4ed8] via-[#2563eb] to-[#3b82f6]',
        borderColor: 'border-[#2563eb]',
        tagId: 'PROMO RAMADHAN',
        tagEn: 'RAMADAN PROMO',
        discountId: 'Free Upgrade',
        discountEn: 'Free Upgrade',
        destTitleId: 'RAMADHAN SPECIAL',
        destTitleEn: 'RAMADAN SPECIAL',
        packageNameId: 'Umrah Ramadhan & Lailatul Qadar',
        packageNameEn: 'Ramadan & Laylatul Qadr Umrah',
        image: '/images/landing/package-ramadhan-16hari.jpg',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Kupon%20Free%20Upgrade%20Umrah%20Ramadhan'
    },
    {
        theme: 'emerald',
        bgGradient: 'bg-gradient-to-r from-[#047857] via-[#059669] to-[#10b981]',
        borderColor: 'border-[#059669]',
        tagId: 'KUOTA RESMI',
        tagEn: 'OFFICIAL QUOTA',
        discountId: 'Diskon Rp 5 Jt',
        discountEn: 'Discount Rp 5M',
        destTitleId: 'HAJI FURODA VIP',
        destTitleEn: 'VIP FURODA HAJJ',
        packageNameId: 'Haji Khusus Tanpa Antre Maktab VIP',
        packageNameEn: 'VIP Direct Hajj No Waiting List',
        image: '/images/landing/package-haji-furoda.jpg',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Haji%20Furoda%20VIP'
    }
];

const promoCards = computed(() => {
    const isEn = locale.value === 'EN';
    return rawPromoCards.map(c => ({
        theme: c.theme,
        bgGradient: c.bgGradient,
        borderColor: c.borderColor,
        tag: isEn ? c.tagEn : c.tagId,
        discount: isEn ? c.discountEn : c.discountId,
        destTitle: isEn ? c.destTitleEn : c.destTitleId,
        packageName: isEn ? c.packageNameEn : c.packageNameId,
        image: c.image,
        waMessage: c.waMessage,
    }));
});

// Auto-scroll & Drag interaktif untuk kartu promo (otomatis jalan & bisa digerakkan sendiri)
const isDragging = ref(false);
let startX = 0;
let startScrollLeft = 0;
let autoScrollTimer = null;
let isUserInteracting = false;

const startDrag = (e) => {
    isDragging.value = true;
    isUserInteracting = true;
    startX = e.pageX - (scrollContainer.value ? scrollContainer.value.offsetLeft : 0);
    startScrollLeft = scrollContainer.value ? scrollContainer.value.scrollLeft : 0;
};

const onDrag = (e) => {
    if (!isDragging.value || !scrollContainer.value) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.value.offsetLeft;
    const walk = (x - startX) * 1.5;
    scrollContainer.value.scrollLeft = startScrollLeft - walk;
};

const stopDrag = () => {
    if (isDragging.value) {
        isDragging.value = false;
        setTimeout(() => {
            isUserInteracting = false;
        }, 1200);
    }
};

const onTouchStart = (e) => {
    isUserInteracting = true;
    startX = e.touches[0].pageX - (scrollContainer.value ? scrollContainer.value.offsetLeft : 0);
    startScrollLeft = scrollContainer.value ? scrollContainer.value.scrollLeft : 0;
};

const onTouchMove = (e) => {
    if (!scrollContainer.value) return;
    const x = e.touches[0].pageX - scrollContainer.value.offsetLeft;
    const walk = (x - startX) * 1.5;
    scrollContainer.value.scrollLeft = startScrollLeft - walk;
};

const onTouchEnd = () => {
    setTimeout(() => {
        isUserInteracting = false;
    }, 1200);
};

const pauseAutoScroll = () => {
    isUserInteracting = true;
};

const resumeAutoScroll = () => {
    if (!isDragging.value) {
        isUserInteracting = false;
    }
};

const handleMouseLeave = () => {
    stopDrag();
    resumeAutoScroll();
};

const startPromoContinuousScroll = () => {
    stopPromoContinuousScroll();
    autoScrollTimer = setInterval(() => {
        if (!scrollContainer.value || isUserInteracting || isDragging.value) return;
        const maxScroll = scrollContainer.value.scrollWidth - scrollContainer.value.clientWidth;
        if (scrollContainer.value.scrollLeft >= maxScroll - 10) {
            scrollContainer.value.scrollLeft = 0;
        } else {
            scrollContainer.value.scrollLeft += 1.5;
        }
    }, 25);
};

const stopPromoContinuousScroll = () => {
    if (autoScrollTimer) {
        clearInterval(autoScrollTimer);
        autoScrollTimer = null;
    }
};

// Lifecycle
onMounted(() => {
    startBannerAutoRotate();
    startPromoContinuousScroll();
});

onBeforeUnmount(() => {
    stopBannerAutoRotate();
    stopPromoContinuousScroll();
});
</script>

<template>
    <!-- ==================================================================== -->
    <!-- SECTION UNIFIKASI: KONSULTASI INTERAKTIF & KATALOG PROMO OTOMATIS    -->
    <!-- ==================================================================== -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10 overflow-hidden">
        
        <!-- ================================================================ -->
        <!-- 1. BANNER UTAMA KONSULTASI (OTOMATIS GERAK SENDIRI & BISA DIGESER) -->
        <!-- ================================================================ -->
        <div 
            @mouseenter="stopBannerAutoRotate"
            @mouseleave="startBannerAutoRotate"
            @touchstart="handleBannerTouchStart"
            @touchend="handleBannerTouchEnd"
            @mousedown="handleBannerTouchStart"
            @mouseup="handleBannerTouchEnd"
            class="relative w-full rounded-[28px] sm:rounded-[36px] overflow-hidden bg-gradient-to-r from-[#1c1108] via-[#2c170b] to-[#180e06] border border-amber-600/35 shadow-2xl text-white p-5 sm:p-8 lg:px-10 lg:py-7 min-h-[340px] lg:h-[370px] flex items-center mb-10 transition-all duration-500 cursor-grab active:cursor-grabbing select-none"
        >
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
                <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left gap-3.5 sm:gap-4 pl-0 lg:pl-4 transition-all duration-500">
                    
                    <!-- Brand Pill & Subtitle -->
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

                        <!-- Chat Header (ALMA - Asisten Almubarak) -->
                        <div class="px-3.5 py-1.5 border-b border-neutral-100 flex items-center justify-between shrink-0">
                            <span class="material-symbols-outlined text-[18px] text-neutral-400">close</span>
                            <div class="flex flex-col items-center">
                                <span class="font-extrabold text-xs text-neutral-900 leading-tight">ALMA</span>
                                <span class="text-[9px] text-emerald-600 font-semibold flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>{{ locale === 'ID' ? 'Asisten Almubarak' : 'Almubarak Assistant' }}</span>
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



            <!-- Navigasi Panah Kiri (<) & Kanan (>) di Banner (Persis Gambar 1: <>) -->
            <button 
                @click="prevSlide"
                type="button"
                aria-label="Slide sebelumnya"
                class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
            >
                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>
            <button 
                @click="nextSlide"
                type="button"
                aria-label="Slide berikutnya"
                class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center border border-white/20 transition-all cursor-pointer shadow-lg hover:scale-110 z-20"
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
        <!-- 2. KATALOG PROMO TIKET KUPON (OTOMATIS JALAN & BISA DIGERAKIN SENDIRI) -->
        <!-- ================================================================ -->
        <div class="relative w-full overflow-hidden py-1">
            <!-- Scroll Container (Bisa digerakkan bebas & jalan otomatis terus-menerus) -->
            <div 
                ref="scrollContainer"
                @mousedown="startDrag"
                @mousemove="onDrag"
                @mouseup="stopDrag"
                @touchstart="onTouchStart"
                @touchmove="onTouchMove"
                @touchend="onTouchEnd"
                @mouseenter="pauseAutoScroll"
                @mouseleave="handleMouseLeave"
                class="flex gap-5 overflow-x-auto pb-4 pt-1 px-1 scroll-smooth select-none cursor-grab active:cursor-grabbing [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden"
            >
                <div 
                    v-for="(card, idx) in [...promoCards, ...promoCards, ...promoCards]" 
                    :key="idx"
                    class="w-[340px] sm:w-[380px] lg:w-[400px] h-[195px] sm:h-[210px] shrink-0 rounded-2xl sm:rounded-3xl overflow-hidden relative shadow-md hover:shadow-2xl transition-all duration-300 group flex border border-gray-200/90 bg-white"
                >
                    <!-- BAGIAN KIRI (42%): FOTO DENGAN BORDER BERWARNA -->
                    <div class="w-[42%] h-full p-2.5 sm:p-3 shrink-0 bg-white flex items-center justify-center">
                        <div :class="card.borderColor" class="w-full h-full rounded-xl sm:rounded-2xl overflow-hidden border-[3px] shadow-xs relative">
                            <img 
                                :src="card.image" 
                                :alt="card.destTitle" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                            />
                        </div>
                    </div>

                    <!-- BAGIAN KANAN (58%): KARTU WARNA TEBAL DENGAN TIKET VOUCHER PUTIH -->
                    <div :class="card.bgGradient" class="w-[58%] h-full p-3.5 sm:p-4 flex flex-col justify-between text-white relative">
                        
                        <!-- Top Header: Logo Brand & Judul Tujuan -->
                        <div>
                            <div class="flex items-center gap-1.5 opacity-90 mb-0.5">
                                <span class="text-[10px] font-bold tracking-tight">almubarak</span>
                                <span class="text-[8px] px-1 py-0.2 rounded-sm bg-white/20 font-bold uppercase">WISATA</span>
                            </div>
                            <h4 class="font-headline-sm text-sm sm:text-base font-black tracking-tight leading-tight uppercase drop-shadow-xs">
                                {{ card.destTitle }}
                            </h4>
                        </div>

                        <!-- TIKET KUPON VOUCHER PUTIH (CUTOUT NOTCHED TICKET) -->
                        <div class="relative bg-white text-gray-900 rounded-lg sm:rounded-xl p-2 sm:p-2.5 shadow-lg flex items-center gap-2 border border-black/5">
                            <!-- Left Notched Ticket Stub -->
                            <div class="pr-2 border-r border-dashed border-gray-300 flex flex-col justify-center items-center shrink-0">
                                <span class="text-[8px] sm:text-[9px] font-black text-gray-700 tracking-tighter leading-none block uppercase">
                                    {{ card.tag }}
                                </span>
                            </div>

                            <!-- Right Ticket Discount Value -->
                            <div class="flex-1 text-left min-w-0">
                                <span class="text-xs sm:text-sm font-black text-[#0264d6] block truncate leading-none">
                                    {{ card.discount }}
                                </span>
                                <span class="text-[9px] text-gray-500 block truncate mt-0.5 leading-tight">
                                    {{ card.packageName }}
                                </span>
                            </div>

                            <!-- Ticket Semicircular Cutouts -->
                            <div class="absolute -top-1.5 left-7 w-3 h-3 rounded-full bg-black/10 sm:bg-transparent"></div>
                            <div class="absolute -bottom-1.5 left-7 w-3 h-3 rounded-full bg-black/10 sm:bg-transparent"></div>
                        </div>

                        <!-- Bottom: S&K Berlaku & Tombol WhatsApp -->
                        <div class="flex items-center justify-between pt-1 text-[9px] sm:text-[10px] opacity-90">
                            <span class="italic">S&amp;K berlaku</span>
                            <a 
                                :href="`https://wa.me/6281260003484?text=${card.waMessage}`"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-white text-gray-900 font-extrabold shadow-sm hover:scale-105 transition-transform cursor-pointer"
                            >
                                <span>{{ locale === 'ID' ? 'Klaim' : 'Claim' }}</span>
                                <span class="material-symbols-outlined text-[12px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>