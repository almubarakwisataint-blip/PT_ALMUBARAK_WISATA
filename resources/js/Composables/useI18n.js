import { ref } from 'vue';

const savedLang = typeof window !== 'undefined' ? (localStorage.getItem('app_lang') || 'ID') : 'ID';
const currentLang = ref(savedLang);

const translations = {
    ID: {
        // Navbar
        nav_home: 'Beranda',
        nav_about: 'Tentang Kami',
        nav_business: 'Bisnis Kami',
        nav_news: 'Berita',
        nav_contact: 'Hubungi Kami',
        nav_vision: 'Visi & Misi',
        nav_team: 'Tim Kami',
        nav_awards: 'Penghargaan',
        nav_login: 'Masuk',
        nav_subtitle: 'Haji & Umrah Premium',

        // Hero Section
        hero_badge: 'Penyelenggara Haji & Umrah Resmi Kemenag RI',
        hero_title_1: 'Wujudkan Perjalanan Ibadah yang',
        hero_title_2: 'Aman, Nyaman & Mabrur',
        hero_desc: 'Melayani jamaah dengan sepenuh hati, akomodasi hotel pelataran ring 1, bimbingan ibadah profesional sesuai sunnah, dan kepastian jadwal keberangkatan 100% amanah.',
        hero_btn_explore: 'Lihat Pilihan Paket',
        hero_btn_contact: 'Hubungi Kami',
        hero_stat_1_num: '50.000+',
        hero_stat_1_label: 'Jamaah Terlayani',
        hero_stat_2_num: 'Ring 1',
        hero_stat_2_label: 'Hotel Pelataran Masjid',
        hero_stat_3_num: 'Akreditasi A',
        hero_stat_3_label: 'Resmi Kemenag RI',

        // Five Pillars
        pillars_tag: 'STANDAR PELAYANAN UTAMA',
        pillars_title: '5 Pasti Umrah & Keunggulan Pelayanan',
        pillars_subtitle: 'Komitmen nyata perlindungan dan kenyamanan ibadah Anda dari pendaftaran hingga kepulangan.',
        pillar_1_title: 'Pasti Travel Berizin',
        pillar_1_desc: 'Terdaftar resmi di Kemenag RI dengan nomor izin PPIU aktif dan terakreditasi A.',
        pillar_2_title: 'Pasti Jadwal Penerbangan',
        pillar_2_desc: 'Tiket penerbangan direct landing Jeddah/Madinah dijamin dengan maskapai bintang lima.',
        pillar_3_title: 'Pasti Hotel Ring 1',
        pillar_3_desc: 'Akomodasi hotel pelataran ring 1 Makkah dan Madinah untuk kemudahan ibadah harian.',
        pillar_4_title: 'Pasti Visa Umrah & Haji',
        pillar_4_desc: 'Penerbitan visa resmi e-Hajj dan Tasreh Raudhah langsung dari muassasah terpercaya.',
        pillar_5_title: 'Pasti Bimbingan Syar\'i',
        pillar_5_desc: 'Didampingi pembimbing ibadah alumni Universitas Islam Madinah berpengalaman.',

        // Packages
        pkg_tag: 'PROGRAM PILIHAN',
        pkg_title: 'Pilihan Paket Perjalanan Religi',
        pkg_all: 'Semua Paket',
        pkg_btn: 'Detail & Reservasi',
        pkg_price_from: 'Mulai dari',

        // CTA Banner
        cta_badge: 'BANTUAN & INFORMASI HAJI & UMRAH RESMI',
        cta_title: 'Masih Bingung Menentukan Pilihan Paket?',
        cta_desc: 'Tim kami siap membantu menghitung estimasi biaya, pemilihan tipe kamar (Double/Triple/Quad), dan pengurusan paspor & vaksinasi secara komprehensif.',
        cta_btn_wa: 'Chat WhatsApp',

        // Promo & Consultation
        promo_title: 'Katalog Penawaran & Diskon Eksklusif',
        promo_badge: 'PROMO SPESIAL KEBERANGKATAN 1446 H',
        promo_claim: 'Klaim Promo',
        consult_title: 'Bingung Menentukan Pilihan Paket?',
        consult_btn: 'TANYA ALMA DULU',

        // Footer
        footer_brand_desc: 'Penyelenggara Perjalanan Ibadah Umrah (PPIU) No. U.412 dan Haji Khusus (PIHK) resmi terpercaya di bawah naungan Kementerian Agama Republik Indonesia.',
        footer_nav_title: 'Navigasi',
        footer_services_title: 'Produk',
        footer_contact_title: 'Kantor & Info Kontak',
        footer_follow_title: 'Follow kami di',
        footer_payment_title: 'Partner Pembayaran Resmi',
        footer_partner_btn: 'Jadi Partner Almubarak',
        footer_rights: 'Seluruh Hak Cipta Dilindungi.',
        footer_privacy: 'Privasi',
        footer_terms: 'Syarat & Ketentuan',
        footer_sitemap: 'Sitemap',
        footer_contact: 'Hubungi Kami',

        // About Page
        about_title: 'Melayani Tamu Allah dengan Amanah & Penuh Keberkahan',
        about_subtitle: 'Profil resmi PT Almubarak Wisata Internasional sebagai penyelenggara haji khusus & umrah berizin Kemenag RI.',
        about_vision_btn: 'Buka Halaman Visi & Misi',
        about_team_title: 'Dewan Direksi & Tim Pembimbing Ibadah',
        about_team_subtitle: 'Para asatidz dan profesional berpengalaman yang siap melayani dan membimbing ibadah Anda.',
        about_awards_title: 'Penghargaan & Akreditasi Resmi',

        // Vision Mission Page
        vision_title: 'Visi & Misi Almubarak',
        vision_subtitle: 'Arah dan prinsip utama PT Almubarak Wisata Internasional dalam menghadirkan pelayanan ibadah berkualitas tinggi.',
        vision_card_title: 'Visi Kami',
        mission_card_title: 'Misi Kami',

        // Business Page
        business_title: 'Unit Bisnis & Layanan Unggulan',
        business_subtitle: 'Solusi lengkap perjalanan ibadah umrah, haji khusus, wisata halal dunia, reservasi tiket pesawat, dan hotel ring 1.',

        // News Page
        news_title: 'Wawasan, Berita & Panduan Ibadah',
        news_subtitle: 'Informasi terkini seputar kebijakan haji & umrah, regulasi Saudi, dan panduan fiqih ibadah praktis.',

        // Contact Page
        contact_title: 'Hubungi Layanan Jamaah Almubarak',
        contact_subtitle: 'Tim customer care kami siap memberikan pendampingan dan konsultasi informasi 24 jam.',
        contact_form_name: 'Nama Lengkap',
        contact_form_email: 'Alamat Email',
        contact_form_phone: 'Nomor WhatsApp',
        contact_form_msg: 'Pesan / Pertanyaan Anda',
        contact_form_send: 'Kirim Pesan Sekarang'
    },
    EN: {
        // Navbar
        nav_home: 'Home',
        nav_about: 'About Us',
        nav_business: 'Our Services',
        nav_news: 'News & Articles',
        nav_contact: 'Contact Us',
        nav_vision: 'Vision & Mission',
        nav_team: 'Our Team',
        nav_awards: 'Awards',
        nav_login: 'Login',
        nav_subtitle: 'Premium Hajj & Umrah',

        // Hero Section
        hero_badge: 'Official Hajj & Umrah Operator Licensed by Ministry of Religious Affairs',
        hero_title_1: 'Fulfill Your Sacred Journey that is',
        hero_title_2: 'Safe, Comfortable & Mabrur',
        hero_desc: 'Serving pilgrims wholeheartedly with 5-star ring 1 courtyard hotels, sunnah-compliant spiritual guidance, and 100% verified departure schedules.',
        hero_btn_explore: 'Explore Packages',
        hero_btn_contact: 'Contact Us',
        hero_stat_1_num: '50,000+',
        hero_stat_1_label: 'Pilgrims Served',
        hero_stat_2_num: 'Ring 1',
        hero_stat_2_label: 'Courtyard Hotels',
        hero_stat_3_num: 'Grade A',
        hero_stat_3_label: 'Official Accreditation',

        // Five Pillars
        pillars_tag: 'CORE SERVICE STANDARDS',
        pillars_title: '5 Guaranteed Umrah & Service Excellence',
        pillars_subtitle: 'A genuine commitment to safeguard and enrich your pilgrimage from registration until return.',
        pillar_1_title: 'Guaranteed Official License',
        pillar_1_desc: 'Officially registered under the Ministry of Religious Affairs with an active Grade A accredited license.',
        pillar_2_title: 'Guaranteed Flight Schedules',
        pillar_2_desc: 'Direct confirmed flights to Jeddah/Madinah operated by premier 5-star international airlines.',
        pillar_3_title: 'Guaranteed Ring 1 Hotels',
        pillar_3_desc: 'First-ring courtyard hotels right in front of Masjidil Haram and Nabawi for prayer convenience.',
        pillar_4_title: 'Guaranteed e-Visa & Tasreh',
        pillar_4_desc: 'Official e-Hajj visas and Rawdah permits issued directly through certified Saudi muassasah.',
        pillar_5_title: 'Guaranteed Sharia Guidance',
        pillar_5_desc: 'Supervised by qualified scholars graduated from Islamic University of Madinah.',

        // Packages
        pkg_tag: 'FEATURED PACKAGES',
        pkg_title: 'Exclusive Religious Travel Packages',
        pkg_all: 'All Packages',
        pkg_btn: 'Details & Booking',
        pkg_price_from: 'Starts from',

        // CTA Banner
        cta_badge: 'OFFICIAL HAJJ & UMRAH GUIDANCE & SUPPORT',
        cta_title: 'Still Undecided on Your Package Choice?',
        cta_desc: 'Our customer support team is ready to calculate estimated costs, assist with room selections (Double/Triple/Quad), and guide your passports & vaccinations.',
        cta_btn_wa: 'Chat WhatsApp',

        // Promo & Consultation
        promo_title: 'Special Deals & Exclusive Seasonal Offers',
        promo_badge: 'SPECIAL 1446 H PILGRIMAGE PROMOTION',
        promo_claim: 'Claim Offer',
        consult_title: 'Need Help Choosing the Right Package?',
        consult_btn: 'ASK ALMA NOW',

        // Footer
        footer_brand_desc: 'Licensed Umrah (PPIU No. U.412) and Special Hajj Operator under the Ministry of Religious Affairs of the Republic of Indonesia.',
        footer_nav_title: 'Navigation',
        footer_services_title: 'Products',
        footer_contact_title: 'Office & Contact Info',
        footer_follow_title: 'Follow us on',
        footer_payment_title: 'Official Payment Partners',
        footer_partner_btn: 'Become Almubarak Partner',
        footer_rights: 'All Rights Reserved.',
        footer_privacy: 'Privacy',
        footer_terms: 'Terms & Conditions',
        footer_sitemap: 'Sitemap',
        footer_contact: 'Contact Us',

        // About Page
        about_title: 'Serving the Guests of Allah with Integrity & Blessing',
        about_subtitle: 'Official company profile of PT Almubarak Wisata Internasional as a premier licensed Hajj & Umrah provider.',
        about_vision_btn: 'View Vision & Mission Page',
        about_team_title: 'Board of Directors & Spiritual Guidance Team',
        about_team_subtitle: 'Experienced scholars and travel professionals dedicated to escorting your pilgrimage.',
        about_awards_title: 'Official Awards & Accreditations',

        // Vision Mission Page
        vision_title: 'Vision & Mission of Almubarak',
        vision_subtitle: 'Core principles guiding PT Almubarak Wisata Internasional in delivering superior spiritual journey experiences.',
        vision_card_title: 'Our Vision',
        mission_card_title: 'Our Mission',

        // Business Page
        business_title: 'Business Units & Premier Services',
        business_subtitle: 'Complete pilgrimage solutions including Umrah packages, Special VIP Hajj, Halal tourism, flight bookings, and ring 1 accommodations.',

        // News Page
        news_title: 'Pilgrimage Insights, News & Guidance',
        news_subtitle: 'Latest updates on Saudi travel regulations, Hajj & Umrah policies, and practical ritual guides.',

        // Contact Page
        contact_title: 'Contact Almubarak Customer Care',
        contact_subtitle: 'Our dedicated customer service team is ready to provide guidance and assistance 24/7.',
        contact_form_name: 'Full Name',
        contact_form_email: 'Email Address',
        contact_form_phone: 'WhatsApp Number',
        contact_form_msg: 'Your Message / Inquiry',
        contact_form_send: 'Send Message Now'
    }
};

export function useI18n() {
    const setLocale = (lang) => {
        if (translations[lang]) {
            currentLang.value = lang;
            if (typeof window !== 'undefined') {
                localStorage.setItem('app_lang', lang);
            }
        }
    };

    const t = (key) => {
        return translations[currentLang.value]?.[key] || translations['ID'][key] || key;
    };

    return {
        locale: currentLang,
        setLocale,
        t
    };
}
