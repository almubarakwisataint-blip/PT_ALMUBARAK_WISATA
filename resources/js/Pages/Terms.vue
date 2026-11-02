<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();
</script>

<template>
    <Head :title="(locale === 'ID' ? 'Syarat & Ketentuan' : 'Terms & Conditions') + ' - Almubarak Wisata'" />

    <AppLayout>
        <section class="w-full max-w-4xl mx-auto px-gutter pt-12 pb-20">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-outline mb-6">
                <Link href="/" class="hover:text-primary transition-colors">{{ t('nav_home') }}</Link>
                <span>/</span>
                <span class="text-on-surface font-medium">{{ locale === 'ID' ? 'Syarat & Ketentuan' : 'Terms & Conditions' }}</span>
            </nav>

            <h1 class="font-headline-xl text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mb-6">
                {{ locale === 'ID' ? 'Syarat & Ketentuan Pendaftaran' : 'Registration Terms & Conditions' }}
            </h1>

            <div class="prose max-w-none text-sm sm:text-base text-on-surface-variant leading-relaxed space-y-6 bg-surface-container-lowest p-8 sm:p-10 rounded-3xl border border-surface-container shadow-sm">
                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '1. Ketentuan Pendaftaran & Pembayaran DP' : '1. Registration & Down Payment (DP)' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Pendaftaran paket ibadah umrah dan haji khusus dinyatakan sah setelah calon jamaah mengisi formulir pendaftaran resmi dan menyetorkan uang muka (DP) melalui rekening Virtual Account resmi atas nama PT Almubarak Wisata Barakah.'
                            : 'Pilgrimage registration is officially confirmed once prospective pilgrims submit the registration form and settle the designated down payment through official Virtual Accounts under PT Almubarak Wisata Barakah.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '2. Persyaratan Dokumen Ibadah' : '2. Mandatory Travel Documentation' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Calon jamaah wajib menyerahkan paspor asli yang masih berlaku minimal 7 bulan sebelum tanggal keberangkatan, fotokopi KTP, KK, buku nikah (bagi suami-istri), dan sertifikat vaksinasi meningitis internasional selambat-lambatnya 30 hari sebelum jadwal terbang.'
                            : 'Pilgrims must submit valid passports (minimum 7 months validity), national ID, family register, marriage books (for couples), and international meningitis vaccination certificates at least 30 days before departure.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '3. Ketentuan Pelunasan & Pembatalan' : '3. Final Settlement & Cancellation Policy' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Pelunasan biaya perjalanan wajib diselesaikan paling lambat 21 hari kalender sebelum tanggal keberangkatan. Pembatalan sepihak oleh jamaah tunduk pada ketentuan pemotongan biaya tiket non-refundable maskapai dan booking hotel sesuai regulasi asosiasi PPIU Kemenag RI.'
                            : 'Final payment must be cleared no later than 21 calendar days prior to scheduled departure. Cancellations are subject to non-refundable airline ticket and hotel reservation policy in compliance with Ministry of Religious Affairs regulations.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '4. Hak Jamaah & Fasilitas Pelayanan' : '4. Pilgrim Rights & Included Facilities' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Setiap jamaah berhak mendapatkan bimbingan manasik intensif, muthawif resmi, akomodasi hotel sesuai kelas bintang pada paket yang dipilih, makan 3x sehari buffet nusantara, tiket pesawat kelas ekonomi pp, dan perlengkapan ibadah komprehensif.'
                            : 'Every pilgrim is entitled to comprehensive manasik guidance, certified scholars/muthawif, courtyard hotel accommodations, 3x daily Indonesian buffet meals, round-trip international flights, and complete travel gear.'
                        }}
                    </p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
