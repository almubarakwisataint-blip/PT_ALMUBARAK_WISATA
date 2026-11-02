<script setup>
import { ref, computed } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const form = useForm({
    name: '',
    email: '',
    phone: '',
    subject: '',
    message: '',
});

const isSubmitted = ref(false);

const submitForm = () => {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            isSubmitted.value = true;
            form.reset();
            setTimeout(() => {
                isSubmitted.value = false;
            }, 6000);
        },
    });
};

const rawFaqs = [
    {
        qId: 'Bagaimana cara mendaftar paket umrah di Almubarak Wisata?',
        qEn: 'How do I register for an Umrah package at Almubarak Wisata?',
        aId: 'Pendaftaran dapat dilakukan secara online melalui website, via WhatsApp Customer Care, atau datang langsung ke kantor kami. Anda cukup menyiapkan fotokopi KTP, KK, dan paspor (jika sudah ada), serta membayar uang muka (DP) pendaftaran.',
        aEn: 'Registration can be done online through our website, WhatsApp Customer Care, or by visiting our branch offices. You only need a copy of your National ID (KTP/Passport), Family Card, and a registration deposit (DP).',
    },
    {
        qId: 'Apakah Almubarak Wisata memiliki izin resmi dari Kemenag RI?',
        qEn: 'Does Almubarak Wisata hold official licenses from the Ministry of Religious Affairs?',
        aId: 'Ya, PT Almubarak Wisata Internasional berizin resmi PPIU (Penyelenggara Perjalanan Ibadah Umrah) No. U.412 dan PIHK (Penyelenggara Ibadah Haji Khusus) berakreditasi A dari Kementerian Agama Republik Indonesia.',
        aEn: 'Yes, PT Almubarak Wisata Internasional holds official PPIU (Umrah Organizer) License No. U.412 and PIHK (Special Hajj Organizer) with Grade A Accreditation from the Ministry of Religious Affairs of Indonesia.',
    },
    {
        qId: 'Apakah biaya paket sudah termasuk perlengkapan dan manasik?',
        qEn: 'Are travel gear and ritual training (manasik) included in the package cost?',
        aId: 'Seluruh paket umrah kami sudah all-in termasuk bimbingan manasik, perlengkapan eksklusif (koper bagasi, tas kabin, kain ihram/mukena, batik seragam), asuransi perjalanan internasional, visa, dan handling bandara.',
        aEn: 'All of our Umrah packages are fully inclusive: ritual workshops (manasik), exclusive luggage sets, Ihram/prayer garments, batik uniforms, international travel insurance, Saudi visas, and VIP airport handling.',
    },
    {
        qId: 'Bagaimana jika belum memiliki paspor atau vaksinasi meningitis?',
        qEn: 'What if I do not have a passport or meningitis vaccination yet?',
        aId: 'Tim layanan kami siap memberikan surat rekomendasi resmi dan panduan lengkap pengurusan paspor di kantor imigrasi terdekat serta rekomendasi klinik vaksinasi meningitis resmi.',
        aEn: 'Our support team issues official recommendation letters and step-by-step guidance for immigration passport applications, along with certified meningitis vaccination clinics.',
    },
];

const faqs = computed(() => {
    const isEn = locale.value === 'EN';
    return rawFaqs.map(f => ({
        q: isEn ? f.qEn : f.qId,
        a: isEn ? f.aEn : f.aId,
    }));
});

const openFaq = ref(null);
const toggleFaq = (idx) => {
    openFaq.value = openFaq.value === idx ? null : idx;
};
</script>

