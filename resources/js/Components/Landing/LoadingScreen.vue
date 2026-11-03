<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { router } from '@inertiajs/vue3';

const isLoading = ref(true);
const progress = ref(0);
let animationTimer = null;

const runLoadingSequence = (duration = 1250) => {
    progress.value = 0;
    isLoading.value = true;
    const startTime = performance.now();

    if (animationTimer) cancelAnimationFrame(animationTimer);

    const step = (now) => {
        const elapsed = now - startTime;
        const rawProgress = Math.min(elapsed / duration, 1);
        
        // Easing curve: smooth acceleration and crisp finish
        const eased = rawProgress < 0.5 
            ? 2 * rawProgress * rawProgress 
            : 1 - Math.pow(-2 * rawProgress + 2, 2) / 2;

        progress.value = Math.round(eased * 100);

        if (rawProgress < 1) {
            animationTimer = requestAnimationFrame(step);
        } else {
            progress.value = 100;
            // Frame 6: Logo mencapai puncak kilau radiant, lalu fade out
            setTimeout(() => {
                isLoading.value = false;
            }, 260);
        }
    };

    animationTimer = requestAnimationFrame(step);
};

onMounted(() => {
    // Initial page load sequence (Persis 6 Frame Storyboard Referensi User)
    runLoadingSequence(1250);

    router.on('start', () => {
        runLoadingSequence(500);
    });

    router.on('finish', () => {
        progress.value = 100;
        setTimeout(() => {
            isLoading.value = false;
        }, 180);
    });
});

onBeforeUnmount(() => {
    if (animationTimer) {
        cancelAnimationFrame(animationTimer);
    }
});
</script>

<template>
    <Transition name="fade">
        <div 
            v-if="isLoading" 
            class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#01140c] select-none pointer-events-auto overflow-hidden"
        >
            <!-- 1. Ambient Background Radial Glow (Sesuai Frame 1-6) -->
            <div 
                class="absolute w-[380px] sm:w-[520px] h-[380px] sm:h-[520px] rounded-full bg-gradient-to-tr from-emerald-600/35 via-emerald-500/20 to-transparent blur-3xl pointer-events-none transition-all duration-700"
                :style="{ 
                    transform: `scale(${0.8 + (progress / 100) * 0.4})`, 
                    opacity: progress > 5 ? 1 : 0.5 
                }"
            ></div>
            
            <div 
                class="absolute w-[200px] h-[200px] rounded-full bg-emerald-400/25 blur-2xl pointer-events-none transition-all duration-500"
                :style="{ opacity: progress >= 20 ? 1 : 0.3 }"
            ></div>

            <!-- 2. Horizontal Anamorphic Light Streak (Sesuai Frame 3, 4, 5, 6) -->
            <div 
                class="absolute w-[320px] sm:w-[500px] h-[1.5px] bg-gradient-to-r from-transparent via-[#00ff88]/80 to-transparent blur-[0.5px] pointer-events-none transition-all duration-500"
                :style="{
                    opacity: progress >= 25 ? (progress >= 95 ? 1 : 0.7) : 0,
                    transform: `scaleX(${Math.min(0.2 + (progress / 75), 1.25)})`
                }"
            ></div>

            <!-- 3. Center Circle Container with Animated Logo Reveal (Sesuai Frame 2, 3, 4, 5, 6) -->
            <div class="relative flex flex-col items-center justify-center">
                <!-- Circular Thin Ring -->
                <div 
                    class="relative w-28 h-28 sm:w-32 sm:h-32 rounded-full border flex items-center justify-center transition-all duration-500"
                    :class="[
                        progress >= 15 ? 'opacity-100' : 'opacity-0 scale-95',
                        progress >= 85 
                            ? 'border-emerald-300 shadow-[0_0_28px_rgba(0,255,136,0.55)] scale-105' 
                            : 'border-emerald-500/40 shadow-[0_0_14px_rgba(16,185,129,0.25)]'
                    ]"
                >
                    <!-- Inner Logo Masked / Revealed from Top to Bottom based on Progress -->
                    <div class="w-16 h-16 sm:w-20 sm:h-20 flex items-center justify-center relative overflow-hidden">
                        <img 
                            src="/images/logo-emblem.png" 
                            alt="Logo Almubarak"
                            class="w-full h-full object-contain transition-all duration-150"
                            :style="{
                                clipPath: `inset(0 0 ${Math.max(0, 100 - (progress * 1.15))}% 0)`,
                                filter: `drop-shadow(0 0 ${progress >= 90 ? '24px' : '14px'} #00ff88) drop-shadow(0 0 ${progress >= 95 ? '40px' : '20px'} rgba(16,185,129,0.85)) brightness(${1 + (progress / 100) * 0.4})`
                            }"
                        />
                    </div>
                </div>

                <!-- 4. Sleek Minimalist Progress Bar (Sesuai Frame 2, 3, 4, 5) -->
                <!-- Hilang/Fade Out di Frame 6 saat progress >= 100 -->
                <div 
                    class="mt-7 sm:mt-8 w-44 sm:w-48 h-[3.5px] rounded-full bg-emerald-950/90 border border-emerald-500/30 p-[0.5px] overflow-hidden transition-all duration-300"
                    :class="progress >= 100 ? 'opacity-0 scale-95 pointer-events-none' : 'opacity-100'"
                >
                    <div 
                        class="h-full rounded-full bg-gradient-to-r from-emerald-500 via-[#00ff88] to-[#69f0ae] shadow-[0_0_12px_#00ff88] transition-all duration-100"
                        :style="{ width: `${progress}%` }"
                    ></div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.45s cubic-bezier(0.4, 0, 0.2, 1);
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
