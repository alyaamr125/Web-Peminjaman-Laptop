# LAPORAN KEMAJUAN - APLIKASI PEMINJAMAN LAPTOP
ALYAA MAHIRAAH | II RKS A | 2423101997

### 📂 Deskripsi
Website aplikasi peminjaman dan pengembalian laptop taruna adalah sistem manajemen digital terintegrasi yang dirancang khusus untuk mempermudah proses peminjaman dan pengembalian laptop bagi taruna di sekolah kedinasan, dengan fitur-fitur seperti pendataan inventaris real-time, pelacakan status laptop, pengajuan peminjaman online, pelaporan kerusakan, serta monitoring riwayat pemakaian guna memastikan transparansi, akuntabilitas, dan efisiensi dalam pengelolaan aset teknologi akademi.

### 🖇 Kisah Pengguna
| PENGENAL | Kisah Pengguna | Prioritas |
| :--- | :--- | :--- |
| **AS-01** | Sebagai Taruna, saya ingin menginput data NPM agar sistem mengenali identitas peminjam. | Tinggi |
| **AS-02** | Sebagai Taruna, saya ingin memilih kategori laptop agar sesuai dengan kebutuhan tugas/lab. | Tinggi |
| **AS-03** | Sebagai Taruna, saya ingin menerima notifikasi "Berhasil" agar yakin data sudah tersimpan. | Tinggi |
| **AS-04** | Sebagai Taruna, saya ingin melihat status "Dipinjam" atau "Kembali" untuk memantau tanggungan. | Sedang |
| **AS-05** | Sebagai Taruna, saya ingin mengajukan jam malam agar bisa menggunakan laptop lebih lama untuk kegiatan seperti akademik maupun organisasi. | Sedang |
| **AS-06** | Sebagai Admin, saya ingin melihat semua riwayat peminjaman dalam satu tabel yang rapi. | Tinggi |
| **AS-07** | Sebagai Admin, saya ingin memvalidasi pengembalian laptop agar stok tersedia kembali. | Tinggi |
| **AS-08** | Sebagai Sistem, saya ingin menyediakan REST API agar data bisa diakses aplikasi lain. | Sedang |

### 📝 SRS (Spesifikasi Persyaratan Perangkat Lunak)
1. **Sistem Autentikasi Data:** Validasi NPM dan Nama Taruna.
2. **Form Peminjaman:** Input dinamis dengan pilihan kategori (Normal, Lab, dll).
3. **Manajemen Riwayat:** Tabel dengan status berwarna (Kuning: Dipinjam, Hijau: Selesai).
4. **Fitur Jam Malam:** Modal popup untuk input rentang waktu tambahan secara spesifik.
5. **Notifikasi Interaktif:** Menggunakan SweetAlert2 untuk feedback aksi pengguna.
6. **REST API Endpoint:** Menyediakan data JSON untuk integrasi sistem.
  
### 📊 Diagram UML

### 🖥 Maket

### 🔄 SDLC (Siklus Hidup Pengembangan Perangkat Lunak)

| Fase | Aktivitas | Keluaran |
| :--- | :--- | :--- |
| **1. Perencanaan** | Pengumpulan syarat (Nama, NPM, Keterangan) | PRD, Cerita Pengguna |
| **2. Analisis** | Spesifikasi sistem dan skema database | Daftar Fitur, Dokumen SRS |
| **3. Desain** | Desain UI merah-biru dan ERD Database | UML, ERD, Maket UI |
| **4. Pengembangan** | Coding Laravel dan REST API | Kode Sumber, Dokumentasi API |
| **5. Pengujian** | Uji coba form dan notifikasi SweetAlert | Laporan Bug, Kasus Uji |

### ⏱️ Garis Waktu Proyek (8 Minggu)
- Minggu 1: Planning & Analysis (Definisi aturan peminjaman dan jam malam).
- Minggu 2: Design (ERD Database, Desain UI warna merah-biru-putih).
- Minggu 3-4: Development Sprint 1 (Fitur Utama: Form Pinjam, Riwayat, Notifikasi SweetAlert).
- Minggu 5-6: Development Sprint 2 (Fitur Tambahan: Modal Jam Malam, Pengembalian Otomatis).
- Minggu 7: Development Sprint 3 (Integrasi REST API dan optimasi database).
- Minggu 8: Testing, Security Audit (Validasi data NPM), & Deployment ke Laragon.

### 🛠 Instalasi

### 🔐 Akun Default

### ⚠️ Penyelesaian Masalah

### 🗂 Struktur Database

### 🔎 Pengujian

### 📌 Titik Akhir API REST

### 📜 Lisensi

### ✏️ Penulis 
Alyaa Mahiraah Ramadhani
