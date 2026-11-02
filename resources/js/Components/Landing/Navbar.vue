<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
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

onMounted(() => {
    document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
    document.removeEventListener('click', handleClickOutside);
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

            <!-- Navigation Links -->
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

            <!-- Right Controls: Multilingual Dropdown & Masuk Button -->
            <div class="flex items-center gap-space-md">
                <!-- Dropdown Pilihan Bahasa (Elegan & Minimalis Sesuai Spesifikasi) -->
                <div class="relative" ref="langDropdownRef">
                    <button 
                        @click.stop="isLangDropdownOpen = !isLangDropdownOpen"
                        type="button"
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high border border-surface-container-high text-xs font-bold text-on-surface transition-all cursor-pointer shadow-xs"
                        aria-label="Pilih Bahasa"
                        :aria-expanded="isLangDropdownOpen"
                    >
                        <!-- Bendera Aktif -->
                        <span v-if="locale === 'ID'" class="w-5 h-5 rounded-full overflow-hidden shrink-0 border border-black/10 inline-flex items-center justify-center">
                            <svg class="w-full h-full" viewBox="0 0 512 512">
                                <path fill="#e70011" d="M0 0h512v256H0z"/>
                                <path fill="#ffffff" d="M0 256h512v256H0z"/>
                            </svg>
                        </span>
                        <span v-else class="w-5 h-5 rounded-full overflow-hidden shrink-0 border border-black/10 inline-flex items-center justify-center">
                            <svg class="w-full h-full" viewBox="0 0 512 512">
                                <path fill="#00247d" d="M0 0h512v512H0z"/>
                                <path stroke="#fff" stroke-width="60" d="M0 0l512 512M512 0L0 512"/>
                                <path stroke="#cf142b" stroke-width="40" d="M0 0l512 512M512 0L0 512"/>
                                <path stroke="#fff" stroke-width="100" d="M256 0v512M0 256h512"/>
                                <path stroke="#cf142b" stroke-width="60" d="M256 0v512M0 256h512"/>
                            </svg>
                        </span>
                        
                        <!-- Nama Bahasa Aktif -->
                        <span class="font-semibold text-neutral-800">{{ locale === 'ID' ? 'Indonesia' : 'English' }}</span>
                        <span class="material-symbols-outlined text-[16px] text-neutral-500 transition-transform duration-200" :class="{ 'rotate-180': isLangDropdownOpen }">
                            expand_more
                        </span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div 
                        v-if="isLangDropdownOpen"
                        class="absolute right-0 mt-2 w-44 rounded-2xl bg-white shadow-xl border border-gray-100 py-1.5 z-50 animate-in fade-in zoom-in-95 duration-150 overflow-hidden"
                    >
                        <!-- Pilihan 1: Indonesia -->
                        <button 
                            @click="selectLang('ID')"
                            type="button"
                            class="w-full px-3.5 py-2.5 text-left flex items-center justify-between gap-2.5 text-xs font-semibold hover:bg-emerald-50 transition-colors cursor-pointer"
                            :class="locale === 'ID' ? 'text-[#005138] bg-emerald-50/70 font-bold' : 'text-gray-700'"
                        >
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full overflow-hidden shrink-0 border border-black/10 inline-flex items-center justify-center">
                                    <svg class="w-full h-full" viewBox="0 0 512 512">
                                        <path fill="#e70011" d="M0 0h512v256H0z"/>
                                        <path fill="#ffffff" d="M0 256h512v256H0z"/>
                                    </svg>
                                </span>
                                <span>🇮🇩 Indonesia</span>
                            </div>
                            <span v-if="locale === 'ID'" class="material-symbols-outlined text-[16px] text-[#005138]">check</span>
                        </button>

                        <!-- Pilihan 2: English -->
                        <button 
                            @click="selectLang('EN')"
                            type="button"
                            class="w-full px-3.5 py-2.5 text-left flex items-center justify-between gap-2.5 text-xs font-semibold hover:bg-emerald-50 transition-colors cursor-pointer"
                            :class="locale === 'EN' ? 'text-[#005138] bg-emerald-50/70 font-bold' : 'text-gray-700'"
                        >
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full overflow-hidden shrink-0 border border-black/10 inline-flex items-center justify-center">
                                    <svg class="w-full h-full" viewBox="0 0 512 512">
                                        <path fill="#00247d" d="M0 0h512v512H0z"/>
                                        <path stroke="#fff" stroke-width="60" d="M0 0l512 512M512 0L0 512"/>
                                        <path stroke="#cf142b" stroke-width="40" d="M0 0l512 512M512 0L0 512"/>
                                        <path stroke="#fff" stroke-width="100" d="M256 0v512M0 256h512"/>
                                        <path stroke="#cf142b" stroke-width="60" d="M256 0v512M0 256h512"/>
                                    </svg>
                                </span>
                                <span>🇬🇧 English</span>
                            </div>
                            <span v-if="locale === 'EN'" class="material-symbols-outlined text-[16px] text-[#005138]">check</span>
                        </button>
                    </div>
                </div>

                <!-- Masuk / Admin Login Button -->
                <a 
                    href="/admin/login" 
                    class="hidden sm:inline-flex items-center gap-space-xs px-space-lg py-2.5 rounded-full font-label-lg text-label-lg text-white bg-primary hover:bg-primary-container transition-all shadow-sm font-bold cursor-pointer"
                >
                    <span class="material-symbols-outlined text-[18px]">login</span>
                    <span>{{ t('nav_login') }}</span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="isMobileMenuOpen = !isMobileMenuOpen"
                    class="lg:hidden p-2 rounded-lg text-on-surface hover:bg-surface-container transition-colors"
                    type="button"
                    aria-label="Toggle Navigation"
                >
                    <span class="material-symbols-outlined text-[26px]">
                        {{ isMobileMenuOpen ? 'close' : 'menu' }}
                    </span>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div v-show="isMobileMenuOpen" class="lg:hidden border-t border-surface-container bg-white/98 px-gutter py-4 shadow-xl">
            <div class="flex flex-col gap-3 font-label-lg text-label-lg">
                <Link 
                    @click="isMobileMenuOpen = false" 
                    class="py-2 px-3 rounded-lg font-bold"
                    :class="isLinkActive('/') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary'"
                    href="/"
                >
                    {{ t('nav_home') }}
                </Link>
                <Link 
                    @click="isMobileMenuOpen = false" 
                    class="py-2 px-3 rounded-lg font-bold"
                    :class="isLinkActive('/about') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary'"
                    href="/about"
                >
                    {{ t('nav_about') }}
                </Link>
                <Link 
                    @click="isMobileMenuOpen = false" 
                    class="py-2 px-3 rounded-lg font-bold"
                    :class="isLinkActive('/business') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary'"
                    href="/business"
                >
                    {{ t('nav_business') }}
                </Link>
                <Link 
                    @click="isMobileMenuOpen = false" 
                    class="py-2 px-3 rounded-lg font-bold"
                    :class="isLinkActive('/news') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary'"
                    href="/news"
                >
                    {{ t('nav_news') }}
                </Link>
                <Link 
                    @click="isMobileMenuOpen = false" 
                    class="py-2 px-3 rounded-lg font-bold"
                    :class="isLinkActive('/contact') ? 'text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary'"
                    href="/contact"
                >
                    {{ t('nav_contact') }}
                </Link>

                <!-- Mobile Language Selector -->
                <div class="flex items-center justify-between p-3 rounded-xl bg-surface-container mt-2">
                    <span class="text-xs font-bold text-on-surface-variant">{{ locale === 'ID' ? 'Pilihan Bahasa:' : 'Language Selection:' }}</span>
                    <div class="flex items-center gap-1.5">
                        <button 
                            @click="selectLang('ID')"
                            :class="locale === 'ID' ? 'bg-[#005138] text-white shadow-xs' : 'bg-white text-gray-700'"
                            class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all flex items-center gap-1.5 shadow-xs"
                            type="button"
                        >
                            <span>🇮🇩</span>
                            <span>Indonesia</span>
                        </button>
                        <button 
                            @click="selectLang('EN')"
                            :class="locale === 'EN' ? 'bg-[#005138] text-white shadow-xs' : 'bg-white text-gray-700'"
                            class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all flex items-center gap-1.5 shadow-xs"
                            type="button"
                        >
                            <span>🇬🇧</span>
                            <span>English</span>
                        </button>
                    </div>
                </div>

                <a 
                    href="/admin/login" 
                    class="mt-1 inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-primary text-white font-bold shadow-sm"
                >
                    <span class="material-symbols-outlined text-[20px]">login</span>
                    <span>{{ t('nav_login') }}</span>
                </a>
            </div>
        </div>
    </header>
</template>
