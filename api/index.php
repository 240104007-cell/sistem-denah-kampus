<?php
declare(strict_types=1);

$projectTitle = 'Sistem Informasi Denah dan Fasilitas Gedung Kampus';

/* DATA RUANGAN KAMPUS */
$rooms = [
    [
        'code' => 'A-R01',
        'name' => 'Ruangan 1',
        'building' => 'Gedung A',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, papan tulis, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'A-R02',
        'name' => 'Ruangan 2',
        'building' => 'Gedung A',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, papan tulis, proyektor',
        'status' => 'Kosong'
    ],
    [
        'code' => 'A-LAB01',
        'name' => 'Lab 1',
        'building' => 'Gedung A',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, jaringan internet, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'A-LAB02',
        'name' => 'Lab 2',
        'building' => 'Gedung A',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, proyektor, jaringan internet, komputer',
        'status' => 'Kosong'
    ],
    [
        'code' => 'A-LAB04',
        'name' => 'Lab 4',
        'building' => 'Gedung A',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, komputer, jaringan internet, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'A-LAB05',
        'name' => 'Lab 5',
        'building' => 'Gedung A',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, komputer, proyektor, jaringan internet',
        'status' => 'Kosong'
    ],
    [
        'code' => 'A-TEK01',
        'name' => 'Ruang Teknisi',
        'building' => 'Gedung A',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja kerja, komputer, peralatan teknis, lemari penyimpanan',
        'status' => 'Terisi'
    ],
    [
        'code' => 'A-PER01',
        'name' => 'Perpustakaan',
        'building' => 'Gedung A',
        'floor' => 'Lantai 1',
        'facilities' => 'Rak buku, meja baca, kursi, koleksi buku, komputer katalog, rak sepatu',
        'status' => 'Kosong'
    ],
    [
        'code' => 'B-R03',
        'name' => 'Ruang 3',
        'building' => 'Gedung B',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, papan tulis, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-R04',
        'name' => 'Ruang 4',
        'building' => 'Gedung B',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, papan tulis, proyektor',
        'status' => 'Kosong'
    ],
    [
        'code' => 'B-R05',
        'name' => 'Ruang 5',
        'building' => 'Gedung B',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, papan tulis, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-LAB03',
        'name' => 'Lab 3',
        'building' => 'Gedung B',
        'floor' => 'Lantai 2',
        'facilities' => 'Meja, kursi, komputer, jaringan internet, proyektor',
        'status' => 'Kosong'
    ],
    [
        'code' => 'B-AUL01',
        'name' => 'Aula',
        'building' => 'Gedung B',
        'floor' => 'Lantai 3',
        'facilities' => 'Meja, kursi, panggung, mikrofon, pengeras suara, proyektor',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-IOT01',
        'name' => 'Lab IoT',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, jaringan internet, alat praktikum',
        'status' => 'Kosong'
    ],
    [
        'code' => 'B-DS01',
        'name' => 'Data Science',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, jaringan internet, proyektor, AC',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-KEU01',
        'name' => 'Ruang Keuangan',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, printer, lemari arsip',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-DOS01',
        'name' => 'Ruang Dosen',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, lemari, jaringan internet, AC',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-DEK01',
        'name' => 'Ruang Dekan',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja, kursi, komputer, lemari arsip, fasilitas rapat, AC',
        'status' => 'Terisi'
    ],
    [
        'code' => 'B-FO01',
        'name' => 'Front Office (FO)',
        'building' => 'Gedung B',
        'floor' => 'Lantai 1',
        'facilities' => 'Meja layanan, kursi, komputer, telepon, papan informasi',
        'status' => 'Terisi'
    ],
    [
        'code' => 'BS-PARK01',
        'name' => 'Parkiran',
        'building' => 'Basement',
        'floor' => 'Basement',
        'facilities' => 'Area parkir, lampu penerangan, rambu parkir',
        'status' => 'Kosong'
    ],
];

/* FUNGSI KEAMANAN DAN FOTO */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function roomImage(array $room): string
{
    $name = strtolower($room['name']);

    if (stripos($name, 'perpustakaan') !== false) {
        return 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=500&q=80';
    }

    if (
        stripos($name, 'lab') !== false ||
        stripos($name, 'data science') !== false
    ) {
        return 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=500&q=80';
    }

    if (stripos($name, 'parkiran') !== false) {
        return 'https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&w=500&q=80';
    }

    if (stripos($name, 'aula') !== false) {
        return 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=500&q=80';
    }

    if (
        stripos($name, 'dosen') !== false ||
        stripos($name, 'dekan') !== false ||
        stripos($name, 'keuangan') !== false ||
        stripos($name, 'teknisi') !== false ||
        stripos($name, 'front office') !== false
    ) {
        return 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=500&q=80';
    }

    return 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=500&q=80';
}

