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
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-[#130d06] select-none pointer-events-auto"
        >
            <!-- Ambient Radial Glow Warm Amber/Gold (Persis Gambar 4 & 5) -->
            <div class="absolute w-[360px] sm:w-[460px] h-[360px] sm:h-[460px] rounded-full bg-gradient-to-tr from-amber-600/20 via-amber-500/10 to-transparent blur-3xl pointer-events-none"></div>

            <!-- Center Logo Almubarak: HANYA LOGO RESMI TANPA TEKS (Sesuai Permintaan User: "logonya saja jangan ada teksnya") -->
            <div class="relative flex items-center justify-center">
                <!-- Outer Pulse Rings Berpendar Halus -->
                <div class="absolute -inset-6 sm:-inset-8 rounded-full border border-amber-500/20 animate-ping opacity-25 pointer-events-none"></div>
                <div class="absolute -inset-3 sm:-inset-4 rounded-full border border-amber-400/30 animate-pulse pointer-events-none"></div>

                <!-- Warm Amber & Emerald Glow Behind Logo -->
                <div class="absolute inset-0 rounded-full bg-amber-500/20 blur-xl animate-pulse pointer-events-none"></div>

                <!-- Logo Asli Resmi Almubarak Beranimasi Glow Mewah -->
                <img 
                    src="/images/logo.png" 
                    alt="Logo Almubarak" 
                    class="relative w-24 h-24 sm:w-28 sm:h-28 object-contain drop-shadow-[0_0_24px_rgba(245,158,11,0.7)] animate-logo-glow"
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
        filter: drop-shadow(0 0 20px rgba(245, 158, 11, 0.65));
        opacity: 0.92;
    }
    50% {
        transform: scale(1.06);
        filter: drop-shadow(0 0 35px rgba(245, 158, 11, 0.95)) drop-shadow(0 0 15px rgba(16, 185, 129, 0.4));
        opacity: 1;
    }
}

.animate-logo-glow {
    animation: logoGlow 2.2s ease-in-out infinite;
}
</style>
