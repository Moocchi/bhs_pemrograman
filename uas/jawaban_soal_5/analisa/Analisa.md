# Analisi Soal Studi Kasus Data Perpustakaan

Proyek ini bertujuan untuk mengembangkan sistem backend untuk perpustakaan yang akan mendukung operasional manajemen data perpustakaan. Sistem ini akan mencakup fitur-fitur utama seperti pengelolaan data buku, anggota perpustakaan, peminjaman, dan pengembalian buku. Dengan sistem backend yang handal dan efisien, perpustakaan dapat mengelola data dan proses bisnis perpustakaan dengan lebih baik, memastikan informasi yang akurat dan terkini tersedia bagi administrator perpustakaan.

# Analisis 5W 1H

**What**

sistem manajemen perpustakaan ini bertujuan untuk mengelola dan menata buku - buku yang ada di perpustakaan

Fitur nya berupa :  pencatatan buku dan laporan peminjaman buku

**Why**

Mengurangi waktu dan usaha yang diperlukan untuk mengelola data secara manual,Mengurangi kesalahan manusia dalam pencatatan dan Mengurangi kesalahan manusia dalam pencatatan dan pelacakan data.

**Where**

Sistem akan digunakan di dalam perpustakaan dan data akan disimpan di dalam database

**Who**

Orang yang mengatur akan berupa Pustakawan, administrator perpustakaan, dan pengunjung yang ingin meminjam buku

**How**

Sistem akan dikembangkan menggunakan
framework lumen dan php

# Analisis SWOT

**Strengths (Kekuatan)**

- Peningkatan Efisiensi: Sistem terotomasi akan mengurangi beban kerja manual.

- Akurasi Data: Mengurangi kesalahan dalam pencatatan dan pelacakan data.
Kemudahan Akses: Sistem online memungkinkan akses dari berbagai lokasi.

**Weaknesses (Kelemahan)**

- Biaya Implementasi: Pengembangan dan pemeliharaan sistem membutuhkan biaya yang signifikan.

- Kebutuhan Pelatihan: Staf perlu dilatih untuk menggunakan sistem dengan efektif.

- Ketergantungan pada Teknologi: Ketergantungan pada sistem teknologi dapat menjadi masalah jika terjadi gangguan teknis.
**Opportunities (Peluang)**

- Pengembangan Layanan Online: Memungkinkan anggota untuk mengakses perpustakaan dari rumah, meningkatkan kepuasan pengguna.

- Pengumpulan Data: Data yang dikumpulkan dapat digunakan untuk meningkatkan layanan dan program perpustakaan.

**Threats (Ancaman)**

- Masalah Keamanan Data: Ancaman keamanan data yang dapat menyebabkan kebocoran informasi sensitif.

- Kegagalan Sistem: Risiko kegagalan teknis yang dapat mengganggu operasional perpustakaan.

# Analisis Fishbone

Dalam kasus ini dibuat diagram Analysis Fishbone untuk proyek pengembangan Sistem Perpustakaan 

## Masalah Utama

Kinerja Sistem Backend Perpustakaan

## Kategori Penyebab

**Manusia (People)**

- Pelatihan Staf: Kurangnya pelatihan bagi staf untuk menggunakan sistem baru.

**Proses (Processes)**

- Desain Sistem: Proses desain sistem yang tidak mencakup semua kebutuhan pengguna.

**Teknologi (Technology)**

- Kompatibilitas Sistem: Masalah kompatibilitas antara sistem baru dan perangkat keras/ perangkat lunak yang ada.

- Keamanan Data: Risiko keamanan data yang mungkin tidak sepenuhnya teratasi.

**Material (Materials)**

- Kebutuhan Sistem: Ketersediaan perangkat keras dan perangkat lunak yang memadai.

**Lingkungan (Environment)**

- Kondisi Infrastruktur: Infrastruktur TI yang mungkin tidak mendukung kebutuhan sistem baru.

# Bussiness Requirment
| Produk | Keterangan |
| --------| :-----------: |
| Jenis Layanan | Layanan CRUD Data Perpustakaan|
| Definisi |  Layanan crud ini adalah untuk Mempermudah Pustakawan  untuk mendata Buku di perpustakaan, misalkan ada perubahan Harga atau Lokasi bisa diupdate lewat CRUD ini |
| Abstrak (Narasi)  | Layanan sistem CRUD ini dirancang untuk mempermudah Pustakaawan dalam mendata buku melalui sistem CRUD ini. Pustakawan dapat dengan mudah menambahkan data buku baru, menghapus data buku yang sudah tidak tersedia, serta memperbarui informasi buku yang ada, seperti perubahan status pinjaman atau penambahan edisi baru. Sistem ini memberikan fleksibilitas dan efisiensi dalam mengelola data buku, sehingga proses aktivitas perpustakaan dapat selalu memiliki data yang terkini dan akurat.
