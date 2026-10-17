

\# SMK Backend



\## Deskripsi Project

Project ini merupakan tugas praktik seleksi TEFA untuk mempelajari dasar backend menggunakan PHP dan MySQL. Project menampilkan data anggota dari database melalui halaman web.



\## Teknologi yang Digunakan

\- PHP

\- MySQL

\- Laragon

\- phpMyAdmin



\## Persyaratan

\- Laragon sudah terinstal.

\- Apache dan MySQL berjalan.

\- PHP dengan ekstensi MySQLi aktif.



\## Struktur Project

\- index.php: koneksi database dan tampilan data anggota.

\- database.sql: perintah SQL untuk menyiapkan database, tabel, dan data contoh.



\## Cara Instalasi

1\. Instal dan jalankan Laragon.

2\. Salin folder project ke dalam folder www Laragon.

3\. Buka phpMyAdmin melalui Laragon.

4\. Impor file database.sql melalui menu Import, atau jalankan perintah SQL di dalamnya.

5\. Pastikan database smk dan tabel anggota sudah tersedia.



\## Cara Menjalankan

1\. Pastikan Apache dan MySQL berjalan.

2\. Buka browser.

3\. Akses http://localhost/smk-backend/

4\. Halaman akan menampilkan pesan koneksi berhasil dan daftar anggota.



\## Catatan

Konfigurasi koneksi database pada index.php menggunakan localhost, username root, dan password kosong sesuai konfigurasi Laragon bawaan. Sesuaikan jika konfigurasi lokal berbeda.



