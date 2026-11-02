<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeroSection from '@/Components/Landing/HeroSection.vue';
import FeaturedPackages from '@/Components/Landing/FeaturedPackages.vue';
import ConsultationAssistantCard from '@/Components/Landing/ConsultationAssistantCard.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import Testimonials from '@/Components/Landing/Testimonials.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

defineProps({
    news: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <Head title="Almubarak.com - Haji &amp; Umrah Premium Terpercaya" />

    <AppLayout>
        <!-- Hero Section with Kaaba Visual & Search Bar -->
        <HeroSection />

        <!-- Featured Packages (4 Cards) - Gambar 3 -->
        <FeaturedPackages />

        <!-- Interactive Consultation Card & Special Offers Carousel -->
        <ConsultationAssistantCard />

        <!-- 5 Pillars of Kemenag RI Certainty -->
        <FivePillars />

        <!-- Testimonials & Real Pilgrimage Documentation Gallery -->
        <Testimonials />

        <!-- WhatsApp Consultation CTA Banner -->
        <CtaBanner />
    </AppLayout>
</template>

