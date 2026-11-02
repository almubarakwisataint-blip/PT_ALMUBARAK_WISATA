<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <Head title="Kebijakan Privasi - Almubarak Wisata Internasional" />

    <AppLayout>
        <section class="w-full max-w-4xl mx-auto px-gutter pt-12 pb-20">
            <nav class="flex items-center gap-2 text-xs text-outline mb-6">
                <Link href="/" class="hover:text-primary transition-colors">Beranda</Link>
                <span>/</span>
                <span class="text-on-surface font-medium">Kebijakan Privasi</span>
            </nav>

            <h1 class="font-headline-xl text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mb-6">
                Kebijakan Privasi Perlindungan Jamaah
            </h1>

            <div class="prose max-w-none text-sm sm:text-base text-on-surface-variant leading-relaxed space-y-6 bg-surface-container-lowest p-8 sm:p-10 rounded-3xl border border-surface-container shadow-sm">
                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">1. Komitmen Perlindungan Data</h2>
                    <p>PT Almubarak Wisata Internasional berkomitmen penuh untuk melindungi privasi dan kerahasiaan data pribadi calon jamaah dan keluarga sesuai dengan Undang-Undang Perlindungan Data Pribadi (UU PDP) yang berlaku di Republik Indonesia.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">2. Informasi yang Kami Kumpulkan</h2>
                    <p>Informasi yang kami kumpulkan mencakup nama lengkap, nomor NIK/KTP, nomor paspor, alamat domisili, nomor telepon/WhatsApp, alamat email, serta rekam medis dasar yang diperlukan demi kelancaran penerbitan visa, tiket pesawat, dan keselamatan selama beribadah di Tanah Suci.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">3. Penggunaan dan Keamanan Informasi</h2>
                    <p>Data pribadi jamaah hanya digunakan secara eksklusif untuk proses pendaftaran ke Kementerian Agama RI (Siskopatuh/Kemenag), maskapai penerbangan, Muassasah Arab Saudi, dan reservasi hotel. Kami menjamin data Anda tidak akan pernah dijual atau dialihkan kepada pihak ketiga untuk kepentingan komersial.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">4. Hak Akses dan Pembaruan Data</h2>
                    <p>Jamaah berhak meninjau, memperbarui, atau meminta penghapusan data kontak setelah kepulangan dari ibadah dengan menghubungi tim customer support resmi kami.</p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
