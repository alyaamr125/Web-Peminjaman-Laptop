# LAPORAN KEMAJUAN - APLIKASI PEMINJAMAN LAPTOP
ALYAA MAHIRAAH | II RKS A | 2423101997

### 1. Deskripsi
Website aplikasi peminjaman dan pengembalian laptop taruna adalah sistem manajemen digital terintegrasi yang dirancang khusus untuk mempermudah proses peminjaman dan pengembalian laptop bagi taruna di sekolah kedinasan, dengan fitur-fitur seperti pendataan inventaris real-time, pelacakan status laptop, pengajuan peminjaman online, pelaporan kerusakan, serta monitoring riwayat pemakaian guna memastikan transparansi, akuntabilitas, dan efisiensi dalam pengelolaan aset teknologi akademi.

### 2. Kisah Pengguna
Sebagai pengguna, saya dapat:
1. Menggunakan Akses Peminjaman Laptop dengan Proses Digital dan mudah
2. Memantau Status dan Ketersediaan Laptop Secara Real-Time
3. Mengurangi Risiko Keterlambatan Pengembalian dan Sanksi
4. Melaporkan Kerusakan atau Masalah Teknis Secara Terstruktur

### 3. SRS (Spesifikasi Persyaratan Perangkat Lunak)
1. Manajemen Pengguna & Autentikasi
   - Login Multi-Role (Taruna, Admin, Supervisor)
   - Registrasi Otomatis berdasarkan data taruna terpusat
   - Profil Pengguna dengan data pribadi dan riwayat peminjaman
   - Manajemen Session & Keamanan (timeout, log aktivitas)
2. Proses Peminjaman
   - Pencarian & Filtering laptop tersedia
   - Form Pengajuan Online dengan tujuan peminjaman
   - Validasi Kuota peminjaman per taruna
   - Persetujuan Bertahap (otomatis/manual)
3. Proses Pengembalian
   - Form Pengembalian dengan kondisi laptop
   - Riwayat waktu pengembalian
4. Riwayat & Monitoring
   - Dashboard Personal taruna
   - Riwayat Peminjaman dan pengembalian lengkap
   - Status Saat Ini laptop dipinjam
  
### 4. Diagram UML

### 5. Maket

### 6. SDLC (Siklus Hidup Pengembangan Perangkat Lunak)
Fase,Aktivitas,Keluaran
1. Perencanaan,"Pengumpulan syarat peminjaman (Nama, NPM, Keterangan), alur pengembalian, dan aturan jam malam.","PRD (Product Requirement Document), Cerita Pengguna."
2. Analisis,"Penentuan spesifikasi sistem (Laravel, Laragon), skema database, dan prioritas fitur (API, Notifikasi).","Daftar Fitur, Dokumen SRS (Software Requirement Specification)."
3. Desain,"Pembuatan skema database (loans/peminjamans), desain UI warna merah-biru, dan maket (mockup) form.","UML, ERD Database, Maket UI (Figma/Adobe XD)."
4. Pengembangan,"Coding backend (Controller, Migration, Route), integrasi frontend (Bootstrap), dan pembuatan REST API.","Kode sumber (Source Code), Dokumentasi API."
5. Pengujian,"Uji coba input data Taruna, validasi notifikasi SweetAlert, dan pengujian akses REST API via Postman.","Laporan Bug, Kasus Uji (Test Case)."
6. Penempatan,Konfigurasi virtual host di Laragon/XAMPP dan migrasi database ke lingkungan produksi.,Aplikasi Langsung (Live Application).
7. Pemeliharaan,Perbaikan bug jika waktu tidak sesuai (timezone) dan pembaruan fitur riwayat peminjaman.,"Patch keamanan, Pembaruan Fitur."

### 7. Instalasi

### 8.
