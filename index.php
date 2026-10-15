<?php
declare(strict_types=1);

$projectTitle = 'Sistem Informasi Denah dan Fasilitas Gedung Kampus';

// Data contoh untuk prototipe. Ganti dengan data hasil pengamatan kampus.
$rooms = [
    ['code' => 'LAB-01', 'name' => 'Laboratorium Komputer', 'building' => 'Gedung A', 'floor' => 1, 'facilities' => 'Komputer, proyektor'],
    ['code' => 'R-201', 'name' => 'Ruang Kelas 201', 'building' => 'Gedung A', 'floor' => 2, 'facilities' => 'Meja, kursi, papan tulis'],
    ['code' => 'PER-01', 'name' => 'Perpustakaan', 'building' => 'Gedung B', 'floor' => 1, 'facilities' => 'Buku, meja baca'],
    ['code' => 'ADM-01', 'name' => 'Ruang Administrasi', 'building' => 'Gedung C', 'floor' => 1, 'facilities' => 'Meja layanan, komputer'],
];

$keyword = trim((string)($_GET['cari'] ?? ''));
$results = array_values(array_filter($rooms, static function (array $room) use ($keyword): bool {
    if ($keyword === '') return true;
    foreach (['code', 'name', 'building', 'facilities'] as $field) {
        if (stripos($room[$field], $keyword) !== false) return true;
    }
    return (string)$room['floor'] === $keyword;
}));

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($projectTitle) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="hero">
    <nav class="nav"><span class="brand">KAMPUS<span>MAP</span></span><span class="nav-label">Informasi gedung & fasilitas</span></nav>
    <div class="hero-content">
        <p class="eyebrow">PORTAL INFORMASI KAMPUS</p>
        <h1>Temukan ruang kampus<br><span>tanpa kebingungan.</span></h1>
        <p class="intro">Cari ruangan, ketahui lokasi gedung dan lantai, serta lihat fasilitas yang tersedia.</p>
        <a class="primary-link" href="#pencarian">Cari ruangan <span aria-hidden="true">↓</span></a>
    </div>
    <div class="hero-mark" aria-hidden="true"><div class="mark-building"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><span>DENAH KAMPUS</span></div>
</header>
<main>
    <section class="summary-grid" aria-label="Ringkasan informasi">
        <article class="summary-card"><span class="summary-icon">⌂</span><div><strong>3</strong><span>Gedung contoh</span></div></article>
        <article class="summary-card"><span class="summary-icon">▦</span><div><strong><?= count($rooms) ?></strong><span>Ruangan contoh</span></div></article>
        <article class="summary-card"><span class="summary-icon">⌕</span><div><strong>Cepat</strong><span>Pencarian ruangan</span></div></article>
    </section>

    <section class="section-heading" id="pencarian"><div><p class="eyebrow dark">DIREKTORI RUANGAN</p><h2>Ruangan dan fasilitas</h2><p>Masukkan nama, kode, gedung, fasilitas, atau nomor lantai.</p></div></section>
    <section class="search-panel">
        <form method="get" action="#pencarian" class="search-form">
            <label for="cari">Cari lokasi</label>
            <div class="search-controls"><input id="cari" type="search" name="cari" value="<?= e($keyword) ?>" placeholder="Contoh: LAB-01 atau Gedung A"><button type="submit">Cari ruangan</button></div>
        </form>
        <p class="result-count">Ditemukan <strong><?= count($results) ?></strong> ruangan<?= $keyword !== '' ? ' untuk “' . e($keyword) . '”' : '' ?>.</p>
        <div class="room-grid">
            <?php if ($results): ?>
                <?php foreach ($results as $room): ?>
                    <article class="room-card">
                        <div class="room-card-top"><span class="room-code"><?= e($room['code']) ?></span><span class="floor-tag">Lantai <?= (int)$room['floor'] ?></span></div>
                        <h3><?= e($room['name']) ?></h3>
                        <p class="location"><span aria-hidden="true">⌖</span> <?= e($room['building']) ?></p>
                        <div class="facility"><span>FASILITAS</span><p><?= e($room['facilities']) ?></p></div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="empty-state"><strong>Ruangan belum ditemukan</strong><p>Coba kata kunci lain, seperti nama gedung atau kode ruangan.</p><a href="index.php#pencarian">Tampilkan semua ruangan</a></div>
            <?php endif; ?>
        </div>
    </section>
    <section class="notice"><div class="notice-symbol">i</div><div><h3>Catatan prototipe</h3><p>Data gedung dan ruangan di halaman ini hanya contoh untuk tugas. Ganti dengan data hasil pengamatan dan denah resmi yang diizinkan oleh kampus.</p></div></section>
</main>
<footer><span><?= e($projectTitle) ?></span><span>Prototipe UTS Rekayasa Perangkat Lunak</span></footer>
</body>
</html>
