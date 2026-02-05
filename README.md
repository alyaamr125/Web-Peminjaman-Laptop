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
### 🔄 SDLC Website Peminjaman Laptop

| Fase | Aktivitas | Keluaran |
| :--- | :--- | :--- |
| **1. Perencanaan** | Pengumpulan syarat (Nama, NPM, Keterangan) | PRD, Cerita Pengguna |
| **2. Analisis** | Spesifikasi sistem dan skema database | Daftar Fitur, Dokumen SRS |
| **3. Desain** | Desain UI merah-biru dan ERD Database | UML, ERD, Maket UI |
| **4. Pengembangan** | Coding Laravel dan REST API | Kode Sumber, Dokumentasi API |
| **5. Pengujian** | Uji coba form dan notifikasi SweetAlert | Laporan Bug, Kasus Uji |

Garis Waktu Proyek (8 Minggu)
Minggu 1: Planning & Analysis (Definisi aturan peminjaman dan jam malam).
Minggu 2: Design (ERD Database, Desain UI warna merah-biru-putih).
Minggu 3-4: Development Sprint 1 (Fitur Utama: Form Pinjam, Riwayat, Notifikasi SweetAlert).
Minggu 5-6: Development Sprint 2 (Fitur Tambahan: Modal Jam Malam, Pengembalian Otomatis).
Minggu 7: Development Sprint 3 (Integrasi REST API dan optimasi database).
Minggu 8: Testing, Security Audit (Validasi data NPM), & Deployment ke Laragon.

### 7. Instalasi

### 8.
