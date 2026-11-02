<script setup>
const testimonials = [
    {
        name: 'Dr. Hendra Gunawan & Ibunda',
        role: 'Jamaah Umrah Reguler Bintang 5 (Bandung)',
        avatar: '/images/landing/testi-hendra.jpg',
        quote: '“Alhamdulillah, memberangkatkan kedua orang tua yang sudah sepuh terasa sangat tenang bersama Almubarak. Tim Muthawif dan tour leader sangat sigap menyediakan kursi roda saat tawaf dan sa\'i. Hotel benar-benar selangkah dari halaman masjid.”',
    },
    {
        name: 'Ir. H. Muhammad Fachri & Keluarga',
        role: 'Jamaah Haji Khusus Furoda 1445 H (Jakarta)',
        avatar: '/images/landing/testi-fachri.jpg',
        quote: '“Bimbingan manasik sebelum berangkat sangat tuntas dan ilmiah sesuai sunnah Rasulullah ﷺ. Saat di Mekkah, kami dibimbing doa satu per satu. Pengurusan visa dan fasilitas VIP Maktab di Mina benar-benar sesuai apa yang dijanjikan, tidak ada tipu-tipu.”',
    },
    {
        name: 'Hj. Siti Nurhaliza S.E.',
        role: 'Jamaah Wisata Halal Turki Plus Umrah (Surabaya)',
        avatar: '/images/landing/testi-siti.jpg',
        quote: '“Paket Umrah Plus Turki-nya luar biasa! Pemandu sejarah di Istanbul sangat berpengetahuan luas, makanan halal terjamin mewah, dan transisi ke Madinah serta Makkah sangat mulus menggunakan kereta cepat Haramain High Speed Rail.”',
    },
];

const gallery = [
    {
        title: 'Jamaah Group Keberangkatan September 2024',
        image: '/images/landing/gallery-jamaah.jpg',
    },
    {
        title: 'Ziarah Bersejarah Jabal Uhud',
        image: '/images/landing/gallery-uhud.jpg',
    },
    {
        title: 'Pelayanan Buffet Bintang 5',
        image: '/images/landing/gallery-buffet.jpg',
    },
    {
        title: 'Fasilitas Kereta Cepat Haramain',
        image: '/images/landing/gallery-kereta.jpg',
    },
];
</script>

<template>
    <!-- TESTIMONI JAMAAH & DOKUMENTASI REALISTIS -->
    <section class="w-full py-space-xl bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-gutter">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-space-xl">
                <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                    Kisah Perjalanan &amp; Kepuasan
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight mt-1">
                    Ketenangan Hati &amp; Pengalaman Nyata Jamaah
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    Ratusan keluarga, orang tua lanjut usia, hingga profesional telah mempercayakan perjalanan ibadah mereka kepada bimbingan Almubarak Wisata.
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

