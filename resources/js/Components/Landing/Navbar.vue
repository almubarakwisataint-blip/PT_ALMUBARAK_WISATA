<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isMobileMenuOpen = ref(false);
const activeLang = ref('ID');

const toggleLang = (lang) => {
    activeLang.value = lang;
};
</script>

<template>
    <!-- TOP NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-surface-container shadow-[0_1px_12px_rgba(0,0,0,0.05)]">
        <div class="h-20 max-w-7xl mx-auto px-gutter flex items-center justify-between">
            <!-- Brand Logo & Name -->
            <a class="flex items-center gap-space-sm group" href="/">
                <img 
                    alt="Almubarak Wisata Logo" 
                    class="h-10 w-auto object-contain rounded-md transition-transform duration-300 group-hover:scale-105" 
                    src="/images/logo-almubarak.jpg"
                />
                <div class="flex flex-col">
                    <span class="font-headline-sm text-[21px] text-primary leading-tight font-extrabold tracking-tight">
                        Almubarak<span class="text-secondary font-bold">.com</span>
                    </span>
                    <span class="font-label-sm text-[10px] text-outline tracking-wider uppercase font-semibold">
                        Haji &amp; Umrah Premium
                    </span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden lg:flex items-center gap-space-lg font-label-lg text-label-lg">
                <a aria-current="page" class="transition-colors py-1 px-1 text-primary font-bold border-b-2 border-primary" href="/">
                    Beranda
                </a>
                <a class="text-on-surface-variant hover:text-primary transition-colors py-1 px-1 font-medium" href="/about">
                    Tentang Kami
                </a>
                <a class="text-on-surface-variant hover:text-primary transition-colors py-1 px-1 font-medium" href="/business">
                    Bisnis Kami
                </a>
                <a class="text-on-surface-variant hover:text-primary transition-colors py-1 px-1 font-medium" href="/news">
                    Berita
                </a>
                <a class="text-on-surface-variant hover:text-primary transition-colors py-1 px-1 font-medium" href="/contact">
                    Hubungi Kami
                </a>
            </nav>

            <!-- Right Controls: Language pill switch & Masuk Button -->
            <div class="flex items-center gap-space-md">
                <!-- ID / EN Toggle Pill -->
                <div class="inline-flex items-center p-0.5 rounded-full bg-surface-container border border-surface-container-high text-label-sm font-label-sm">
                    <button 
                        @click="toggleLang('ID')"
                        :class="activeLang === 'ID' ? 'bg-primary text-white font-bold shadow-xs' : 'text-on-surface-variant hover:text-primary'"
                        class="px-2.5 py-1 rounded-full transition-all cursor-pointer" 
                        type="button"
                    >
                        ID
                    </button>
                    <button 
                        @click="toggleLang('EN')"
                        :class="activeLang === 'EN' ? 'bg-primary text-white font-bold shadow-xs' : 'text-on-surface-variant hover:text-primary'"
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
                    <span>Masuk</span>
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
                <a class="py-2 px-3 text-primary font-bold bg-surface-container rounded-lg" href="/">
                    Beranda
                </a>
                <a class="py-2 px-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="/about">
                    Tentang Kami
                </a>
                <a class="py-2 px-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="/business">
                    Bisnis Kami
                </a>
                <a class="py-2 px-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="/news">
                    Berita
                </a>
                <a class="py-2 px-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="/contact">
                    Hubungi Kami
                </a>
                <a 
                    href="/admin/login" 
                    class="mt-2 inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-primary text-white font-bold shadow-sm"
                >
                    <span class="material-symbols-outlined text-[20px]">login</span>
                    <span>Masuk ke Akun</span>
                </a>
            </div>
        </div>
    </header>
</template>

