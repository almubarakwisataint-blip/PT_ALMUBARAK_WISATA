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
            class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-gradient-to-b from-[#001c12] via-[#002b1c] to-[#00140c] text-white select-none pointer-events-auto"
        >
            <!-- Ambient Radial Glow Emerald di Tengah (Warna Khas Almubarak) -->
            <div class="absolute w-[360px] sm:w-[460px] h-[360px] sm:h-[460px] rounded-full bg-gradient-to-tr from-emerald-500/30 via-emerald-600/15 to-amber-500/10 blur-3xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col items-center justify-center gap-5">
                <!-- Logo Resmi Almubarak Beranimasi (Sesuai Permintaan: Warna Website & Logo Asli) -->
                <div class="relative w-28 h-28 sm:w-32 sm:h-32 flex items-center justify-center">
                    <!-- Outer Glowing & Pulsing Rings -->
                    <div class="absolute inset-0 rounded-full border-2 border-emerald-400/30 animate-ping opacity-35"></div>
                    <div class="absolute -inset-1.5 rounded-full border border-emerald-300/40 animate-pulse"></div>
                    <div class="absolute inset-2 rounded-full border border-amber-400/30"></div>

                    <!-- White Circular Badge Container for Official Almubarak Logo -->
                    <div class="relative w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-white p-3 shadow-[0_0_35px_rgba(16,185,129,0.45)] border-2 border-emerald-400/60 flex items-center justify-center transform transition-transform hover:scale-105">
                        <img 
                            src="/images/logo.png" 
                            alt="Logo Resmi Almubarak Wisata" 
                            class="w-full h-full object-contain filter drop-shadow-sm animate-pulse"
                        />
                    </div>
                </div>

                <!-- Brand Name & Subtitle (Persis Identitas Navbar & Footer Website) -->
                <div class="text-center flex flex-col items-center gap-1.5">
                    <span class="font-headline-sm text-2xl sm:text-3xl font-black tracking-tight text-white drop-shadow-md">
                        Almubarak<span class="text-emerald-400 font-extrabold">.com</span>
                    </span>
                    <span class="text-[11px] sm:text-xs tracking-[0.28em] uppercase text-amber-300 font-bold font-mono">
                        HAJI &amp; UMRAH PREMIUM
                    </span>
                </div>

                <!-- Sleek Shimmering Loading Progress Line (Emerald & Gold) -->
                <div class="w-48 h-1 bg-white/10 rounded-full overflow-hidden relative mt-2 border border-emerald-400/20 shadow-inner">
                    <div class="absolute top-0 bottom-0 left-0 bg-gradient-to-r from-emerald-500 via-amber-300 to-emerald-400 rounded-full w-full animate-progress-slide"></div>
                </div>

                <!-- Subtle Status Indicator -->
                <span class="text-[10px] tracking-wider text-white/60 font-medium">
                    Menyiapkan Layanan Terbaik...
                </span>
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

@keyframes progressSlide {
    0% {
        transform: translateX(-100%);
    }
    50% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(100%);
    }
}

.animate-progress-slide {
    animation: progressSlide 1.4s ease-in-out infinite;
}
</style>
