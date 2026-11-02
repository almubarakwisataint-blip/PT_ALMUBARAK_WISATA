<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

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

const faqs = [
    {
        q: 'Bagaimana cara mendaftar paket umrah di Almubarak Wisata?',
        a: 'Pendaftaran dapat dilakukan secara online melalui website, via WhatsApp Customer Care, atau datang langsung ke kantor kami. Anda cukup menyiapkan fotokopi KTP, KK, dan paspor (jika sudah ada), serta membayar uang muka (DP) pendaftaran.',
    },
    {
        q: 'Apakah Almubarak Wisata memiliki izin resmi dari Kemenag RI?',
        a: 'Ya, PT Almubarak Wisata Internasional berizin resmi PPIU (Penyelenggara Perjalanan Ibadah Umrah) No. U.412 dan PIHK (Penyelenggara Ibadah Haji Khusus) berakreditasi A dari Kementerian Agama Republik Indonesia.',
    },
    {
        q: 'Apakah biaya paket sudah termasuk perlengkapan dan manasik?',
        a: 'Seluruh paket umrah kami sudah all-in termasuk bimbingan manasik, perlengkapan eksklusif (koper bagasi, tas kabin, kain ihram/mukena, batik seragam), asuransi perjalanan internasional, visa, dan handling bandara.',
    },
    {
        q: 'Bagaimana jika belum memiliki paspor atau vaksinasi meningitis?',
        a: 'Tim konsultan kami siap memberikan surat rekomendasi resmi dan panduan lengkap pengurusan paspor di kantor imigrasi terdekat serta rekomendasi klinik vaksinasi meningitis resmi.',
    },
];

const openFaq = ref(null);
const toggleFaq = (idx) => {
    openFaq.value = openFaq.value === idx ? null : idx;
};
</script>

<template>
    <Head title="Hubungi Kami - Almubarak Wisata Internasional" />

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
                        Layanan 24/7
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Hubungi Konsultan Kami
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Kami siap mendengarkan dan membantu merencanakan perjalanan ibadah Anda dan keluarga dengan sepenuh hati.
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
                                Informasi Kontak
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                                Mari Terhubung
                            </h2>
                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed">
                                Silakan hubungi kami melalui sambungan telepon, pesan WhatsApp, atau kunjungi kantor representatif kami.
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
                                    Customer Care 1 (Konsultasi Paket)
                                </h3>
                                <p class="text-sm text-primary font-semibold mt-0.5">+62 812-6000-3484</p>
                                <p class="text-xs text-outline mt-1">Layanan WhatsApp &amp; Telepon • Respons Cepat</p>
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
                                    Customer Care 2 (Dokumen &amp; Paspor)
                                </h3>
                                <p class="text-sm text-primary font-semibold mt-0.5">+62 811-8000-2807</p>
                                <p class="text-xs text-outline mt-1">Bantuan visa, tiket &amp; keberangkatan</p>
                            </div>
                        </a>

                        <!-- Email Card -->
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">mail</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-base text-on-surface font-bold">
                                    Email Resmi
                                </h3>
                                <a href="mailto:almubarak.wisata@gmail.com" class="text-sm text-primary font-semibold hover:underline mt-0.5 block">
                                    almubarak.wisata@gmail.com
                                </a>
                                <p class="text-xs text-outline mt-1">Untuk korespondensi resmi &amp; kerjasama corporate</p>
                            </div>
                        </div>

                        <!-- Office Address Card -->
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container/70 flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-base text-on-surface font-bold">
                                    Kantor Operasional Bogor
                                </h3>
                                <p class="text-sm text-on-surface-variant mt-1 leading-relaxed">
                                    Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153
                                </p>
                                <p class="text-xs text-outline mt-2">Buka Senin - Sabtu (08.30 - 17.30 WIB)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive Contact Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl shadow-xl border border-surface-container">
                            <div class="mb-6">
                                <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                    Kirim Pesan
                                </span>
                                <h3 class="font-headline-sm text-2xl text-primary font-extrabold mt-1">
                                    Konsultasi Online
                                </h3>
                                <p class="text-sm text-on-surface-variant mt-1">
                                    Isi formulir di bawah ini dan konsultan kami akan menghubungi Anda sesegera mungkin.
                                </p>
                            </div>

                            <!-- Success Banner -->
                            <div v-if="isSubmitted" class="mb-6 p-4 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center gap-3">
                                <span class="material-symbols-outlined text-[24px]">check_circle</span>
                                <span class="text-sm font-semibold">Alhamdulillah, pesan Anda telah terkirim! Tim konsultan kami akan segera menghubungi Anda.</span>
                            </div>

                            <form @submit.prevent="submitForm" class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            Nama Lengkap *
                                        </label>
                                        <input 
                                            v-model="form.name"
                                            required
                                            type="text" 
                                            placeholder="Contoh: H. Fulan bin Fulan"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.name" class="text-xs text-error mt-1 block">{{ form.errors.name }}</span>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            Nomor WhatsApp / HP *
                                        </label>
                                        <input 
                                            v-model="form.phone"
                                            required
                                            type="tel" 
                                            placeholder="Contoh: 081234567890"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.phone" class="text-xs text-error mt-1 block">{{ form.errors.phone }}</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            Alamat Email *
                                        </label>
                                        <input 
                                            v-model="form.email"
                                            required
                                            type="email" 
                                            placeholder="nama@email.com"
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface placeholder:text-outline text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        />
                                        <span v-if="form.errors.email" class="text-xs text-error mt-1 block">{{ form.errors.email }}</span>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                            Pilihan Paket / Topik *
                                        </label>
                                        <select 
                                            v-model="form.subject"
                                            required
                                            class="w-full px-4 py-3 rounded-xl border border-surface-container bg-surface-container-lowest text-on-surface text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        >
                                            <option value="" disabled selected>Pilih Program Ibadah</option>
                                            <option value="Umrah Reguler">Paket Umrah Reguler (9-12 Hari)</option>
                                            <option value="Umrah Ramadhan">Paket Umrah Ramadhan &amp; I'tikaf</option>
                                            <option value="Haji Furoda / Khusus">Haji Khusus &amp; Haji Furoda</option>
                                            <option value="Wisata Halal Mancanegara">Wisata Halal Internasional</option>
                                            <option value="Custom Group / Corporate">Group Corporate / Keluarga</option>
                                            <option value="Lainnya">Pertanyaan Lainnya</option>
                                        </select>
                                        <span v-if="form.errors.subject" class="text-xs text-error mt-1 block">{{ form.errors.subject }}</span>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-on-surface uppercase tracking-wider mb-1.5">
                                        Pesan atau Kebutuhan Khusus *
                                    </label>
                                    <textarea 
                                        v-model="form.message"
                                        required
                                        rows="4" 
                                        placeholder="Tuliskan jumlah jamaah, rencana bulan keberangkatan, atau pertanyaan Anda..."
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
                                    <span>{{ form.processing ? 'Mengirim Pesan...' : 'Kirim Pesan Konsultasi' }}</span>
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
                        Tanya Jawab
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Pertanyaan Sering Diajukan (FAQ)
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
    </AppLayout>
</template>

