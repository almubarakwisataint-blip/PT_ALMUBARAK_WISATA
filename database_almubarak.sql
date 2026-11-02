-- PT ALMUBARAK WISATA Database Dump
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `businesses`;
CREATE TABLE `businesses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Umroh',
  `price` decimal(10,2) DEFAULT NULL,
  `available_from` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pelajari Lebih Lanjut',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `businesses` (`id`, `title`, `description`, `image`, `type`, `price`, `available_from`, `created_at`, `updated_at`, `button_text`) VALUES
(1, 'Paket Umrah Reguler Berkah 9 Hari', 'Paket umrah 9 hari dengan akomodasi hotel bintang 5 Pullman Zamzam Makkah (50m ke pelataran) dan Al Aqeeq Madinah. Penerbangan Saudia Airlines direct tanpa transit.', '/images/landing/package-reguler-9hari.jpg', 'Umroh', 28500000.00, '2025-11-14', NOW(), NOW(), 'Booking Seat'),
(2, 'Paket Umrah Ramadhan Itikaf 16 Hari', 'Menikmati 10 malam terakhir Ramadhan dan keagungan Lailatul Qadar di Masjidil Haram. Hotel Swissotel Al Maqam Makkah tepat di depan pelataran Kakbah.', '/images/landing/package-ramadhan-16hari.jpg', 'Umroh', 42900000.00, '2025-03-22', NOW(), NOW(), 'Booking Seat'),
(3, 'Haji Khusus Furoda Direct Visa Resmi', 'Ibadah haji tanpa antre dengan Visa Mujamalah Resmi terdaftar e-Hajj Kementerian Haji Kerajaan Arab Saudi. Fasilitas Maktab VIP Mina AC Eksekutif dan Hotel Bintang 5.', '/images/landing/package-haji-furoda.jpg', 'Haji', 275000000.00, '2025-05-25', NOW(), NOW(), 'Konsultasi Haji'),
(4, 'Wisata Halal Turki & Umrah Plus 12 Hari', 'Kombinasi spiritual dan sejarah peradaban Islam. Menjelajahi keindahan Blue Mosque, Hagia Sophia, dan Bosphorus Cruise di Istanbul lalu beribadah di Makkah & Madinah.', '/images/landing/package-turki-plus.jpg', 'Wisata Halal', 36800000.00, '2025-12-28', NOW(), NOW(), 'Booking Seat'),
(5, 'Paket Umrah Plus Aqsa & Jordan 12 Hari', 'Ziarah ke Masjidil Aqsa Yerusalem dan keajaiban kota kuno Petra Jordan, dilanjutkan dengan ibadah umrah di Tanah Suci Makkah dan Madinah bersama asatidzah berpengalaman.', '/images/landing/hero-kaaba.jpg', 'Wisata Halal', 44500000.00, '2025-04-10', NOW(), NOW(), 'Booking Seat'),
(6, 'Tiket Penerbangan & Visa Umrah Mandiri', 'Layanan penerbitan visa umrah resmi dan booking tiket penerbangan grup/individu untuk kemudahan perjalanan ibadah mandiri Anda.', '/images/landing/gallery-kereta.jpg', 'Layanan Tiket & Visa', 4500000.00, '2025-01-01', NOW(), NOW(), 'Hubungi CS');

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('1', '0001_01_01_000000_create_users_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('2', '0001_01_01_000001_create_cache_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('3', '0001_01_01_000002_create_jobs_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('4', '2025_11_05_093939_create_news_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('5', '2025_11_05_093946_create_businesses_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('6', '2025_11_05_115805_create_messages_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('7', '2025_11_05_120959_add_button_text_to_businesses_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('8', '2025_11_05_125119_create_teams_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('9', '2025_11_05_134026_add_phone_to_teams_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('10', '2025_11_06_000001_add_phone_to_messages_table', '1');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Umroh',
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `news` (`id`, `title`, `content`, `image`, `category`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Syarat dan Regulasi Terbaru Visa Umrah & Haji Khusus Musim 1446 H', 'Kementerian Haji dan Umrah Kerajaan Arab Saudi telah menerbitkan aturan dan pedoman terbaru terkait masa berlaku visa umrah serta persyaratan biometrik digital bagi calon jamaah dari Indonesia. PT Almubarak Wisata Barakah siap mendampingi proses administrasi jamaah hingga tuntas.', '/images/landing/hero-kaaba.jpg', 'Umrah & Regulasi', '2025-01-15', NOW(), NOW()),
(2, 'Tips Menjaga Kebugaran Fisik dan Stamina Selama Ibadah di Tanah Suci', 'Perjalanan ibadah di Makkah dan Madinah membutuhkan ketahanan fisik yang optimal. Para dokter pembimbing Almubarak membagikan tips menjaga asupan cairan, pola istirahat, dan olahraga ringan sebelum keberangkatan.', '/images/landing/gallery-jamaah.jpg', 'Tips & Kesehatan', '2025-01-10', NOW(), NOW()),
(3, 'Keutamaan Menjalankan Iktikaf 10 Hari Terakhir Ramadhan di Masjidil Haram', 'Malam Lailatul Qadar adalah anugerah terbesar bagi umat muslim. Beriktikaf langsung di depan Baitullah Makkah menghadirkan kekhusyukan dan ketenangan hati yang tak terlupakan.', '/images/landing/package-ramadhan-16hari.jpg', 'Ibadah & Doa', '2025-01-05', NOW(), NOW()),
(4, 'Kunjungan Ziarah Sejarah Islam: Meneladani Perjuangan di Jabal Uhud & Badar', 'Program ziarah edukatif Almubarak menghadirkan penjelasan sejarah mendalam tentang perjuangan Nabi Muhammad ﷺ dan para sahabat mulia, menambah kecintaan kita pada sunnah beliau.', '/images/landing/gallery-uhud.jpg', 'Wisata Religi', '2024-12-25', NOW(), NOW());

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('2uCbjGbaPNmcOdkwDsJhyPJVmiPKCCHX9Gfv7qQ4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36 Edg/156.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjhpY0RvV0lQQTkzOTh0RDdEQll3MnpQYkhIZ0VVN01xNnFyVjRzWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1793603571');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('olX7kNVABMt4orhEhRQLM4hShX2sezj3YDO021bn', NULL, '127.0.0.1', 'Symfony', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2xrMnpObWVibThXY0NCZUZEdkM5ZklKYlZCZ0ZZR1VZQ0VucVV3dCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvYWJvdXQiO3M6NToicm91dGUiO3M6NToiYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', '1793603466');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('qe9MILIcRKZeUcyixAOMDsEuOwUKRznoYXBYES71', NULL, '127.0.0.1', 'Symfony', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEpVUHpKR3BuVVVna3NEMWVwNGhMNGZlMldsQmRMUGJGSmRndERvMiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1793603432');

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `name`, `position`, `description`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Mubarak', 'CEO & Direktur Utama', 'Berpengalaman lebih dari 15 tahun dalam industri travel haji dan umrah internasional. Berkomitmen menghadirkan layanan ibadah yang jujur, amanah, dan terpercaya.', '6281260003484', '/images/ceo.jpg', NOW(), NOW()),
(2, 'Ustadz Abdullah Haris, Lc.', 'Pembimbing Ibadah & Muthawif Senior', 'Alumni Universitas Islam Madinah dengan pengalaman membimbing jamaah selama lebih dari 12 tahun sesuai Al-Qur\'an dan As-Sunnah.', '6281260003484', '/images/landing/testi-fachri.jpg', NOW(), NOW()),
(3, 'Sarah Amelia, S.Par', 'Direktur Operasional & Layanan', 'Pakar manajemen logistik perhotelan di Makkah dan Madinah yang memastikan seluruh kenyamanan akomodasi jamaah terlayani sempurna.', '6281180002807', '/images/landing/testi-siti.jpg', NOW(), NOW()),
(4, 'M. Rizky Fauzi, S.Kom', 'Manajer Ticketing & Visa Internasional', 'Ahli sistem reservasi penerbangan internasional dan e-Hajj Kemenag RI dengan akurasi proses administrasi dokumen 100%.', '6281180002807', '/images/landing/testi-hendra.jpg', NOW(), NOW());

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Almubarak', 'admin@almubaraktravel.com', NOW(), '$2y$10$OZoIP.0dy7zgVw/2dugwCu56NaC8RRzWfeJTgZ3JGFIDqZJvYGlka', NULL, NOW(), NOW());

SET FOREIGN_KEY_CHECKS=1;
