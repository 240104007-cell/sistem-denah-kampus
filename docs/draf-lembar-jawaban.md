# Draf Isi Lembar Jawaban UTS RPL

> Ganti semua keterangan asumsi dengan hasil pengamatan/tes yang sebenarnya. Jangan mengisi tautan GitHub, pull request, atau hasil uji sebelum benar-benar dilakukan.

## Identitas
- Nama: Rizki Dwi Lestari
- NIM: 240104007
- Kelas/Semester: TK24A1 / V
- Judul: Sistem Informasi Denah dan Fasilitas Gedung Kampus
- Fokus: Memudahkan pengguna menemukan gedung, lantai, ruangan, dan fasilitas kampus.
- Tautan GitHub: [isi setelah repository dibuat]

## Tahap 1 — Identifikasi masalah
- Permasalahan nyata: [catat hasil observasi nyata di kampus].
- Penyebab/kondisi awal: [catat hasil observasi].
- Dampak: Pengguna dapat membutuhkan waktu lebih lama saat mencari ruangan jika informasi lokasi belum tersaji terpusat.
- Tujuan sistem: Menyediakan pencarian ruangan dan informasi lokasi/fasilitas melalui web.
- Pengguna utama: Mahasiswa, dosen/staf, pengunjung, dan admin.
- Struktur folder: `index.php`, `assets/style.css`, `docs/`, `.gitignore`, `README.md`.
- PHP/server: [isi hasil `php -v` dan cara server lokal dijalankan].
- Perangkat pendukung: [isi perangkat yang benar-benar digunakan].
- Bukti: sisipkan screenshot halaman dan hasil pencarian.

## Tahap 2 — Git
- Repository lokal: `sistem-denah-kampus`.
- `.gitignore`: `.env`, `vendor/`, `node_modules/`, file OS, dan log.
- Riwayat commit: salin minimal lima commit nyata dari `git log --oneline`.
- Pemeriksaan: `git status`, `git log --oneline`, `git diff`.
- Berkas simulasi: `README.md` atau file lain yang perubahan sementaranya aman dibuang.
- Pemulihan: `git restore README.md` setelah membuat perubahan sementara yang belum di-stage.
- Hasil pemulihan: [isi hasil terminal yang sebenarnya].

## Tahap 3 — GitHub
- URL repository: [isi URL nyata].
- Branch utama: `main`.
- Feature branch: `feature/pencarian-ruangan`.
- URL pull request: [isi URL PR nyata].
- Tujuan branch: menyempurnakan pencarian ruangan.
- Isi PR: perubahan fitur dan cara pengujiannya.
- Status merge: [isi status nyata].
- Konflik: dua branch mengubah baris yang sama pada `README.md`; pilih isi akhir, hapus penanda konflik, lalu commit.
- Bukti: screenshot branch, PR, dan konflik jika benar-benar terjadi.

## Tahap 4 — SDLC
- Masalah: informasi lokasi ruangan/fasilitas belum tentu mudah ditemukan dari satu tempat.
- Tujuan: menyediakan direktori web untuk pencarian ruangan.
- Pengguna/pihak terkait: mahasiswa, dosen/staf, pengunjung, admin.
- Ruang lingkup: direktori gedung/lantai/ruangan, pencarian, detail fasilitas, denah jika data tersedia.
- Di luar ruang lingkup: GPS dalam ruangan, aplikasi mobile khusus, pemesanan ruang, integrasi akademik.
- Risiko: data denah tidak lengkap, data berubah, waktu terbatas, kesalahan input.
- Hasil: prototipe, kebutuhan, diagram, rancangan database, dokumentasi Git/GitHub.
- Model: Waterfall.
- Alasan: tahapannya runtut, kebutuhan dan desain dapat didokumentasikan, sesuai tugas analisis/perancangan. Perubahan besar tetap memerlukan peninjauan ulang.
- Tahapan: analisis kebutuhan → perancangan → implementasi → pengujian → pemeliharaan.

## Tahap 5 — Analisis kebutuhan
### Stakeholder
1. Mahasiswa: mencari ruang kelas/lab/fasilitas.
2. Dosen/staf: mengetahui lokasi ruangan.
3. Pengunjung: menemukan gedung/ruangan.
4. Admin: mengelola data.

### Elicitation (asumsi sampai wawancara dilakukan)
1. Informasi yang dibutuhkan? Asumsi: nama gedung, lantai, ruangan, fasilitas.
2. Cara mencari? Asumsi: nama atau kode ruangan.
3. Perlu denah? Asumsi: ya.
4. Fasilitas apa yang ditampilkan? Asumsi: nama fasilitas dan lokasi.
5. Siapa mengelola data? Asumsi: admin.
6. Data bisa berubah? Asumsi: ya.
7. Perlu layar ponsel? Asumsi: ya.
8. Pengguna harus login untuk mencari? Asumsi: tidak.

