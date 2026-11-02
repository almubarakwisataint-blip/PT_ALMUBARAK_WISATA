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
            class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#130d06] text-white select-none pointer-events-auto"
        >
            <!-- Ambient Radial Glow di Tengah (Persis Gambar 1, 2, 3) -->
            <div class="absolute w-[340px] sm:w-[420px] h-[340px] sm:h-[420px] rounded-full bg-gradient-to-tr from-amber-600/15 via-amber-500/10 to-transparent blur-3xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col items-center justify-center gap-5">
                <!-- Logo Emblem Almubarak Animated (Makna Logo: Kubah, Huruf M & A, Keberkahan) -->
                <div class="relative w-24 h-24 sm:w-28 sm:h-28 flex items-center justify-center">
                    <!-- Outer Glowing Ring -->
                    <div class="absolute inset-0 rounded-full border border-amber-500/20 animate-ping opacity-25"></div>
                    <div class="absolute inset-2 rounded-full border border-amber-400/30 animate-pulse"></div>

                    <!-- SVG Geometric Almubarak Emblem (Drawing Animation) -->
                    <svg 
                        class="w-16 h-16 sm:w-20 sm:h-20 text-amber-400 drop-shadow-[0_0_15px_rgba(245,158,11,0.6)]" 
                        viewBox="0 0 100 100" 
                        fill="none" 
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- Geometric Mosque Minaret & Kaaba Dome Silhouette -->
                        <path 
                            d="M50 15 L82 45 L70 45 L70 80 L30 80 L30 45 L18 45 Z" 
                            stroke="currentColor" 
                            stroke-width="3" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                            class="draw-path"
                        />
                        <!-- Inner Mubarak Arch & Crescent -->
                        <path 
                            d="M50 32 L62 55 L38 55 Z" 
                            stroke="#fcd34d" 
                            stroke-width="2.5" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                            class="draw-path-delay"
                        />
                        <circle cx="50" cy="68" r="4" fill="#fbbf24" class="animate-pulse" />
                    </svg>
                </div>

                <!-- Brand Name & Subtitle -->
                <div class="text-center flex flex-col items-center gap-1">
                    <span class="font-headline-sm text-xl sm:text-2xl font-black tracking-[0.25em] text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-amber-100 to-amber-400 drop-shadow-sm">
                        ALMUBARAK
                    </span>
                    <span class="text-[10px] tracking-[0.3em] uppercase text-amber-200/70 font-semibold font-mono">
                        HAJI &amp; UMRAH PREMIUM
                    </span>
                </div>

                <!-- Sleek Shimmering Loading Progress Line -->
                <div class="w-44 h-1 bg-white/10 rounded-full overflow-hidden relative mt-2">
                    <div class="absolute top-0 bottom-0 left-0 bg-gradient-to-r from-amber-500 via-amber-300 to-amber-500 rounded-full w-full animate-progress-slide"></div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease-out;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

/* SVG Line Drawing Keyframes */
.draw-path {
    stroke-dasharray: 260;
    stroke-dashoffset: 260;
    animation: drawStroke 2s ease-in-out infinite alternate;
}

.draw-path-delay {
    stroke-dasharray: 120;
    stroke-dashoffset: 120;
    animation: drawStroke 2s ease-in-out infinite alternate 0.3s;
}

@keyframes drawStroke {
    0% {
        stroke-dashoffset: 260;
        opacity: 0.3;
    }
    50% {
        stroke-dashoffset: 0;
        opacity: 1;
    }
    100% {
        stroke-dashoffset: 0;
        opacity: 1;
    }
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
    animation: progressSlide 1.5s ease-in-out infinite;
}
</style>