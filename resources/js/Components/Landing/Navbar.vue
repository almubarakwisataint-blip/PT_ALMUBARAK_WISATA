<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { useI18n } from '@/Composables/useI18n';

const page = usePage();
const isMobileMenuOpen = ref(false);
const { locale, setLocale, t } = useI18n();

const toggleLang = (lang) => {
    setLocale(lang);
};

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

            <!-- Right Controls: Language pill switch & Masuk Button -->
            <div class="flex items-center gap-space-md">
                <!-- ID / EN Toggle Pill -->
                <div class="inline-flex items-center p-0.5 rounded-full bg-surface-container border border-surface-container-high text-label-sm font-label-sm">
                    <button 
                        @click="toggleLang('ID')"
                        :class="locale === 'ID' ? 'bg-primary text-white font-bold shadow-xs' : 'text-on-surface-variant hover:text-primary'"
                        class="px-2.5 py-1 rounded-full transition-all cursor-pointer" 
                        type="button"
                    >
                        ID
                    </button>
                    <button 
                        @click="toggleLang('EN')"
                        :class="locale === 'EN' ? 'bg-primary text-white font-bold shadow-xs' : 'text-on-surface-variant hover:text-primary'"
                        class="px-2.5 py-1 rounded-full transition-all cursor-pointer" 
                        type="button"
                    >
                        EN
                    </button>
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
                <a 
                    href="/admin/login" 
                    class="mt-2 inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-primary text-white font-bold shadow-sm"
                >
                    <span class="material-symbols-outlined text-[20px]">login</span>
                    <span>{{ t('nav_login') }}</span>
                </a>
            </div>
        </div>
    </header>
</template>
