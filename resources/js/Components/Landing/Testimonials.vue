<script setup>
import { computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const rawTestimonials = [
    {
        name: 'Dr. Hendra Gunawan & Ibunda',
        roleId: 'Jamaah Umrah Reguler Bintang 5 (Bandung)',
        roleEn: '5-Star Regular Umrah Pilgrim (Bandung)',
        avatar: '/images/landing/testi-hendra.jpg',
        quoteId: '“Alhamdulillah, memberangkatkan kedua orang tua yang sudah sepuh terasa sangat tenang bersama Almubarak. Tim Muthawif dan tour leader sangat sigap menyediakan kursi roda saat tawaf dan sa\'i. Hotel benar-benar selangkah dari halaman masjid.”',
        quoteEn: '“Alhamdulillah, bringing my elderly parents was so peaceful with Almubarak. The Muthawif and tour leaders were always ready with wheelchairs during Tawaf and Sa\'i. The hotel was literally steps from the mosque courtyard.”',
    },
    {
        name: 'Ir. H. Muhammad Fachri & Keluarga',
        roleId: 'Jamaah Haji Khusus Furoda 1445 H (Jakarta)',
        roleEn: 'Special Furoda Hajj Pilgrim 1445 H (Jakarta)',
        avatar: '/images/landing/testi-fachri.jpg',
        quoteId: '“Bimbingan manasik sebelum berangkat sangat tuntas dan ilmiah sesuai sunnah Rasulullah ﷺ. Saat di Mekkah, kami dibimbing doa satu per satu. Pengurusan visa dan fasilitas VIP Maktab di Mina benar-benar sesuai apa yang dijanjikan, tidak ada tipu-tipu.”',
        quoteEn: '“The pre-departure rituals guidance was thorough and authentic to the Sunnah of Prophet ﷺ. In Makkah, we received personal prayer guidance. The visa issuance and VIP Mina Maktab facilities were 100% genuine as promised.”',
    },
    {
        name: 'Hj. Siti Nurhaliza S.E.',
        roleId: 'Jamaah Wisata Halal Turki Plus Umrah (Surabaya)',
        roleEn: 'Halal Turkey Plus Umrah Pilgrim (Surabaya)',
        avatar: '/images/landing/testi-siti.jpg',
        quoteId: '“Paket Umrah Plus Turki-nya luar biasa! Pemandu sejarah di Istanbul sangat berpengetahuan luas, makanan halal terjamin mewah, dan transisi ke Madinah serta Makkah sangat mulus menggunakan kereta cepat Haramain High Speed Rail.”',
        quoteEn: '“The Umrah Plus Turkey package was extraordinary! The historian guide in Istanbul was deeply knowledgeable, halal food was luxurious, and the journey to Madinah and Makkah was seamless via Haramain High Speed Rail.”',
    },
];

const testimonials = computed(() => {
    const isEn = locale.value === 'EN';
    return rawTestimonials.map(t => ({
        name: t.name,
        role: isEn ? t.roleEn : t.roleId,
        avatar: t.avatar,
        quote: isEn ? t.quoteEn : t.quoteId,
    }));
});

const rawGallery = [
    {
        titleId: 'Jamaah Group Keberangkatan September 2024',
        titleEn: 'September 2024 Departure Group Pilgrims',
        image: '/images/landing/gallery-jamaah.jpg',
    },
    {
        titleId: 'Ziarah Bersejarah Jabal Uhud',
        titleEn: 'Historic Ziyarah at Mount Uhud',
        image: '/images/landing/gallery-uhud.jpg',
    },
    {
        titleId: 'Pelayanan Buffet Bintang 5',
        titleEn: '5-Star Fullboard Buffet Service',
        image: '/images/landing/gallery-buffet.jpg',
    },
    {
        titleId: 'Fasilitas Kereta Cepat Haramain',
        titleEn: 'Haramain High Speed Rail Facilities',
        image: '/images/landing/gallery-kereta.jpg',
    },
];

const gallery = computed(() => {
    const isEn = locale.value === 'EN';
    return rawGallery.map(g => ({
        title: isEn ? g.titleEn : g.titleId,
        image: g.image,
    }));
});
</script>

<template>
    <!-- TESTIMONI JAMAAH & DOKUMENTASI REALISTIS -->
    <section class="w-full py-space-xl bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-gutter">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-space-xl">
                <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                    {{ locale === 'ID' ? 'Kisah Perjalanan & Kepuasan' : 'Pilgrim Journeys & Satisfaction' }}
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight mt-1">
                    {{ locale === 'ID' ? 'Ketenangan Hati & Pengalaman Nyata Jamaah' : 'Peace of Mind & Real Pilgrim Experiences' }}
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    {{ locale === 'ID' ? 'Ratusan keluarga, orang tua lanjut usia, hingga profesional telah mempercayakan perjalanan ibadah mereka kepada bimbingan Almubarak Wisata.' : 'Hundreds of families, elderly parents, and professionals have trusted their spiritual journey to Almubarak Wisata guidance.' }}
                </p>
            </div>

            <!-- Testimonial Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                <div 
                    v-for="(testi, idx) in testimonials" 
                    :key="idx"
                    class="bg-surface p-space-lg rounded-xl shadow-sm flex flex-col justify-between border border-surface-container/60 hover:shadow-md transition-shadow"
                >
                    <div class="space-y-space-md">
                        <!-- Star rating -->
                        <div class="flex items-center gap-1 text-[#fbbd23]">
                            <span v-for="s in 5" :key="s" class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">
                                star
                            </span>
                        </div>
                        <p class="font-body-md text-[14px] text-on-surface italic leading-relaxed">
                            {{ testi.quote }}
                        </p>
                    </div>

                    <div class="flex items-center gap-space-md pt-space-lg mt-space-md border-t border-surface-container/60">
                        <img 
                            :src="testi.avatar" 
                            :alt="testi.name" 
                            class="w-12 h-12 rounded-full object-cover shrink-0 border-2 border-primary/20"
                        />
                        <div>
                            <div class="font-label-lg text-label-lg font-bold text-on-surface">
                                {{ testi.name }}
                            </div>
                            <div class="font-body-sm text-[12px] text-outline">
                                {{ testi.role }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Live Photo Gallery Mosaic -->
            <div class="mt-space-xl grid grid-cols-2 md:grid-cols-4 gap-space-md">
                <div 
                    v-for="(item, gIdx) in gallery" 
                    :key="gIdx"
                    class="relative h-48 rounded-xl overflow-hidden group shadow-sm border border-surface-container/40"
                >
                    <div 
                        class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform duration-700"
                        :style="{ backgroundImage: `url(${item.image})` }"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent flex items-end p-space-sm text-on-primary font-label-sm text-[12px] font-medium drop-shadow-sm">
                        {{ item.title }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

