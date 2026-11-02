<script setup>
import Navbar from '@/Components/Landing/Navbar.vue';
import Footer from '@/Components/Landing/Footer.vue';
import LoadingScreen from '@/Components/Landing/LoadingScreen.vue';
</script>

<template>
    <div class="min-h-screen bg-surface font-sans text-on-surface relative selection:bg-primary-container selection:text-white overflow-x-hidden">
        <!-- Preloader / Loading Screen (Sesuai Gambar 1, 2, 3) -->
        <LoadingScreen />
        <!-- Background Pattern & Subtle Gradient Scrim -->
        <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
            <div 
                class="w-full h-full bg-cover bg-center absolute inset-0 opacity-10" 
                style="background-image: url('/images/landing/bg-pattern.jpg');"
            ></div>
            <div 
                class="absolute inset-0" 
                style="background: radial-gradient(circle at 50% 20%, rgba(19, 168, 75, 0.08) 0%, rgba(19, 168, 75, 0.04) 50%, rgba(19, 168, 75, 0.01) 100%);"
            ></div>
        </div>

        <!-- Sticky Header / Navbar -->
        <Navbar />

        <!-- Main Content Area with top padding for navbar -->
        <main class="w-full pt-20 bg-transparent relative z-10">
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>

