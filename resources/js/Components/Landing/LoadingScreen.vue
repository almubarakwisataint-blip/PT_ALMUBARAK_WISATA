<script setup>
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';

const isLoading = ref(true);

onMounted(() => {
    // Initial page load finish
    setTimeout(() => {
        isLoading.value = false;
    }, 700);

    // Listen to Inertia page transitions
    router.on('start', () => {
        isLoading.value = true;
    });

    router.on('finish', () => {
        setTimeout(() => {
            isLoading.value = false;
        }, 300);
    });
});
</script>

<template>
    <Transition name="fade">
        <div 
            v-if="isLoading" 
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-gradient-to-b from-[#001710] via-[#00271b] to-[#00130c] select-none pointer-events-auto"
        >
            <!-- Ambient Radial Glow Emerald & Gold (Sesuai Warna Resmi Website) -->
            <div class="absolute w-[360px] sm:w-[480px] h-[360px] sm:h-[480px] rounded-full bg-gradient-to-tr from-emerald-600/25 via-emerald-400/15 to-transparent blur-3xl pointer-events-none"></div>

            <!-- Center Logo Almubarak: HANYA LOGO RESMI TANPA TEKS (Sesuai Permintaan User: "logonya saja jangan ada teksnya") -->
            <div class="relative flex items-center justify-center">
                <!-- Outer Pulse Rings Berpendar Halus Emerald -->
                <div class="absolute -inset-6 sm:-inset-8 rounded-full border border-emerald-400/25 animate-ping opacity-25 pointer-events-none"></div>
                <div class="absolute -inset-3 sm:-inset-4 rounded-full border border-emerald-300/35 animate-pulse pointer-events-none"></div>

                <!-- Glow Aura Zamrud & Emas di Belakang Logo -->
                <div class="absolute inset-0 rounded-full bg-emerald-400/20 blur-xl animate-pulse pointer-events-none"></div>

                <!-- Logo Asli Resmi Almubarak (Hanya Lambang Tanpa Teks) -->
                <img 
                    src="/images/logo-emblem.png" 
                    alt="Logo Almubarak" 
                    class="relative w-24 h-24 sm:w-28 sm:h-28 object-contain drop-shadow-[0_0_24px_rgba(16,185,129,0.85)] animate-logo-glow"
                />
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.4s ease-out;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

@keyframes logoGlow {
    0%, 100% {
        transform: scale(1);
        filter: drop-shadow(0 0 20px rgba(16, 185, 129, 0.75));
        opacity: 0.92;
    }
    50% {
        transform: scale(1.06);
        filter: drop-shadow(0 0 35px rgba(16, 185, 129, 0.95)) drop-shadow(0 0 20px rgba(245, 158, 11, 0.45));
        opacity: 1;
    }
}

.animate-logo-glow {
    animation: logoGlow 2.2s ease-in-out infinite;
}
</style>