<template>
    <Head :title="locale === 'ID' ? 'Hubungi Kami - Almubarak Wisata Internasional' : 'Contact Us - Almubarak Wisata Internasional'" />

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
                        <span class="material-symbols-outlined text-[16px]">support_agent</span>
                        {{ locale === 'ID' ? 'Layanan 24/7' : '24/7 Support' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ locale === 'ID' ? 'Hubungi Tim Layanan Kami' : 'Contact Our Service Team' }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Kami siap mendengarkan dan membantu merencanakan perjalanan ibadah Anda dan keluarga dengan sepenuh hati.' : 'We are dedicated to helping you and your family plan a peaceful, blessed pilgrimage to the Holy Land.' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Main Contact & Form Section -->
        <section class="w-full py-space-xl">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Left: Contact Details Cards -->
                    <div class="lg:col-span-5 flex flex-col gap-6">
                        <div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                {{ locale === 'ID' ? 'Informasi Kontak' : 'Contact Information' }}
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                                {{ locale === 'ID' ? 'Mari Terhubung' : 'Get in Touch' }}
                            </h2>
                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed">
                                {{ locale === 'ID' ? 'Silakan hubungi kami melalui sambungan telepon, pesan WhatsApp, atau kunjungi kantor representatif kami.' : 'Reach out to our customer care via WhatsApp, direct phone call, or visit our representative office.' }}
                            </p>
                        </div>

                        <!-- Card WhatsApp CS 1 -->
                        <a 
                            href="https://wa.me/6281260003484" 
                            target="_blank"
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4 hover:border-primary hover:shadow-md transition-all group"
                        >
                            <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-[24px]">call</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-headline-sm text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    {{ locale === 'ID' ? 'Customer Care 1 (Informasi Paket)' : 'Customer Care 1 (Package Info)' }}
                                </h3>
                                <p class="text-sm text-primary font-semibold mt-0.5">+62 812-6000-3484</p>
                                <p class="text-xs text-outline mt-1">{{ locale === 'ID' ? 'Layanan WhatsApp & Telepon • Respons Cepat' : 'WhatsApp & Phone Service • Quick Response' }}</p>
                            </div>
                        </a>

                        <!-- Card WhatsApp CS 2 -->
                        <a 
                            href="https://wa.me/6281180002807" 
                            target="_blank"
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4 hover:border-primary hover:shadow-md transition-all group"
                        >
                            <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-[24px]">support_agent</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-headline-sm text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    {{ locale === 'ID' ? 'Customer Care 2 (Dokumen & Paspor)' : 'Customer Care 2 (Documents & Passports)' }}
                                </h3>
                                <p class="text-sm text-primary font-semibold mt-0.5">+62 811-8000-2807</p>
                                <p class="text-xs text-outline mt-1">{{ locale === 'ID' ? 'Bantuan visa, tiket & keberangkatan' : 'Visa assistance, tickets & departure schedules' }}</p>
                            </div>
                        </a>

                        <!-- Email Card -->
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">mail</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-base text-on-surface font-bold">
                                    {{ locale === 'ID' ? 'Email Resmi' : 'Official Email' }}
                                </h3>
                                <a href="mailto:almubarak.wisata@gmail.com" class="text-sm text-primary font-semibold hover:underline mt-0.5 block">
                                    almubarak.wisata@gmail.com
                                </a>
                                <p class="text-xs text-outline mt-1">{{ locale === 'ID' ? 'Untuk korespondensi resmi & kerjasama corporate' : 'For corporate inquiries & official correspondence' }}</p>
                            </div>
                        </div>

                        <!-- Office Address Card -->
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-base text-on-surface font-bold">
                                    {{ locale === 'ID' ? 'Kantor Operasional Bogor' : 'Bogor Operational Office' }}
                                </h3>
                                <p class="text-sm text-on-surface-variant mt-1 leading-relaxed">
                                    Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153
                                </p>
                                <p class="text-xs text-outline mt-2">{{ locale === 'ID' ? 'Buka Senin - Sabtu (08.30 - 17.30 WIB)' : 'Open Monday - Saturday (08:30 - 17:30 WIB)' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive Contact Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl shadow-xl border border-surface-container">
                            <div class="mb-6">
                                <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                    {{ locale === 'ID' ? 'Kirim Pesan' : 'Send Message' }}
                                </span>
                                <h3 class="font-headline-sm text-2xl text-primary font-extrabold mt-1">
                                    {{ locale === 'ID' ? 'Bantuan & Pertanyaan Online' : 'Online Assistance & Inquiries' }}
                                </h3>
                                <p class="text-sm text-on-surface-variant mt-1">
                                    {{ locale === 'ID' ? 'Isi formulir di bawah ini dan tim layanan kami akan menghubungi Anda sesegera mungkin.' : 'Fill in the form below and our care team will contact you promptly.' }}
                                </p>
                            </div>

                            <!-- Success Banner -->
                            <div v-if="isSubmitted" class="mb-6 p-4 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center gap-3">
                                <span class="material-symbols-outlined text-[24px]">check_circle</span>
                                <span class="text-sm font-semibold">
                                    {{ locale === 'ID' ? 'Alhamdulillah, pesan Anda telah terkirim! Tim layanan kami akan segera menghubungi Anda.' : 'Alhamdulillah, your message has been sent successfully! Our care team will contact you shortly.' }}
                                </span>
                            </div>

                            <form @submit.prevent="submitForm" class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            {{ locale === 'ID' ? 'Nama Lengkap *' : 'Full Name *' }}
                                        </label>
                                        <input 
                                            v-model="form.name"
                                            required
                                            type="text" 
                                            :placeholder="locale === 'ID' ? 'Contoh: H. Fulan bin Fulan' : 'e.g. John Doe'"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.name" class="text-xs text-error mt-1 block">{{ form.errors.name }}</span>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            {{ locale === 'ID' ? 'Nomor WhatsApp / HP *' : 'WhatsApp / Mobile Number *' }}
                                        </label>
                                        <input 
                                            v-model="form.phone"
                                            required
                                            type="tel" 
                                            :placeholder="locale === 'ID' ? 'Contoh: 081234567890' : 'e.g. +62 812 3456 7890'"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.phone" class="text-xs text-error mt-1 block">{{ form.errors.phone }}</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            {{ locale === 'ID' ? 'Alamat Email *' : 'Email Address *' }}
                                        </label>
                                        <input 
                                            v-model="form.email"
                                            required
                                            type="email" 
                                            placeholder="name@example.com"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.email" class="text-xs text-error mt-1 block">{{ form.errors.email }}</span>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            {{ locale === 'ID' ? 'Pilihan Paket / Topik *' : 'Package / Inquiry Topic *' }}
                                        </label>
                                        <select 
                                            v-model="form.subject"
                                            required
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        >
                                            <option value="" disabled selected>{{ locale === 'ID' ? 'Pilih Program Ibadah' : 'Select Pilgrimage Program' }}</option>
                                            <option value="Umrah Reguler">{{ locale === 'ID' ? 'Paket Umrah Reguler (9-12 Hari)' : 'Regular Umrah (9-12 Days)' }}</option>
                                            <option value="Umrah Ramadhan">{{ locale === 'ID' ? 'Paket Umrah Ramadhan & I\'tikaf' : 'Ramadan & I\'tikaf Umrah' }}</option>
                                            <option value="Haji Furoda / Khusus">{{ locale === 'ID' ? 'Haji Khusus & Haji Furoda' : 'VIP Special & Furoda Hajj' }}</option>
                                            <option value="Wisata Halal Mancanegara">{{ locale === 'ID' ? 'Wisata Halal Internasional' : 'International Halal Tourism' }}</option>
                                            <option value="Custom Group / Corporate">{{ locale === 'ID' ? 'Group Corporate / Keluarga' : 'Corporate / Family Custom Group' }}</option>
                                            <option value="Lainnya">{{ locale === 'ID' ? 'Pertanyaan Lainnya' : 'Other Inquiries' }}</option>
                                        </select>
                                        <span v-if="form.errors.subject" class="text-xs text-error mt-1 block">{{ form.errors.subject }}</span>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                        {{ locale === 'ID' ? 'Pesan atau Kebutuhan Khusus *' : 'Message or Special Requests *' }}
                                    </label>
                                    <textarea 
                                        v-model="form.message"
                                        required
                                        rows="4" 
                                        :placeholder="locale === 'ID' ? 'Tuliskan jumlah jamaah, rencana bulan keberangkatan, atau pertanyaan Anda...' : 'Specify pilgrim count, preferred departure month, or detailed requests...'"
                                        class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                                    ></textarea>
                                    <span v-if="form.errors.message" class="text-xs text-error mt-1 block">{{ form.errors.message }}</span>
                                </div>

                                <button 
                                    :disabled="form.processing"
                                    type="submit"
                                    class="w-full py-3.5 px-6 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-base transition-all shadow-md hover:shadow-lg flex items-center justify-center gap-2 cursor-pointer disabled:opacity-50"
                                >
                                    <span class="material-symbols-outlined text-[20px]">send</span>
                                    <span>{{ form.processing ? (locale === 'ID' ? 'Mengirim Pesan...' : 'Sending Message...') : (locale === 'ID' ? 'Kirim Pesan' : 'Send Message Now') }}</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="w-full py-space-xl bg-surface-container-low/60">
            <div class="max-w-4xl mx-auto px-gutter">
                <div class="text-center mb-10">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        {{ locale === 'ID' ? 'Tanya Jawab' : 'Q & A' }}
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Pertanyaan Sering Diajukan (FAQ)' : 'Frequently Asked Questions (FAQ)' }}
                    </h2>
                </div>

                <div class="space-y-4">
                    <div 
                        v-for="(faq, idx) in faqs" 
                        :key="idx"
                        class="bg-surface-container-lowest rounded-2xl border border-surface-container/70 shadow-xs overflow-hidden transition-all"
                    >
                        <button 
                            @click="toggleFaq(idx)"
                            class="w-full p-5 text-left flex items-center justify-between gap-4 font-bold text-on-surface hover:text-primary transition-colors cursor-pointer"
                            type="button"
                        >
                            <span class="text-base">{{ faq.q }}</span>
                            <span class="material-symbols-outlined text-[22px] transition-transform duration-300" :class="openFaq === idx ? 'rotate-180 text-primary' : 'text-outline'">
                                keyboard_arrow_down
                            </span>
                        </button>
                        <div v-show="openFaq === idx" class="px-5 pb-5 pt-1 text-sm text-on-surface-variant leading-relaxed border-t border-surface-container/50">
                            {{ faq.a }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <CtaBanner />
    </AppLayout>
</template>

