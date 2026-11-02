<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
</script>

<template>
    <Head title="Syarat &amp; Ketentuan - Almubarak Wisata Internasional" />

    <AppLayout>
        <section class="w-full max-w-4xl mx-auto px-gutter pt-12 pb-20">
            <nav class="flex items-center gap-2 text-xs text-outline mb-6">
                <Link href="/" class="hover:text-primary transition-colors">Beranda</Link>
                <span>/</span>
                <span class="text-on-surface font-medium">Syarat &amp; Ketentuan</span>
            </nav>

            <h1 class="font-headline-xl text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mb-6">
                Syarat &amp; Ketentuan Pendaftaran
            </h1>

            <div class="prose max-w-none text-sm sm:text-base text-on-surface-variant leading-relaxed space-y-6 bg-surface-container-lowest p-8 sm:p-10 rounded-3xl border border-surface-container shadow-sm">
                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">1. Ketentuan Pendaftaran &amp; Pembayaran DP</h2>
                    <p>Pendaftaran paket ibadah umrah dan haji khusus dinyatakan sah setelah calon jamaah mengisi formulir pendaftaran resmi dan menyetorkan uang muka (DP) melalui rekening Virtual Account resmi atas nama <strong>PT Almubarak Wisata Barakah</strong>.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">2. Persyaratan Dokumen Ibadah</h2>
                    <p>Calon jamaah wajib menyerahkan paspor asli yang masih berlaku minimal 7 bulan sebelum tanggal keberangkatan, fotokopi KTP, KK, buku nikah (bagi suami-istri), dan sertifikat vaksinasi meningitis internasional selambat-lambatnya 30 hari sebelum jadwal terbang.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">3. Ketentuan Pelunasan &amp; Pembatalan</h2>
                    <p>Pelunasan biaya perjalanan wajib diselesaikan paling lambat 21 hari kalender sebelum tanggal keberangkatan. Pembatalan sepihak oleh jamaah tunduk pada ketentuan pemotongan biaya tiket non-refundable maskapai dan booking hotel sesuai regulasi asosiasi PPIU Kemenag RI.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">4. Hak Jamaah &amp; Fasilitas Pelayanan</h2>
                    <p>Setiap jamaah berhak mendapatkan bimbingan manasik intensif, muthawif resmi, akomodasi hotel sesuai kelas bintang pada paket yang dipilih, makan 3x sehari buffet nusantara, tiket pesawat kelas ekonomi pp, dan perlengkapan ibadah komprehensif.</p>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <CtaBanner />
    </AppLayout>
</template>

