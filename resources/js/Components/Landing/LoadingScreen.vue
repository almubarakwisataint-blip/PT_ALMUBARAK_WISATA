<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { router } from '@inertiajs/vue3';

const isLoading = ref(true);
let finishTimeout = null;
let initialTimer = null;

const dismiss = (delay = 450) => {
    if (finishTimeout) clearTimeout(finishTimeout);
    finishTimeout = setTimeout(() => {
        isLoading.value = false;
    }, delay);
};

onMounted(() => {
    // Sesi awal: Tampilkan animasi pembentukan logo secara smooth dan elegan
    initialTimer = setTimeout(() => {
        dismiss(300);
    }, 1800);

    // Inertia page navigation hooks
    router.on('start', () => {
        if (finishTimeout) clearTimeout(finishTimeout);
        isLoading.value = true;
    });

    router.on('finish', () => {
        dismiss(400);
    });
});

onBeforeUnmount(() => {
    if (initialTimer) clearTimeout(initialTimer);
    if (finishTimeout) clearTimeout(finishTimeout);
});
</script>

<template>
    <Transition name="loading-fade">
        <div 
            v-if="isLoading" 
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-[#02130b]/80 backdrop-blur-md select-none pointer-events-auto overflow-hidden transition-all duration-500"
            role="status"
            aria-label="Memuat Almubarak Wisata"
        >
            <!-- 1. Ambient Center Radial Glow (Halus, hangat, translusen & tidak pekat kaku) -->
            <div class="absolute w-[360px] sm:w-[500px] h-[360px] sm:h-[500px] rounded-full bg-[radial-gradient(circle,_rgba(0,255,136,0.18)_0%,_rgba(16,185,129,0.08)_40%,_transparent_70%)] blur-2xl pointer-events-none alm-ambient-pulse"></div>

            <!-- 2. Logo Almubarak Container (Ukuran proporsional sesuai referensi TenagaAhli ~130px) -->
            <div class="relative w-32 h-40 sm:w-36 sm:h-44 flex items-center justify-center">
                
                <!-- A. Outer Vector Strokes yang menggambar bentuk lambang Almubarak secara halus -->
                <svg 
                    viewBox="0 0 166 206" 
                    class="absolute inset-0 w-full h-full pointer-events-none overflow-visible"
                    aria-hidden="true"
                >
                    <!-- Chevron Atas (Peak Arrow Almubarak) -->
                    <path 
                        class="alm-stroke alm-draw-top"
                        pathLength="1"
                        d="M 83 14 L 137 97 L 126 112 L 83 45 L 40 112 L 29 97 Z"
                    />
                    <!-- Chevron Bawah (Folded 'W' Base Almubarak) -->
                    <path 
                        class="alm-stroke alm-draw-bottom"
                        pathLength="1"
                        d="M 13 126 L 46 193 L 83 115 L 120 193 L 153 126 L 138 147 L 120 171 L 83 133 L 46 171 L 28 147 Z"
                    />
                </svg>

                <!-- B. Logo Asli Almubarak (HD Emblem) yang muncul & bersinar lembut seiring goresan garis -->
                <div class="relative w-full h-full flex items-center justify-center alm-emblem-reveal">
                    <img 
                        src="/images/logo-emblem.png" 
                        alt="Logo Almubarak Wisata"
                        class="w-full h-full object-contain filter drop-shadow-[0_0_20px_rgba(0,255,136,0.65)]"
                    />
                </div>

                <!-- C. Aura Cahaya Kilau di Puncak Lambang -->
                <div class="absolute top-2 w-8 h-8 rounded-full bg-[#00ff88]/30 blur-md pointer-events-none alm-sparkle"></div>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
/* Transisi Kemunculan & Penutupan Seluruh Layar Loading */
.loading-fade-enter-active,
.loading-fade-leave-active {
    transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1), transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.loading-fade-enter-from,
.loading-fade-leave-to {
    opacity: 0;
    transform: scale(0.98);
}

/* Garis Vektor: Stroke animasi halus seperti pada referensi tenagaahli */
.alm-stroke {
    fill: none;
    stroke: #00ff88;
    stroke-width: 3.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 1;
    stroke-dashoffset: 1;
    filter: drop-shadow(0 0 8px rgba(0, 255, 136, 0.85));
}

.alm-draw-top {
    animation: almDraw 2.6s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}

.alm-draw-bottom {
    stroke: #10b981;
    animation: almDraw 2.6s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    animation-delay: 0.15s;
}

/* Kemunculan Logo Almubarak yang Asli dan Bersinar Lembut */
.alm-emblem-reveal {
    animation: almFill 2.6s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}

/* Denyut Aura Ambient */
.alm-ambient-pulse {
    animation: almPulse 3.5s ease-in-out infinite;
}

/* Kilau Titik Puncak */
.alm-sparkle {
    animation: almSparkle 2.6s ease-in-out infinite;
}

/* Keyframes Goresan Garis (Draw Stroke) */
@keyframes almDraw {
    0% {
        stroke-dashoffset: 1;
        opacity: 0.2;
    }
    35%, 82% {
        stroke-dashoffset: 0;
        opacity: 1;
    }
    100% {
        stroke-dashoffset: 0;
        opacity: 0;
    }
}

/* Keyframes Iluminasi Logo Asli Almubarak */
@keyframes almFill {
    0%, 25% {
        opacity: 0;
        transform: scale(0.95);
        filter: brightness(0.6) drop-shadow(0 0 10px rgba(0, 255, 136, 0.2));
    }
    55%, 85% {
        opacity: 1;
        transform: scale(1);
        filter: brightness(1.1) drop-shadow(0 0 24px rgba(0, 255, 136, 0.8)) drop-shadow(0 0 40px rgba(16, 185, 129, 0.45));
    }
    100% {
        opacity: 0.15;
        transform: scale(1.02);
        filter: brightness(0.8) drop-shadow(0 0 10px rgba(0, 255, 136, 0.1));
    }
}

/* Keyframes Ambient Pulse */
@keyframes almPulse {
    0%, 100% {
        transform: scale(0.92);
        opacity: 0.5;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.9;
    }
}

/* Keyframes Sparkle */
@keyframes almSparkle {
    0%, 30% {
        opacity: 0;
        transform: scale(0.5);
    }
    55%, 80% {
        opacity: 1;
        transform: scale(1.3);
    }
    100% {
        opacity: 0;
        transform: scale(0.8);
    }
}

@media (prefers-reduced-motion: reduce) {
    .alm-stroke,
    .alm-emblem-reveal,
    .alm-ambient-pulse,
    .alm-sparkle {
        animation-duration: 6s;
    }
}
</style>
