import { ref, computed } from 'vue';

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
        cta_title: 'Masih Bingung Menentukan Jadwal & Pilihan Paket?',
        cta_desc: 'Tim layanan kami siap membantu menghitung estimasi biaya, pemilihan tipe kamar (Double/Triple/Quad), dan pengurusan paspor & vaksinasi secara komprehensif.',
        cta_btn_wa: 'Chat WhatsApp',

        // Footer
        footer_brand_desc: 'Penyelenggara Perjalanan Ibadah Umrah (PPIU) dan Haji Khusus resmi terdaftar di Kementerian Agama Republik Indonesia.',
        footer_nav_title: 'Navigasi',
        footer_contact_title: 'Info Kontak',
        footer_address: 'Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153',
        footer_rights: 'Hak Cipta Dilindungi Undang-Undang.',
        footer_developer: 'Dikembangkan oleh ADDTeam.'
    },
    EN: {
        // Navbar
        nav_home: 'Home',
        nav_about: 'About Us',
        nav_business: 'Our Services',
        nav_news: 'News',
        nav_contact: 'Contact Us',
        nav_vision: 'Vision & Mission',
        nav_team: 'Our Team',
        nav_awards: 'Awards',
        nav_login: 'Login',
        nav_subtitle: 'Premium Hajj & Umrah',

        // Hero Section
        hero_badge: 'Official Hajj & Umrah Licensed Operator',
        hero_title_1: 'Fulfill Your Sacred Journey that is',
        hero_title_2: 'Safe, Comfortable & Mabrur',
        hero_desc: 'Serving pilgrims wholeheartedly with 5-star ring 1 courtyard hotels, professional sunnah-compliant spiritual guidance, and 100% verified departure schedules.',
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
        pillars_title: '5 Guaranteed Umrah & Premium Quality',
        pillars_subtitle: 'A genuine commitment to safeguard and enrich your pilgrimage from booking until return.',
        pillar_1_title: 'Guaranteed Official License',
        pillar_1_desc: 'Officially registered and Grade A accredited under the Ministry of Religious Affairs.',
        pillar_2_title: 'Guaranteed Direct Flights',
        pillar_2_desc: 'Confirmed direct round-trip flights to Jeddah/Madinah via premier 5-star airlines.',
        pillar_3_title: 'Guaranteed Ring 1 Hotels',
        pillar_3_desc: 'First-ring hotels right on the courtyards of Masjidil Haram and Nabawi.',
        pillar_4_title: 'Guaranteed e-Visa & Tasreh',
        pillar_4_desc: 'Official e-Hajj visas and Rawdah permits issued directly by certified Saudi providers.',
        pillar_5_title: 'Guaranteed Sharia Guidance',
        pillar_5_desc: 'Accompanied by scholars graduated from Islamic University of Madinah.',

        // Packages
        pkg_tag: 'FEATURED PACKAGES',
        pkg_title: 'Exclusive Religious Travel Packages',
        pkg_all: 'All Packages',
        pkg_btn: 'Details & Booking',
        pkg_price_from: 'Starts from',

        // CTA Banner
        cta_badge: 'OFFICIAL HAJJ & UMRAH HELP & GUIDANCE',
        cta_title: 'Still Deciding on Your Schedule & Package?',
        cta_desc: 'Our customer support team is ready to calculate estimated costs, room type selections (Double/Triple/Quad), and provide full assistance for passports & vaccinations.',
        cta_btn_wa: 'Chat WhatsApp',

        // Footer
        footer_brand_desc: 'Licensed Umrah (PPIU) and Special Hajj Operator registered with the Ministry of Religious Affairs of the Republic of Indonesia.',
        footer_nav_title: 'Navigation',
        footer_contact_title: 'Contact Information',
        footer_address: 'Jl. Ciremei Ujung No.210, Bantarjati, North Bogor, Bogor City, West Java 16153',
        footer_rights: 'All Rights Reserved.',
        footer_developer: 'Developed by ADDTeam.'
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
