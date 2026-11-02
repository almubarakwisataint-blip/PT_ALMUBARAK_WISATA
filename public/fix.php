<?php
// File Diagnosa, Pembersih Cache, & Auto-Import Database Almubarak Travel
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html><html lang='id'><head><meta charset='utf-8'><title>Diagnosa & Setup Database Almubarak</title><style>body{font-family:Segoe UI,Helvetica,Arial,sans-serif;padding:30px;line-height:1.6;background:#f0fdf4;color:#1e293b;} .card{background:#fff;padding:30px;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.08);max-width:760px;margin:auto;border:1px solid #d1fae5;} h2{color:#065f46;margin-top:0;} .btn{display:inline-block;background:#059669;color:#fff;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:bold;margin:10px 0;transition:all 0.2s;} .btn:hover{background:#047857;} .success{color:#065f46;background:#ecfdf5;padding:14px;border-radius:10px;border:1px solid #a7f3d0;margin:12px 0;} .error{color:#991b1b;background:#fef2f2;padding:14px;border-radius:10px;border:1px solid #fecaca;margin:12px 0;} .info{background:#eff6ff;color:#1e40af;padding:14px;border-radius:10px;border:1px solid #bfdbfe;margin:12px 0;} code{background:#f1f5f9;padding:2px 6px;border-radius:4px;font-family:monospace;}</style></head><body><div class='card'>";

echo "<h2>🕋 Diagnosa &amp; Import Database Otomatis Almubarak</h2>";

// 1. Hapus cache config lama yang mengunci .env
$configCache = __DIR__ . '/../bootstrap/cache/config.php';
if (file_exists($configCache)) {
    if (@unlink($configCache)) {
        echo "<div class='success'>✅ <b>Cache config lama (bootstrap/cache/config.php) BERHASIL DIHAPUS!</b> Laravel kini membaca konfigurasi .env terbaru.</div>";
    }
}

// 2. Baca file .env
$envFile = __DIR__ . '/../.env';
if (!file_exists($envFile)) {
    echo "<div class='error'>❌ File .env TIDAK ditemukan di " . htmlspecialchars($envFile) . "</div></div></body></html>";
    exit;
}

$envContent = file_get_contents($envFile);
preg_match('/^DB_HOST=(.*)$/m', $envContent, $mHost);
preg_match('/^DB_DATABASE=(.*)$/m', $envContent, $mDb);
preg_match('/^DB_USERNAME=(.*)$/m', $envContent, $mUser);
preg_match('/^DB_PASSWORD=(.*)$/m', $envContent, $mPass);

$host = isset($mHost[1]) ? trim($mHost[1], " \t\n\r\0\x0B\"'") : 'localhost';
$db   = isset($mDb[1]) ? trim($mDb[1], " \t\n\r\0\x0B\"'") : '';
$user = isset($mUser[1]) ? trim($mUser[1], " \t\n\r\0\x0B\"'") : '';
$pass = isset($mPass[1]) ? trim($mPass[1], " \t\n\r\0\x0B\"'") : '';

echo "<div class='info'><b>Konfigurasi Database Saat Ini (.env):</b><br>";
echo "Host: <code>" . htmlspecialchars($host) . "</code> | Database: <code>" . htmlspecialchars($db) . "</code> | User: <code>" . htmlspecialchars($user) . "</code></div>";

// 3. Tes Koneksi Langsung PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div class='success'>✅ <b>KONEKSI KE DATABASE HOSTINGER BERHASIL 100%!</b></div>";

    // Action Auto-Import jika ada parameter ?import=1
    $sqlFile = __DIR__ . '/../database_almubarak.sql';
    if (isset($_GET['import']) && $_GET['import'] === '1') {
        if (file_exists($sqlFile)) {
            $sql = file_get_contents($sqlFile);
            $pdo->exec($sql);
            echo "<div class='success'>🎉 <b>ALHAMDULILLAH! Semua tabel &amp; data berhasil di-import otomatis ke database!</b></div>";
        } else {
            echo "<div class='error'>❌ File database_almubarak.sql tidak ditemukan di server.</div>";
        }
    }

    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "<p>Status Database saat ini: <b>" . count($tables) . " tabel terpasang</b>.</p>";

    if (count($tables) === 0) {
        echo "<div class='error'>⚠️ <b>Database masih kosong (0 tabel)!</b><br>Inilah penyebab error <i>'Access denied' / 'news doesn't exist'</i> pada website.</div>";
        echo "<p style='margin-top:15px;'><a href='?import=1' class='btn'>⚡ KLIK DI SINI UNTUK IMPORT SEMUA TABEL OTOMATIS (1 DETIK)</a></p>";
    } else {
        echo "<div class='success'><b>Tabel yang aktif:</b> " . implode(', ', $tables) . "</div>";
        echo "<p style='margin-top:20px;'><a href='/' class='btn'>🚀 BUKA WEBSITE UTAMA: almubaraktravel.com</a></p>";
        echo "<p><a href='?import=1' style='color:#059669; font-size:12px; text-decoration:underline;'>Klik di sini jika ingin Re-Import / Reset Data Database</a></p>";
    }

} catch (PDOException $e) {
    echo "<div class='error'><b>GAGAL TERHUBUNG KE DATABASE:</b><br>" . htmlspecialchars($e->getMessage()) . "</div>";
    echo "<p><b>Solusi Hostinger:</b><br>1. Buka <b>hPanel Hostinger</b> &rarr; <b>Databases</b> &rarr; <b>MySQL Databases</b>.<br>2. Cari user <code>" . htmlspecialchars($user) . "</code> &rarr; klik titik tiga (⋮) &rarr; pilih <b>Change Password</b>.<br>3. Ganti password menjadi <code>" . htmlspecialchars($pass) . "</code> lalu klik Simpan.</p>";
}

echo "</div></body></html>";
