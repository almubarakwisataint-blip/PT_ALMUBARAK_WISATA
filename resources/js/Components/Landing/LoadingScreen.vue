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
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-gradient-to-b from-[#001c12] via-[#002b1c] to-[#00140c] select-none pointer-events-auto"
        >
            <!-- Ambient Radial Glow di Tengah (Persis Tampilan Minimalis Gambar Set Loading Sebelumnya) -->
            <div class="absolute w-[320px] sm:w-[420px] h-[320px] sm:h-[420px] rounded-full bg-gradient-to-tr from-emerald-500/25 via-emerald-400/15 to-transparent blur-3xl pointer-events-none"></div>

            <!-- HANYA LOGO RESMI ALMUBARAK DI TENGAH DENGAN HALO GLOW ANIMASI (SESUAI PERMINTAAN USER) -->
            <div class="relative flex items-center justify-center">
                <!-- Outer Halo Rings Berpendar Halus -->
                <div class="absolute -inset-6 sm:-inset-8 rounded-full border border-emerald-400/25 animate-ping opacity-30"></div>
                <div class="absolute -inset-3 sm:-inset-4 rounded-full border border-emerald-400/40 animate-pulse"></div>
                <div class="absolute inset-0 rounded-full border border-amber-400/30"></div>

                <!-- White Circular Badge Container for Official Almubarak Logo -->
                <div class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full bg-white p-3.5 sm:p-4 shadow-[0_0_40px_rgba(16,185,129,0.5)] border-2 border-emerald-400/70 flex items-center justify-center animate-logo-pulse">
                    <img 
                        src="/images/logo.png" 
                        alt="Logo Almubarak" 
                        class="w-full h-full object-contain filter drop-shadow-sm"
                    />
                </div>
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

@keyframes logoPulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.06);
    }
}

.animate-logo-pulse {
    animation: logoPulse 2.2s ease-in-out infinite;
}
</style>
