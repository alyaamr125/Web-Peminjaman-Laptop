# LAPORAN KEMAJUAN - APLIKASI PEMINJAMAN LAPTOP
ALYAA MAHIRAAH | II RKS A | 2423101997

### 📂 Deskripsi
Website peminjaman laptop dirancang untuk mendukung produktivitas dan kedisiplinan Taruna di lingkungan sekolah kedinasan, dengan menyediakan sistem pencatatan yang transparan dan efisien. Melalui antarmuka yang modern bertema identitas instansi, Taruna dapat dengan mudah melakukan pengajuan peminjaman menggunakan identitas NPM, memilih kategori laptop sesuai kebutuhan tugas atau laboratorium, hingga mengajukan penambahan jam malam melalui fitur yang praktis. Sistem ini juga dilengkapi dengan notifikasi konfirmasi instan serta tabel riwayat yang informatif untuk memantau status peminjaman secara real-time, guna memastikan seluruh fasilitas pendidikan terkelola dengan baik demi mendukung semangat belajar cerdas dan jiwa Pancasila.

### 🖇 Kisah Pengguna
| PENGENAL | Kisah Pengguna | Prioritas |
| :--- | :--- | :--- |
| **AS-01** | Sebagai Taruna, saya ingin menginput data NPM agar sistem mengenali identitas peminjam. | Tinggi |
| **AS-02** | Sebagai Taruna, saya ingin memilih kategori laptop agar sesuai dengan kebutuhan tugas/lab. | Tinggi |
| **AS-03** | Sebagai Taruna, saya ingin menerima notifikasi "Berhasil" agar yakin data sudah tersimpan. | Tinggi |
| **AS-04** | Sebagai Taruna, saya ingin melihat status "Dipinjam" atau "Kembali" untuk memantau tanggungan. | Sedang |
| **AS-05** | Sebagai Taruna, saya ingin mengajukan jam malam agar bisa menggunakan laptop lebih lama untuk kegiatan seperti akademik maupun organisasi. | Sedang |
| **AS-06** | Sebagai Admin, saya ingin melihat semua riwayat peminjaman dalam satu tabel yang rapi. | Tinggi |

### 📝 SRS (Spesifikasi Persyaratan Perangkat Lunak)
### Persyaratan Fungsional
| PENGENAL | Fitur | Deskripsi | Status |
| :--- | :--- | :--- | :--- |
| **FR-01** | Form Pinjam | Input Nama, NPM, dan Keterangan laptop secara dinamis. | ✅ Selesai |
| **FR-02** | Riwayat | Tabel yang menampilkan Tgl Pinjam, Tgl Kembali, dan Status. | ✅ Selesai |
| **FR-03** | Jam Malam | Modal popup khusus untuk mengatur rentang waktu jam malam. | ✅ Selesai |
| **FR-04** | Pengembalian | Fitur satu klik untuk mengubah status laptop menjadi "Sudah Kembali". | ✅ Selesai |
| **FR-05** | Notifikasi | Pop-up SweetAlert untuk konfirmasi sukses transaksi. | ✅ Selesai |
| **FR-06** | REST API | Endpoint untuk integrasi data dengan aplikasi pihak ketiga. | Progress |

### Persyaratan Non-Fungsional
| PENGENAL | Persyaratan | Deskripsi |
| :--- | :--- | :--- |
| **NFR-01** | Keamanan | Validasi input data Taruna dan perlindungan CSRF pada Laravel. |
| **NFR-02** | Kegunaan | Desain responsif dengan skema warna Merah, Biru, dan Putih. |
| **NFR-03** | Keandalan | Sinkronisasi waktu otomatis menggunakan timezone Asia/Jakarta. |
| **NFR-04** | Interoperabilitas | Dukungan REST API untuk pertukaran data format JSON. |
  
### 📊 Diagram UML
Diagram Alur Penggunaan Website
<img width="747" height="615" alt="Screenshot 2026-02-18 225834" src="https://github.com/user-attachments/assets/86693732-f867-4906-ac35-89ffb357b2b4" />