### Functional requirements
- FR-01 (Must): sistem menampilkan daftar gedung dan lantai.
- FR-02 (Must): sistem menampilkan denah lantai jika tersedia.
- FR-03 (Must): sistem mencari ruangan berdasarkan nama/kode.
- FR-04 (Must): sistem menampilkan lokasi dan fasilitas ruangan.
- FR-05 (Must untuk sistem akhir): admin mengelola data gedung, ruangan, dan fasilitas.
- FR-06 (Should): sistem memfilter hasil berdasarkan gedung/lantai.

### Non-functional requirements
- NFR-01: target waktu muat halaman maksimal 3 detik pada kondisi uji yang ditetapkan; ukur dan catat hasil sebenarnya.
- NFR-02: tampilan tidak terpotong pada desktop dan ponsel; uji beberapa lebar layar.
- NFR-03: keluaran teks dari input di-escape; uji karakter khusus dan amati hasilnya.

### Acceptance criteria
- AC-01: saat halaman dibuka, daftar ruangan contoh tampil.
- AC-02: saat mencari `LAB-01`, Laboratorium Komputer tampil.
- AC-03: saat mencari kode yang tidak ada, pesan tidak ditemukan tampil.
- AC-04: untuk versi dengan fitur admin/database, data valid yang ditambah admin tersimpan dan bisa dicari setelah disimpan.

### Batasan/prioritas
- Wajib prototipe: pencarian ruangan dan detail gedung/lantai/fasilitas berbasis data contoh.
- Pengembangan berikutnya: database, admin, denah interaktif, filter lanjutan.
- Batasan: belum ada GPS indoor, mobile app khusus, pemesanan ruangan, atau integrasi akademik.

## Tahap 6 — Pemodelan dan database
### Alur bisnis
1. Pengguna membuka website → halaman utama tampil.
2. Pengguna memasukkan kata kunci atau memilih gedung → sistem memeriksa data.
3. Data cocok → hasil ditampilkan; tidak cocok → pesan tidak ditemukan.
4. Pengguna memilih hasil → detail lokasi, lantai, denah, dan fasilitas ditampilkan.

### Entitas database rancangan
- `gedung(id_gedung PK, nama_gedung, alamat, deskripsi)`
- `lantai(id_lantai PK, id_gedung FK, nomor_lantai, file_denah)`
- `ruangan(id_ruangan PK, id_lantai FK, kode_ruangan UNIQUE, nama_ruangan, deskripsi)`
- `fasilitas(id_fasilitas PK, nama_fasilitas, deskripsi)`
- `ruangan_fasilitas(id PK, id_ruangan FK, id_fasilitas FK)`

### Relasi
- gedung 1:N lantai
- lantai 1:N ruangan
- ruangan 1:N ruangan_fasilitas
- fasilitas 1:N ruangan_fasilitas
- Secara konseptual, ruangan dan fasilitas berhubungan N:M melalui `ruangan_fasilitas`.

### Kamus data ringkas
| Tabel | Kolom | Tipe | Keterangan |
|---|---|---|---|
| gedung | id_gedung | INT | PK, auto increment |
| gedung | nama_gedung | VARCHAR(100) | nama gedung |
| gedung | alamat | VARCHAR(255) | alamat/lokasi |
| lantai | id_lantai | INT | PK, auto increment |
| lantai | id_gedung | INT | FK ke gedung |
| lantai | nomor_lantai | INT | nomor lantai |
| lantai | file_denah | VARCHAR(255) | lokasi file, boleh kosong |
| ruangan | id_ruangan | INT | PK, auto increment |
| ruangan | id_lantai | INT | FK ke lantai |
| ruangan | kode_ruangan | VARCHAR(20) | kode unik |
| ruangan | nama_ruangan | VARCHAR(100) | nama ruangan |
| fasilitas | id_fasilitas | INT | PK, auto increment |
| fasilitas | nama_fasilitas | VARCHAR(100) | nama fasilitas |
| ruangan_fasilitas | id | INT | PK, auto increment |
| ruangan_fasilitas | id_ruangan | INT | FK ke ruangan |
| ruangan_fasilitas | id_fasilitas | INT | FK ke fasilitas |

## Tahap 7 — Pengumpulan
- Tambahkan screenshot pengujian halaman PHP.
- Tambahkan screenshot `git log --oneline` dan `git restore`.
- Tambahkan URL repository dan PR yang benar.
- Tambahkan gambar diagram context, alur proses, ERD.
- Pastikan seluruh klaim status sesuai hasil nyata.

## Pengujian Sistem

Pengujian dilakukan dengan mencoba pencarian ruangan berdasarkan kode, nama ruangan, gedung, dan lantai. Kata kunci yang tidak ditemukan juga diuji untuk memastikan sistem memberikan respons yang sesuai. Pengujian dilakukan melalui browser pada lingkungan lokal.
