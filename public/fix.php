<?php
// File Diagnosa & Pembersih Cache Otomatis Almubarak Travel
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html><html><head><title>Diagnosa Database Almubarak</title><style>body{font-family:sans-serif;padding:30px;line-height:1.6;background:#f8fafc;} .card{background:#fff;padding:24px;border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,0.08);max-width:700px;margin:auto;} .success{color:#047857;background:#ecfdf5;padding:12px;border-radius:8px;border:1px solid #a7f3d0;} .error{color:#b91c1c;background:#fef2f2;padding:12px;border-radius:8px;border:1px solid #fecaca;}</style></head><body><div class='card'>";

echo "<h2>🔧 Diagnosa & Pembersih Cache Almubarak</h2>";

// 1. Hapus cache config lama yang mengunci .env
$configCache = __DIR__ . '/../bootstrap/cache/config.php';
if (file_exists($configCache)) {
    if (@unlink($configCache)) {
        echo "<div class='success'>✓ <b>Cache config lama (bootstrap/cache/config.php) BERHASIL DIHAPUS!</b> Laravel kini membaca .env terbaru.</div><br>";
    } else {
        echo "<div class='error'>✗ Gagal menghapus bootstrap/cache/config.php. Hapus manual via File Manager.</div><br>";
    }
} else {
    echo "<p style='color:#059669;'>✓ Tidak ada cache config yang mengunci .env (Laravel membaca file .env langsung).</p>";
}

// 2. Baca file .env
$envFile = __DIR__ . '/../.env';
if (!file_exists($envFile)) {
    echo "<div class='error'>✗ File .env TIDAK ditemukan di " . htmlspecialchars($envFile) . "</div></div></body></html>";
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

echo "<h3>Parameter yang Dibaca dari .env:</h3>";
echo "<ul>";
echo "<li><b>DB_HOST:</b> <code>" . htmlspecialchars($host) . "</code></li>";
echo "<li><b>DB_DATABASE:</b> <code>" . htmlspecialchars($db) . "</code></li>";
echo "<li><b>DB_USERNAME:</b> <code>" . htmlspecialchars($user) . "</code></li>";
echo "<li><b>DB_PASSWORD:</b> <code>" . (strlen($pass) > 0 ? htmlspecialchars($pass) : "(KOSONG)") . "</code> (Panjang: " . strlen($pass) . " karakter)</li>";
echo "</ul>";

// 3. Tes Koneksi Langsung PDO
echo "<h3>Hasil Tes Koneksi ke Database:</h3>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div class='success'>🎉 <b>ALHAMDULILLAH! KONEKSI DATABASE BERHASIL 100%!</b></div>";

    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "<p>Jumlah tabel di database saat ini: <b>" . count($tables) . " tabel</b>.</p>";

    if (count($tables) === 0) {
        echo "<div class='error'>⚠ Database masih kosong (0 tabel). Silakan buka phpMyAdmin &rarr; klik tab <b>Impor</b> &rarr; masukkan file <code>database_almubarak.sql</code> agar tabel terisi.</div>";
    } else {
        echo "<p style='color:#047857;'>✓ Tabel yang tersedia: " . implode(', ', $tables) . "</p>";
        echo "<p><b>Sekarang silakan buka halaman utama: <a href='/' style='color:#047857; font-weight:bold;'>https://almubaraktravel.com</a></b></p>";
    }
} catch (PDOException $e) {
    echo "<div class='error'><b>GAGAL TERHUBUNG KE DATABASE:</b><br>" . htmlspecialchars($e->getMessage()) . "</div>";
    echo "<p><b>Penyebab:</b> Password atau Username di atas tidak cocok dengan yang terdaftar di MySQL Hostinger Anda.</p>";
    echo "<p><b>Solusi:</b><br>1. Buka <b>hPanel Hostinger</b> &rarr; <b>Databases</b> &rarr; <b>MySQL Databases</b>.<br>2. Cari user <code>" . htmlspecialchars($user) . "</code> &rarr; klik titik tiga (⋮) &rarr; pilih <b>Change Password</b>.<br>3. Ganti password menjadi <code>" . htmlspecialchars($pass) . "</code> lalu klik Simpan.</p>";
}

echo "</div></body></html>";

