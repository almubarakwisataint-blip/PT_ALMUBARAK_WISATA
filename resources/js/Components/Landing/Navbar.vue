<script setup>
import { ref, computed, watch, onMounted, onUnmounted } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { useI18n } from '@/Composables/useI18n';

const page = usePage();
const isMobileMenuOpen = ref(false);
const isLangDropdownOpen = ref(false);
const langDropdownRef = ref(null);
const { locale, setLocale, t } = useI18n();

const selectLang = (lang) => {
    setLocale(lang);
    isLangDropdownOpen.value = false;
};

const handleClickOutside = (event) => {
    if (langDropdownRef.value && !langDropdownRef.value.contains(event.target)) {
        isLangDropdownOpen.value = false;
    }
};

watch(isMobileMenuOpen, (isOpen) => {
    if (typeof document !== 'undefined') {
        document.body.style.overflow = isOpen ? 'hidden' : '';
    }
});

onMounted(() => {
    document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
    document.removeEventListener('click', handleClickOutside);
    if (typeof document !== 'undefined') {
        document.body.style.overflow = '';
    }
});

const currentUrl = computed(() => page.url);

const isLinkActive = (path) => {
    if (path === '/') {
        return currentUrl.value === '/' || currentUrl.value === '';
    }
    return currentUrl.value.startsWith(path);
};
</script>