/* PENCARIAN RUANGAN */
$search = trim((string) ($_GET['q'] ?? ''));

$filteredRooms = array_filter($rooms, function ($room) use ($search) {
    if ($search === '') {
        return true;
    }

    return stripos(implode(' ', $room), $search) !== false;
});

/* STATISTIK */
$totalRooms = count($rooms);

$buildingCount = count(
    array_unique(array_column($rooms, 'building'))
);

$occupiedCount = count(
    array_filter($rooms, fn($room) => $room['status'] === 'Terisi')
);

$emptyCount = count(
    array_filter($rooms, fn($room) => $room['status'] === 'Kosong')
);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($projectTitle) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #2457d6;
            --primary-dark: #153a91;
            --navy: #101e3d;
            --background: #f4f7fc;
            --white: #ffffff;
            --text: #17233c;
            --muted: #758198;
            --border: #e8edf5;
            --green: #16875d;
            --red: #d44848;
            --shadow: 0 12px 35px rgba(25, 48, 94, .07);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: var(--background);
            color: var(--text);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1200px, 92%);
            margin: auto;
        }

        /* NAVIGASI */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, .96);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(12px);
        }

        .nav-content {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            color: var(--navy);
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 45px;
            height: 45px;
            border-radius: 14px;
            color: white;
            font-size: 23px;
            background: linear-gradient(135deg, #3477f6, #173caa);
            box-shadow: 0 7px 18px #2457d633;
        }

        .brand small {
            display: block;
            margin-top: 4px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 500;
        }

        .nav-links {
            display: flex;
            gap: 27px;
            align-items: center;
            font-size: 13px;
            font-weight: 600;
            color: #5e6b83;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-button {
            padding: 12px 17px;
            border-radius: 10px;
            color: white !important;
            background: var(--primary);
            transition: .25s;
        }

        .nav-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* HERO */
        .hero {
            position: relative;
            overflow: hidden;
            min-height: 340px;
            display: flex;
            align-items: center;
            margin: 30px 0;
            padding: 48px;
            border-radius: 25px;
            color: white;
            background:
                linear-gradient(90deg, rgba(9, 24, 57, .94), rgba(15, 43, 91, .75), rgba(14, 33, 70, .22)),
                url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1800&q=85') center/cover;
            box-shadow: 0 18px 40px rgba(20, 43, 89, .17);
            animation: appear .7s ease both;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 650px;
        }

        .eyebrow {
            display: inline-block;
            padding: 8px 13px;
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: 30px;
            background: rgba(255, 255, 255, .12);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.1px;
        }

        .hero h1 {
            margin: 22px 0 14px;
            font-size: clamp(30px, 4vw, 45px);
            line-height: 1.18;
            letter-spacing: -1.4px;
        }

        .hero h1 span {
            color: #93c5fd;
        }

        .hero p {
            max-width: 570px;
            margin: 0;
            color: #e2eaf9;
            font-size: 14px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }

        .button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 13px 18px;
            border-radius: 10px;
            border: 0;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s;
        }

        .button-primary {
            color: white;
            background: #3477f6;
        }

        .button-primary:hover {
            background: #1d5ed8;
            transform: translateY(-2px);
        }

        .button-light {
            color: white;
            background: rgba(255, 255, 255, .13);
            border: 1px solid rgba(255, 255, 255, .3);
        }

        .button-light:hover {
            background: rgba(255, 255, 255, .23);
        }

        /* JUDUL BAGIAN */
        .section {
            margin: 38px 0;
            scroll-margin-top: 100px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 15px;
            margin-bottom: 20px;
        }

        .section-heading h2 {
            margin: 0 0 7px;
            font-size: 23px;
            letter-spacing: -.5px;
        }

        .section-heading p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .section-label {
            margin-bottom: 8px;
            color: var(--primary);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.6px;
            text-transform: uppercase;
        }

        /* STATISTIK */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 15px;
            min-height: 120px;
            padding: 23px;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: white;
            box-shadow: var(--shadow);
            transition: transform .3s, box-shadow .3s;
            animation: rise .6s ease both;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 17px 35px rgba(25, 48, 94, .12);
        }

        .stat-icon {
            display: grid;
            place-items: center;
            flex-shrink: 0;
            width: 52px;
            height: 52px;
            border-radius: 15px;
            font-size: 24px;
        }

        .icon-blue {
            color: #2457d6;
            background: #eaf0ff;
        }

        .icon-purple {
            color: #8251cf;
            background: #f1eaff;
        }

        .icon-green {
            color: #16875d;
            background: #e3f8ee;
        }

        .icon-red {
            color: #d44848;
            background: #fff0f0;
        }

        .stat-number {
            margin-bottom: 5px;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .stat-label {
            color: var(--muted);
            font-size: 12px;
        }

        /* KARTU KATEGORI */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .category-card {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: white;
            box-shadow: var(--shadow);
            transition: transform .3s, box-shadow .3s;
            animation: rise .7s ease both;
        }

        .category-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 36px rgba(25, 48, 94, .12);
        }

        .category-image {
            width: 100%;
            height: 155px;
            object-fit: cover;
            display: block;
            transition: transform .5s;
        }

        .category-card:hover .category-image {
            transform: scale(1.05);
        }

        .image-wrap {
            overflow: hidden;
        }

        .category-info {
            padding: 17px;
        }

        .category-info h3 {
            margin: 0 0 7px;
            font-size: 15px;
        }

        .category-info p {
            margin: 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.7;
        }

        /* DAFTAR RUANGAN */
        .table-panel {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: white;
            box-shadow: var(--shadow);
        }

        .table-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            padding: 22px;
            border-bottom: 1px solid var(--border);
        }

        .table-toolbar h3 {
            margin: 0 0 5px;
            font-size: 17px;
        }

        .table-toolbar p {
            margin: 0;
            color: var(--muted);
            font-size: 12px;
        }

        .search-form {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .search-input {
            width: 260px;
            max-width: 100%;
            padding: 12px 14px;
            border: 1px solid #dfe6f1;
            border-radius: 10px;
            outline: none;
            font-family: inherit;
            font-size: 12px;
            transition: border .2s, box-shadow .2s;
        }

        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px #2457d61c;
        }

        .search-button {
            padding: 12px 15px;
            color: white;
            background: var(--primary);
            border: 0;
            border-radius: 10px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .reset-button {
            padding: 12px 15px;
            color: #42516b;
            background: #edf1f8;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 920px;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background: #f7f9fd;
        }

        th {
            padding: 15px 17px;
            color: #68758d;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .6px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        td {
            padding: 15px 17px;
            border-top: 1px solid #edf0f6;
            color: #4d5b73;
            font-size: 12px;
            line-height: 1.7;
            vertical-align: middle;
        }

        tbody tr {
            transition: background .2s;
            animation: rise .45s ease both;
        }

        tbody tr:hover {
            background: #f6f9ff;
        }

        .room-photo {
            display: block;
            width: 82px;
            height: 58px;
            object-fit: cover;
            border-radius: 10px;
            background: #edf1f8;
        }

        .room-name {
            color: var(--text);
            font-size: 12px;
            font-weight: 700;
        }

        .room-code {
            display: inline-block;
            padding: 5px 8px;
            color: #3559ad;
            background: #edf2ff;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 10px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: currentColor;
        }

        .status-terisi {
            color: var(--green);
            background: #e6f8ef;
        }

        .status-kosong {
            color: var(--red);
            background: #fff0f0;
        }

        .empty-result {
            padding: 40px 20px;
            text-align: center;
            color: var(--muted);
        }

        .result-count {
            padding: 14px 22px;
            color: var(--muted);
            background: #fafbfe;
            border-top: 1px solid var(--border);
            font-size: 11px;
        }

        /* CATATAN */
        .note {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            margin-top: 20px;
            padding: 17px 20px;
            border: 1px solid #dce7ff;
            border-radius: 13px;
            color: #38517f;
            background: #edf3ff;
            font-size: 12px;
            line-height: 1.8;
        }

        .note strong {
            color: #183d89;
        }

        /* FOOTER */
        footer {
            margin-top: 60px;
            padding: 30px 0;
            color: #b9c7e1;
            background: #101e3d;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-title {
            color: white;
            font-size: 14px;
            font-weight: 700;
        }

        footer p {
            margin: 7px 0 0;
            font-size: 11px;
            line-height: 1.7;
        }

        .footer-right {
            font-size: 11px;
        }

        /* ANIMASI */
        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* RESPONSIVE */
        @media (max-width: 950px) {
            .stats-grid,
            .category-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero {
                padding: 35px;
            }
        }

        @media (max-width: 600px) {
            .nav-content {
                min-height: 68px;
            }

            .brand {
                font-size: 12px;
            }

            .brand-icon {
                width: 38px;
                height: 38px;
                font-size: 19px;
            }

            .nav-links {
                gap: 12px;
                font-size: 11px;
            }

            .nav-links a:not(.nav-button) {
                display: none;
            }

            .nav-button {
                padding: 10px 12px;
            }

            .hero {
                min-height: 330px;
                padding: 26px 22px;
                border-radius: 18px;
            }

            .hero h1 {
                font-size: 31px;
            }

            .hero p {
                font-size: 12px;
            }

            .stats-grid {
                gap: 10px;
            }

            .stat-card {
                min-height: 105px;
                padding: 13px;
                gap: 10px;
            }

            .stat-icon {
                width: 39px;
                height: 39px;
                border-radius: 11px;
                font-size: 19px;
            }

            .stat-number {
                font-size: 24px;
            }

            .stat-label {
                font-size: 10px;
                line-height: 1.5;
            }

            .category-grid {
                gap: 11px;
            }

            .category-image {
                height: 105px;
            }

            .category-info {
                padding: 12px;
            }

            .category-info h3 {
                font-size: 12px;
            }

            .category-info p {
                font-size: 10px;
            }

            .section-heading h2 {
                font-size: 20px;
            }

            .table-toolbar {
                align-items: flex-start;
                padding: 16px;
            }

            .search-form {
                width: 100%;
            }

            .search-input {
                flex: 1;
                width: 100%;
                min-width: 0;
            }

            .footer-content {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGASI -->
    <header class="navbar">
        <div class="container nav-content">
            <a class="brand" href="#beranda">
                <span class="brand-icon">🏛️</span>
                <span>
                    Denah Kampus
                    <small>Sistem Informasi Fasilitas</small>
                </span>
            </a>

            <nav class="nav-links">
                <a href="#beranda">Beranda</a>
                <a href="#fasilitas">Fasilitas</a>
                <a href="#ruangan">Daftar Ruangan</a>
                <a class="nav-button" href="#ruangan">Cari Ruangan ↗</a>
            </nav>
        </div>
    </header>

    <main class="container">

        <!-- HERO -->
        <section class="hero" id="beranda">
            <div class="hero-content">
                <span class="eyebrow">SISTEM INFORMASI KAMPUS</span>

                <h1>
                    Temukan Ruangan,<br>
                    Kenali <span>Fasilitas Kampus.</span>
                </h1>

                <p>
                    Informasi lokasi, fasilitas, dan status ruangan kampus
                    dalam satu halaman. Cari ruangan yang kamu butuhkan
                    dengan mudah dan praktis.
                </p>

                <div class="hero-actions">
                    <a href="#ruangan" class="button button-primary">
                        Lihat Daftar Ruangan →
                    </a>

                    <a href="#fasilitas" class="button button-light">
                        Jelajahi Fasilitas
                    </a>
                </div>
            </div>
        </section>

        <!-- STATISTIK -->
        <section class="section" id="statistik">
            <div class="section-heading">
                <div>
                    <div class="section-label">Ringkasan Data</div>
                    <h2>Statistik Ruangan</h2>
                    <p>Ringkasan informasi ruangan yang tersedia dalam sistem.</p>
                </div>
            </div>

            <div class="stats-grid">
                <article class="stat-card">
                    <div class="stat-icon icon-blue">🏢</div>
                    <div>
                        <div class="stat-number"><?= $totalRooms ?></div>
                        <div class="stat-label">Total Ruangan</div>
                    </div>
                </article>

                <article class="stat-card">
                    <div class="stat-icon icon-purple">📍</div>
                    <div>
                        <div class="stat-number"><?= $buildingCount ?></div>
                        <div class="stat-label">Gedung / Area</div>
                    </div>
                </article>

                <article class="stat-card">
                    <div class="stat-icon icon-green">✓</div>
                    <div>
                        <div class="stat-number"><?= $occupiedCount ?></div>
                        <div class="stat-label">Status Terisi</div>
                    </div>
                </article>

                <article class="stat-card">
                    <div class="stat-icon icon-red">⌂</div>
                    <div>
                        <div class="stat-number"><?= $emptyCount ?></div>
                        <div class="stat-label">Status Kosong</div>
                    </div>
                </article>
            </div>
        </section>

        <!-- KATEGORI FASILITAS -->
        <section class="section" id="fasilitas">
            <div class="section-heading">
                <div>
                    <div class="section-label">Jelajahi Area</div>
                    <h2>Fasilitas Kampus</h2>
                    <p>Beberapa kategori fasilitas yang ada di lingkungan kampus.</p>
                </div>
            </div>

            <div class="category-grid">
                <article class="category-card">
                    <div class="image-wrap">
                        <img
                            class="category-image"
                            src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=700&q=80"
                            alt="Foto ruang kelas"
                            loading="lazy"
                        >
                    </div>
                    <div class="category-info">
                        <h3>Ruang Kelas</h3>
                        <p>Ruangan untuk kegiatan pembelajaran dan perkuliahan.</p>
                    </div>
                </article>

                <article class="category-card">
                    <div class="image-wrap">
                        <img
                            class="category-image"
                            src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=700&q=80"
                            alt="Foto laboratorium komputer"
                            loading="lazy"
                        >
                    </div>
                    <div class="category-info">
                        <h3>Laboratorium</h3>
                        <p>Area praktikum dengan komputer dan fasilitas pendukung.</p>
                    </div>
                </article>

                <article class="category-card">
                    <div class="image-wrap">
                        <img
                            class="category-image"
                            src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=700&q=80"
                            alt="Foto perpustakaan"
                            loading="lazy"
                        >
                    </div>
                    <div class="category-info">
                        <h3>Perpustakaan</h3>
                        <p>Tempat membaca, belajar, dan mencari referensi.</p>
                    </div>
                </article>

                <article class="category-card">
                    <div class="image-wrap">
                        <img
                            class="category-image"
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=700&q=80"
                            alt="Foto ruang kantor"
                            loading="lazy"
                        >
                    </div>
                    <div class="category-info">
                        <h3>Ruang Administrasi</h3>
                        <p>Area pelayanan dan administrasi kegiatan kampus.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- TABEL RUANGAN -->
        <section class="section" id="ruangan">
            <div class="section-heading">
                <div>
                    <div class="section-label">Informasi Lokasi</div>
                    <h2>Daftar Ruangan Kampus</h2>
                    <p>Cari ruangan berdasarkan nama, kode, gedung, lantai, fasilitas, atau status.</p>
                </div>
            </div>

            <div class="table-panel">

                <div class="table-toolbar">
                    <div>
                        <h3>Data Ruangan</h3>
                        <p>Informasi lokasi dan fasilitas yang tersedia.</p>
                    </div>

                    <form class="search-form" method="GET" action="#ruangan">
                        <input
                            class="search-input"
                            type="search"
                            name="q"
                            placeholder="🔎 Cari ruangan..."
                            value="<?= e($search) ?>"
                            aria-label="Cari ruangan"
                        >

                        <button class="search-button" type="submit">
                            Cari
                        </button>

                        <a class="reset-button" href="#ruangan">
                            Reset
                        </a>
                    </form>
                </div>

                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Kode</th>
                                <th>Nama Ruangan</th>
                                <th>Gedung</th>
                                <th>Lantai</th>
                                <th>Fasilitas</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (count($filteredRooms) > 0): ?>

                                <?php foreach ($filteredRooms as $room): ?>
                                    <tr>
                                        <td>
                                            <img
                                                class="room-photo"
                                                src="<?= e(roomImage($room)) ?>"
                                                alt="<?= e($room['name']) ?>"
                                                loading="lazy"
                                            >
                                        </td>

                                        <td>
                                            <span class="room-code">
                                                <?= e($room['code']) ?>
                                            </span>
                                        </td>

                                        <td>
                                            <span class="room-name">
                                                <?= e($room['name']) ?>
                                            </span>
                                        </td>

                                        <td><?= e($room['building']) ?></td>

                                        <td><?= e($room['floor']) ?></td>

                                        <td><?= e($room['facilities']) ?></td>

                                        <td>
                                            <span class="status <?= $room['status'] === 'Terisi' ? 'status-terisi' : 'status-kosong' ?>">
                                                <?= e($room['status']) ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="7">
                                        <div class="empty-result">
                                            <div style="font-size: 32px; margin-bottom: 10px;">🔍</div>
                                            <strong>Ruangan tidak ditemukan</strong>
                                            <p>Coba gunakan kata kunci yang berbeda.</p>
                                        </div>
                                    </td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="result-count">
                    Menampilkan <strong><?= count($filteredRooms) ?></strong>
                    dari <strong><?= $totalRooms ?></strong> ruangan
                    <?php if ($search !== ''): ?>
                        untuk kata kunci "<strong><?= e($search) ?></strong>"
                    <?php endif; ?>
                </div>

            </div>

            <div class="note">
                <span style="font-size: 22px;">ℹ️</span>
                <div>
                    <strong>Informasi status ruangan</strong><br>
                    Semoga membantu
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-content">
            <div>
                <div class="footer-title">🏛️ Sistem Informasi Denah Kampus</div>
                <p>Informasi ruangan dan fasilitas kampus dalam satu sistem.</p>
            </div>

            <div class="footer-right">
                © <?= date('Y') ?> Sistem Informasi Denah Kampus
            </div>
        </div>
    </footer>

</body>
</html>
```