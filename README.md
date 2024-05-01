# Tugas Praktikum 4 DPBO

## Janji

Saya Ahmad Taufiq Hidayat dengan NIM 2202074 mengerjakan TP 4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Data Diri

- 2202074
- Ahmad Taufiq Hidayat
- Ilmu Komputer C1'22
- Universitas Pendidikan Indonesia

## Tabel

1. Members
    - id: Primary key yang merupakan identifier unik untuk setiap anggota.
    - name: Nama lengkap anggota.
    - email: Alamat email anggota.
    - phone: Nomor telepon anggota.
    - id_level: Kunci asing yang menghubungkan anggota dengan level keanggotaan yang dimiliki.
    - id_branch: Kunci asing yang menghubungkan anggota dengan cabang tempat mereka terdaftar.

2. Level
    - id: Primary key yang merupakan identifier unik untuk setiap level keanggotaan.
    - level: Nama level keanggotaan.
    - benefits: Manfaat atau keuntungan yang dimiliki oleh anggota pada level tertentu.

3. Branch
    - id: Primary key yang merupakan identifier unik untuk setiap cabang.
    - branch_name: Nama cabang.
    - address: Alamat cabang.

## Penjelasan

Kode program yang dibuat merupakan implementasi MVC (Model-View-Controller) menggunakan PHP, dengan SQL sebagai database pendukung. Program ini memungkinkan untuk menjalankan operasi CRUD (Create, Read, Update, Delete) dan relasi antar tabel. 

## Dokumentasi

<video controls src="record.mp4" title="Record"></video>