<template>
    <!-- TOP NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-surface-container shadow-[0_1px_12px_rgba(0,0,0,0.05)]">
        <div class="h-20 max-w-7xl mx-auto px-gutter flex items-center justify-between">
            <!-- Brand Logo & Name -->
            <Link class="flex items-center gap-space-sm group" href="/">
                <img 
                    alt="Almubarak Wisata Internasional" 
                    class="h-11 w-auto object-contain transition-transform duration-300 group-hover:scale-105" 
                    src="/images/logo.png"
                />
                <div class="flex flex-col">
                    <span class="font-headline-sm text-[21px] text-primary leading-tight font-extrabold tracking-tight">
                        Almubarak<span class="text-secondary font-bold">.com</span>
                    </span>
                    <span class="font-label-sm text-[10px] text-outline tracking-wider uppercase font-semibold">
                        {{ t('nav_subtitle') }}
                    </span>
                </div>
            </Link>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-space-lg font-label-lg text-label-lg">
                <Link 
                    href="/" 
                    :class="isLinkActive('/') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary font-medium'"
                    class="transition-colors py-1 px-1"
                >
                    {{ t('nav_home') }}
                </Link>
                <Link 
                    href="/about" 
                    :class="isLinkActive('/about') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary font-medium'"
                    class="transition-colors py-1 px-1"
                >
                    {{ t('nav_about') }}
                </Link>
                <Link 
                    href="/business" 
                    :class="isLinkActive('/business') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary font-medium'"
                    class="transition-colors py-1 px-1"
                >
                    {{ t('nav_business') }}
                </Link>
                <Link 
                    href="/news" 
                    :class="isLinkActive('/news') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary font-medium'"
                    class="transition-colors py-1 px-1"
                >
                    {{ t('nav_news') }}
                </Link>
                <Link 
                    href="/contact" 
                    :class="isLinkActive('/contact') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary font-medium'"
                    class="transition-colors py-1 px-1"
                >
                    {{ t('nav_contact') }}
                </Link>
            </nav>

            <!-- Actions: Hotline, Language Dropdown & Admin Login -->
            <div class="flex items-center gap-space-sm sm:gap-space-md">
                <!-- WhatsApp 24/7 Hotline Badge Pill (Desktop Only) -->
                <a 
                    href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20konsultasi%20paket%20ibadah"
                    target="_blank"
                    class="hidden md:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-surface-container border border-emerald-500/25 hover:border-emerald-500 text-[#005138] transition-all shadow-2xs group"
                >
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="font-label-md text-xs font-bold tracking-tight">CS Hotline 24 Jam</span>
                </a>

                <!-- Custom Language Dropdown (ID / EN) -->
                <div class="relative" ref="langDropdownRef">
                    <button 
                        @click="isLangDropdownOpen = !isLangDropdownOpen"
                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 font-label-md text-xs font-bold transition-all shadow-xs cursor-pointer"
                        type="button"
                    >
                        <span class="text-sm">{{ locale === 'ID' ? '🇮🇩' : '🇬🇧' }}</span>
                        <span>{{ locale }}</span>
                        <span class="material-symbols-outlined text-[16px] text-gray-400 transition-transform duration-200" :class="{ 'rotate-180': isLangDropdownOpen }">expand_more</span>
                    </button>

                    <!-- Language Options Menu -->
                    <div 
                        v-show="isLangDropdownOpen"
                        class="absolute right-0 mt-2 w-36 bg-white rounded-xl shadow-xl border border-gray-100 py-1.5 z-50 transition-all"
                    >
                        <button 
                            @click="selectLang('ID')"
                            :class="locale === 'ID' ? 'bg-emerald-50 text-emerald-800 font-bold' : 'text-gray-700 hover:bg-gray-50'"
                            class="w-full text-left px-3.5 py-2 text-xs flex items-center justify-between transition-colors cursor-pointer"
                            type="button"
                        >
                            <span class="flex items-center gap-2">
                                <span>🇮🇩</span>
                                <span>Indonesia</span>
                            </span>
                            <span v-if="locale === 'ID'" class="material-symbols-outlined text-[16px] text-emerald-600">check</span>
                        </button>
                        <button 
                            @click="selectLang('EN')"
                            :class="locale === 'EN' ? 'bg-emerald-50 text-emerald-800 font-bold' : 'text-gray-700 hover:bg-gray-50'"
                            class="w-full text-left px-3.5 py-2 text-xs flex items-center justify-between transition-colors cursor-pointer"
                            type="button"
                        >
                            <span class="flex items-center gap-2">
                                <span>🇬🇧</span>
                                <span>English</span>
                            </span>
                            <span v-if="locale === 'EN'" class="material-symbols-outlined text-[16px] text-emerald-600">check</span>
                        </button>
                    </div>
                </div>

                <!-- Admin Login Button (Desktop) -->
                <a 
                    href="/admin/login" 
                    class="hidden sm:inline-flex items-center gap-space-xs px-space-lg py-2 rounded-full font-label-lg text-label-lg text-white bg-primary hover:bg-primary-container transition-all shadow-sm font-bold cursor-pointer"
                >
                    <span class="material-symbols-outlined text-[18px]">lock</span>
                    <span>{{ t('nav_login') }}</span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="isMobileMenuOpen = !isMobileMenuOpen"
                    class="lg:hidden p-2 rounded-xl text-on-surface hover:bg-surface-container transition-colors flex items-center justify-center cursor-pointer"
                    type="button"
                    aria-label="Toggle Navigation"
                >
                    <span class="material-symbols-outlined text-[28px] text-gray-800">
                        {{ isMobileMenuOpen ? 'close' : 'menu' }}
                    </span>
                </button>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- MODERN FULL-SCREEN SLIDE-OVER MOBILE MENU (BERSIH & INDAH)    -->
        <!-- ============================================================== -->
        <Teleport to="body">
            <!-- Backdrop Scrim -->
            <Transition name="drawer-fade">
                <div 
                    v-if="isMobileMenuOpen" 
                    @click="isMobileMenuOpen = false"
                    class="fixed inset-0 z-[9990] bg-black/60 backdrop-blur-xs lg:hidden transition-opacity"
                ></div>
            </Transition>

            <!-- Slide-over Drawer Panel -->
            <Transition name="drawer-slide">
                <div 
                    v-if="isMobileMenuOpen" 
                    class="fixed top-0 right-0 bottom-0 z-[9991] w-[86%] max-w-[340px] bg-white flex flex-col justify-between shadow-2xl lg:hidden p-5 sm:p-6 overflow-y-auto"
                >
                    <!-- Bagian Atas Drawer: Logo Brand & Tombol Tutup -->
                    <div>
                        <div class="flex items-center justify-between pb-5 border-b border-gray-100">
                            <div class="flex items-center gap-2.5">
                                <img src="/images/logo.png" alt="Almubarak" class="h-9 w-auto">
                                <div>
                                    <span class="font-black text-base text-[#005138] leading-none block">
                                        Almubarak<span class="text-emerald-500">.com</span>
                                    </span>
                                    <span class="text-[9px] text-gray-400 font-bold tracking-wider uppercase block mt-0.5">
                                        Haji & Umrah Premium
                                    </span>
                                </div>
                            </div>
                            <button 
                                @click="isMobileMenuOpen = false" 
                                type="button" 
                                class="w-9 h-9 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition cursor-pointer"
                                aria-label="Tutup Menu"
                            >
                                <span class="material-symbols-outlined text-[20px]">close</span>
                            </button>
                        </div>

                        <!-- Daftar Link Navigasi Mobile Berikon -->
                        <nav class="flex flex-col gap-1.5 mt-5">
                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/"
                                :class="isLinkActive('/') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">home</span>
                                    <span>{{ t('nav_home') }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>

                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/about"
                                :class="isLinkActive('/about') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">info</span>
                                    <span>{{ t('nav_about') }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>

                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/business"
                                :class="isLinkActive('/business') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">business_center</span>
                                    <span>{{ t('nav_business') }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>

                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/news"
                                :class="isLinkActive('/news') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">newspaper</span>
                                    <span>{{ t('nav_news') }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>

                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/awards"
                                :class="isLinkActive('/awards') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">workspace_premium</span>
                                    <span>{{ locale === 'ID' ? 'Prestasi & Legalitas' : 'Awards & Accreditation' }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>

                            <Link 
                                @click="isMobileMenuOpen = false" 
                                href="/contact"
                                :class="isLinkActive('/contact') ? 'bg-emerald-50 text-emerald-800 font-bold border-l-4 border-emerald-600 shadow-2xs' : 'text-gray-700 hover:bg-gray-50 hover:text-emerald-700 font-semibold'"
                                class="flex items-center justify-between px-3.5 py-3 rounded-xl transition text-sm"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[20px] text-emerald-600">support_agent</span>
                                    <span>{{ t('nav_contact') }}</span>
                                </div>
                                <span class="material-symbols-outlined text-[16px] text-gray-400">chevron_right</span>
                            </Link>
                        </nav>
                    </div>

                    <!-- Bagian Bawah Drawer: Switcher Bahasa, WhatsApp & Tombol Login Admin -->
                    <!-- Bersih tanpa kolom footer sesuai permintaan -->
                    <div class="pt-5 border-t border-gray-100 flex flex-col gap-3">
                        <!-- Switcher Bahasa -->
                        <div class="flex items-center justify-between p-2 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-xs font-bold text-gray-500 pl-2">
                                {{ locale === 'ID' ? 'Pilihan Bahasa:' : 'Language:' }}
                            </span>
                            <div class="flex items-center gap-1">
                                <button 
                                    @click="selectLang('ID')"
                                    :class="locale === 'ID' ? 'bg-[#005138] text-white shadow-xs' : 'bg-transparent text-gray-700 hover:bg-gray-200/60'"
                                    class="px-2.5 py-1 rounded-lg text-xs font-bold transition flex items-center gap-1 cursor-pointer"
                                    type="button"
                                >
                                    <span>🇮🇩</span>
                                    <span>ID</span>
                                </button>
                                <button 
                                    @click="selectLang('EN')"
                                    :class="locale === 'EN' ? 'bg-[#005138] text-white shadow-xs' : 'bg-transparent text-gray-700 hover:bg-gray-200/60'"
                                    class="px-2.5 py-1 rounded-lg text-xs font-bold transition flex items-center gap-1 cursor-pointer"
                                    type="button"
                                >
                                    <span>🇬🇧</span>
                                    <span>EN</span>
                                </button>
                            </div>
                        </div>

                        <!-- WhatsApp Quick Hotline -->
                        <a 
                            href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20konsultasi%20paket%20ibadah"
                            target="_blank"
                            class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-bold text-xs transition border border-emerald-200/80 shadow-xs"
                        >
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                            <span>WhatsApp Konsultasi Cepat</span>
                        </a>

                        <!-- Admin Login Pill Button -->
                        <a 
                            href="/admin/login" 
                            class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-[#005138] hover:bg-[#003d2a] text-white font-bold text-xs tracking-wide transition shadow-sm"
                        >
                            <span class="material-symbols-outlined text-[18px]">lock</span>
                            <span>{{ t('nav_login') }}</span>
                        </a>
                    </div>
                </div>
            </Transition>
        </Teleport>
    </header>
</template>

<style scoped>
/* Transisi Halus Slide-Over Mobile Menu */
.drawer-fade-enter-active,
.drawer-fade-leave-active {
    transition: opacity 0.3s ease;
}
.drawer-fade-enter-from,
.drawer-fade-leave-to {
    opacity: 0;
}

.drawer-slide-enter-active,
.drawer-slide-leave-active {
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}
.drawer-slide-enter-from,
.drawer-slide-leave-to {
    transform: translateX(100%);
}
</style>
