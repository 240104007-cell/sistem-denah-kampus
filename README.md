# Sistem Informasi Denah dan Fasilitas Gedung Kampus

**Mahasiswa:** Rizki Dwi Lestari  
**NIM:** 240104007  
**Kelas:** TK24A1  
**Mata kuliah:** Rekayasa Perangkat Lunak

## Deskripsi
Prototipe web untuk membantu mahasiswa, dosen, dan pengunjung mencari ruangan berdasarkan kode, nama, gedung, lantai, serta mengetahui fasilitasnya.

## Teknologi
- PHP untuk logika pencarian sisi server.
- HTML dan CSS untuk antarmuka.
- Git dan GitHub untuk version control.

## Menjalankan secara lokal
1. Pastikan PHP terpasang dan perintah `php -v` berjalan.
2. Buka terminal di folder proyek.
3. Jalankan `php -S localhost:8000`.
4. Buka `http://localhost:8000` di browser.
5. Uji kata kunci `LAB-01`, `Gedung A`, `Perpustakaan`, dan kata kunci yang tidak ada.

## Catatan
Data gedung dan ruangan pada prototipe hanyalah data contoh, bukan data resmi kampus. Ganti dengan data yang benar setelah melakukan observasi dan memperoleh izin penggunaan denah. Prototipe ini belum menggunakan database atau login admin.

## Dokumen rancangan
Lihat folder `docs/` untuk draf isi lembar jawaban dan diagram berbasis Mermaid.
model:
  default: "ag/claude-opus-4-6-thinking"
  provider: "custom"
  base_url: "http://127.0.0.1:20128/v1"
  api_key: ${OPENAI_API_KEY}
