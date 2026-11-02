<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
</script>

<template>
    <Head title="Tentang Kami - Almubarak Wisata Internasional" />

    <AppLayout>
        <!-- Hero Header -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.65) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/45 to-black/80"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        Profil Resmi Perusahaan
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Tentang Almubarak Wisata
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Mengenal lebih dekat penyelenggara ibadah Haji Khusus dan Umrah berizin resmi Kemenag RI dengan dedikasi pelayanan sepenuh hati.
                    </p>
                </div>
            </div>
        </section>

        <!-- Company Profile & CEO Greeting Section -->
        <section class="w-full py-space-xl">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: CEO / Leadership Card -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full max-w-md rounded-2xl overflow-hidden shadow-xl border border-surface-container bg-surface-container-lowest p-6 flex flex-col items-center text-center">
                            <div class="w-36 h-36 rounded-full overflow-hidden border-4 border-primary/20 shadow-md mb-5">
                                <img 
                                    src="/images/landing/testi-fachri.jpg" 
                                    alt="Ahmad Mubarak" 
                                    class="w-full h-full object-cover"
                                />
                            </div>
                            <span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-widest">
                                Direktur Utama / CEO
                            </span>
                            <h3 class="font-headline-sm text-2xl text-primary font-extrabold mt-1">
                                H. Ahmad Mubarak, Lc., M.A.
                            </h3>
                            <p class="font-body-sm text-sm text-on-surface-variant mt-2 leading-relaxed">
                                "Tujuan utama kami bukan sekadar mengantar jamaah ke Tanah Suci, melainkan membimbing setiap langkah ibadah agar sesuai dengan sunnah Rasulullah ﷺ demi menggapai mabrur."
                            </p>
                            <div class="mt-4 pt-4 border-t border-surface-container w-full flex items-center justify-around text-xs font-semibold text-outline">
                                <span>Alumni Universitas Islam Madinah</span>
                                <span>•</span>
                                <span>15+ Tahun Bimbingan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Company History & Values -->
                    <div class="lg:col-span-7 flex flex-col gap-6">
                        <div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                Jejak Langkah &amp; Legalitas
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                                Melayani Tamu Allah Sejak 2012
                            </h2>
                        </div>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            <strong class="text-on-surface">PT Almubarak Wisata Internasional</strong> didirikan dengan komitmen teguh untuk menghadirkan ketenangan dan kepastian bagi kaum muslimin Indonesia yang mendambakan perjalanan spiritual ke Baitullah.
                        </p>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            Terakreditasi <strong class="text-primary font-bold">A</strong> oleh Kementerian Agama Republik Indonesia dengan Izin PPIU No. U.412 dan PIHK Resmi, kami mengedepankan prinsip transparansi penuh, kepastian jadwal, akomodasi hotel bintang 5 ring utama pelataran masjid, serta tiket maskapai direct tanpa transit.
                        </p>

                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4 border-t border-surface-container">
                            <div class="bg-surface-container-lowest p-4 rounded-xl border border-surface-container/60 shadow-xs">
                                <span class="text-3xl font-extrabold text-primary">12.000+</span>
                                <p class="text-xs text-on-surface-variant font-medium mt-1">Jamaah Diberangkatkan</p>
                            </div>
                            <div class="bg-surface-container-lowest p-4 rounded-xl border border-surface-container/60 shadow-xs">
                                <span class="text-3xl font-extrabold text-secondary">99.8%</span>
                                <p class="text-xs text-on-surface-variant font-medium mt-1">Tingkat Kepuasan</p>
                            </div>
                            <div class="bg-surface-container-lowest p-4 rounded-xl border border-surface-container/60 shadow-xs">
                                <span class="text-3xl font-extrabold text-tertiary">Akreditasi A</span>
                                <p class="text-xs text-on-surface-variant font-medium mt-1">Kemenag RI Resmi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi Section -->
        <section id="visi-misi" class="w-full py-space-xl bg-surface-container-low/60 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        Arah &amp; Prinsip Kami
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Visi &amp; Misi Almubarak Wisata
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        Landasan fundamental dalam menyelenggarakan setiap paket perjalanan ibadah yang amanah, profesional, dan penuh keberkahan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi Card -->
                    <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-surface-container/70 flex flex-col gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[30px]">visibility</span>
                        </div>
                        <h3 class="font-headline-sm text-2xl text-primary font-bold">Visi Perusahaan</h3>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            Menjadi biro perjalanan ibadah umrah, haji khusus, dan wisata halal terdepan di Indonesia yang terpercaya, berintegritas tinggi, dan memberikan bimbingan ibadah komprehensif sesuai sunnah demi meraih kemabruran.
                        </p>
                    </div>

                    <!-- Misi Card -->
                    <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-surface-container/70 flex flex-col gap-4">
                        <div class="w-14 h-14 rounded-full bg-secondary/10 text-secondary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[30px]">rocket_launch</span>
                        </div>
                        <h3 class="font-headline-sm text-2xl text-secondary font-bold">Misi Perusahaan</h3>
                        <ul class="space-y-3 font-body-sm text-sm text-on-surface-variant">
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Menyediakan layanan perjalanan ibadah berkualitas prima dengan jaminan 5 Pasti Umrah Kemenag RI.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Membina pembimbing (muthawif) berkompetensi tinggi dan berilmu syar'i untuk mendampingi jamaah secara intensif.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Menjalin sinergi erat dengan maskapai penerbangan direct dan jaringan hotel ring 1 di Makkah dan Madinah.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Mengutamakan kepedulian terhadap kenyamanan jamaah lansia, keluarga, dan jamaah berkebutuhan khusus.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5 Pillars Section Component -->
        <FivePillars />

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