### 🖥 Maket/Tampilan Website
1. Tampilan menu untuk mengisi identitas Taruna (Nama, NPM, dan Keterangan)
   <img width="1920" height="971" alt="Screenshot 2026-02-01 194455" src="https://github.com/user-attachments/assets/0f8cfc1f-0f82-4732-8688-7820086b2279" />

2. Tampilan riwayat peminjaman laptop yang berisi nama, NPM, tanggal pinjam dan kembali, serta aksi untuk fitur pengembalian dan penambahan jam malam
    <img width="1920" height="968" alt="Screenshot 2026-02-01 194643" src="https://github.com/user-attachments/assets/ec006d65-5a98-494b-b045-9b48699cc926" />

3. Tampilan tab jika ingin mengajukan penambahan jam malam dalam rentang waktu tertentu
   <img width="1920" height="969" alt="Screenshot 2026-02-01 194654" src="https://github.com/user-attachments/assets/2800a645-6ecb-4b86-ae5f-5dbd8838ee54" />

4. Tampilan notifikasi berhasil dipinjam dan kembali
    <img width="1919" height="961" alt="Screenshot 2026-02-05 133839" src="https://github.com/user-attachments/assets/4ce58362-5d74-4ecd-81b5-e1137dd82dac" />
    <img width="1919" height="962" alt="Screenshot 2026-02-05 134233" src="https://github.com/user-attachments/assets/e669b601-4599-41c3-9863-6aafda97a1c9" />

    
### 🔄 SDLC (Siklus Hidup Pengembangan Perangkat Lunak)

| Fase | Aktivitas | Keluaran |
| :--- | :--- | :--- |
| **1. Perencanaan** | Pengumpulan syarat (Nama, NPM, Keterangan) | PRD, Cerita Pengguna |
| **2. Analisis** | Spesifikasi sistem dan skema database | Daftar Fitur, Dokumen SRS |
| **3. Desain** | Desain UI merah-biru dan ERD Database | UML, ERD, Maket UI |
| **4. Pengembangan** | Coding Laravel | Kode Sumber |
| **5. Pengujian** | Uji coba form dan notifikasi SweetAlert | Laporan Bug, Kasus Uji |

### ⏱️ Garis Waktu Proyek (8 Minggu)
- Minggu 1: Planning & Analysis (Definisi aturan peminjaman dan jam malam).
- Minggu 2: Design (ERD Database, Desain UI warna merah-biru-putih).
- Minggu 3-4: Development Sprint 1 (Fitur Utama: Form Pinjam, Riwayat, Notifikasi SweetAlert).
- Minggu 5-6: Development Sprint 2 (Fitur Tambahan: Modal Jam Malam, Pengembalian Otomatis).
- Minggu 7: Development Sprint 3 (Integrasi REST API dan optimasi database).
- Minggu 8: Testing, Security Audit (Validasi data NPM), & Deployment ke Laragon.

### 🛠 Instalasi


### ⚠️ Penyelesaian Masalah
| Mistake | Solusi |
| :--- | :--- |
| `SQLSTATE: no such table` | Jalankan `php artisan migrate` |
| `Connection refused` | Pastikan MySQL di Laragon/XAMPP sudah aktif |
| `Class not found` | Jalankan `composer dump-autoload` |
| `Internal Server Error` | Cek file `.env` dan pastikan database sudah terhubung |

### 🗂 Struktur Database
- **peminjamans** (atau **loans**):
  - `id`: Primary Key
  - `nama`: Nama Taruna peminjam
  - `npm`: Nomor Pokok Mahasiswa
  - `keterangan`: Kategori laptop (Normal, Lab, dll)
  - `tgl_pinjam`: Waktu mulai peminjaman
  - `tgl_kembali`: Waktu pengembalian (nullable)
  - `jam_malam`: Rentang waktu jam malam (format: HH:mm - HH:mm)
  - `status`: Status saat ini (Dipinjam / Sudah Kembali)

### 🔎 Pengujian
Jalankan semua tes:
`php artisan serve`

### 📌 REST API





### 📜 Lisensi
    Lisensi Apache
                           Versi 2.0, Januari 2004
                        http://www.apache.org/licenses/

### ✏️ Penulis 
Alyaa Mahiraah Ramadhani
