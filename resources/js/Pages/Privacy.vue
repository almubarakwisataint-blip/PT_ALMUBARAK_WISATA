<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();
</script>

<template>
    <Head :title="(locale === 'ID' ? 'Kebijakan Privasi' : 'Privacy Policy') + ' - Almubarak Wisata'" />

    <AppLayout>
        <section class="w-full max-w-4xl mx-auto px-gutter pt-12 pb-20">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-outline mb-6">
                <Link href="/" class="hover:text-primary transition-colors">{{ t('nav_home') }}</Link>
                <span>/</span>
                <span class="text-on-surface font-medium">{{ locale === 'ID' ? 'Privasi' : 'Privacy' }}</span>
            </nav>

            <h1 class="font-headline-xl text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mb-6">
                {{ locale === 'ID' ? 'Kebijakan Privasi Perlindungan Jamaah' : 'Pilgrim Privacy & Data Protection Policy' }}
            </h1>

            <div class="prose max-w-none text-sm sm:text-base text-on-surface-variant leading-relaxed space-y-6 bg-surface-container-lowest p-8 sm:p-10 rounded-3xl border border-surface-container shadow-sm">
                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '1. Komitmen Perlindungan Data' : '1. Data Protection Commitment' }}
                    </h2>
                    <p>
                        {{ locale === 'ID' 
                            ? 'PT Almubarak Wisata Internasional berkomitmen penuh untuk melindungi privasi dan kerahasiaan data pribadi calon jamaah dan keluarga sesuai dengan Undang-Undang Perlindungan Data Pribadi (UU PDP) yang berlaku di Republik Indonesia.'
                            : 'PT Almubarak Wisata Internasional is fully committed to safeguarding the privacy and confidentiality of prospective pilgrims and families in full compliance with the Indonesian Personal Data Protection regulations.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '2. Informasi yang Kami Kumpulkan' : '2. Information We Collect' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Informasi yang kami kumpulkan mencakup nama lengkap, nomor NIK/KTP, nomor paspor, alamat domisili, nomor telepon/WhatsApp, alamat email, serta rekam medis dasar yang diperlukan demi kelancaran penerbitan visa, tiket pesawat, dan keselamatan selama beribadah di Tanah Suci.'
                            : 'The information we collect includes full names, national ID (NIK), passport numbers, residential addresses, phone/WhatsApp contacts, email addresses, and basic health records essential for visa issuance, flight ticketing, and pilgrim welfare in the Holy Land.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '3. Penggunaan dan Keamanan Informasi' : '3. Information Use & Security' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Data pribadi jamaah hanya digunakan secara eksklusif untuk proses pendaftaran ke Kementerian Agama RI (Siskopatuh/Kemenag), maskapai penerbangan, Muassasah Arab Saudi, dan reservasi hotel. Kami menjamin data Anda tidak akan pernah dijual atau dialihkan kepada pihak ketiga untuk kepentingan komersial.'
                            : 'Pilgrim personal data is utilized exclusively for official registration with the Ministry of Religious Affairs (Siskopatuh), airlines, Saudi Muassasah, and hotel reservations. We strictly ensure your data is never sold or transferred to unauthorized commercial parties.'
                        }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-on-surface mb-2">
                        {{ locale === 'ID' ? '4. Hak Akses dan Pembaruan Data' : '4. Access Rights & Data Updates' }}
                    </h2>
                    <p>
                        {{ locale === 'ID'
                            ? 'Jamaah berhak meninjau, memperbarui, atau meminta penghapusan data kontak setelah kepulangan dari ibadah dengan menghubungi tim customer support resmi kami.'
                            : 'Pilgrims reserve the right to review, update, or request removal of contact data post-journey by directly contacting our official customer care desk.'
                        }}
                    </p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
