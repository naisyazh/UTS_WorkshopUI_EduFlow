# Database WordPress - EduFlow

## 📦 File Database

**Nama File:** `edulearn_blog.sql`  
**Ukuran:** ~3.3 MB  
**Database:** edulearn_blog  
**Export Date:** 28 Desember 2024

---

## 📥 Cara Import Database (Untuk Dosen/Penguji)

### Method 1: Via phpMyAdmin

1. Buka phpMyAdmin: `http://localhost/phpmyadmin/`
2. Buat database baru bernama `edulearn_blog`
3. Klik database `edulearn_blog`
4. Klik tab **"Import"**
5. Klik **"Choose File"** → Pilih `edulearn_blog.sql`
6. Scroll ke bawah, klik **"Import"**
7. Tunggu hingga selesai (✓ Import has been successfully finished)

### Method 2: Via Command Line

```bash
mysql -u root -p edulearn_blog < edulearn_blog.sql
```

### Method 3: Via Laragon Terminal

1. Buka Laragon
2. Klik kanan Laragon icon → Terminal
3. Jalankan:
```bash
mysql -u root edulearn_blog < edulearn_blog.sql
```

---

## ⚙️ Konfigurasi WordPress

Setelah import database, edit file `blog/wp-config.php`:

```php
define( 'DB_NAME', 'edulearn_blog' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );  // Kosongkan jika pakai Laragon default
define( 'DB_HOST', 'localhost' );
```

---

## 📊 Isi Database

Database ini berisi:
- ✅ WordPress core tables
- ✅ 3 artikel blog (published posts)
- ✅ Custom theme "EduLearn Theme" settings
- ✅ WordPress admin user
- ✅ Categories & tags
- ✅ Media uploads metadata

---

## 👤 WordPress Admin Credentials

**URL Admin:** `http://localhost/UTS_WorkshopUI_EduFlow/blog/wp-admin/`

**Default Credentials:**
- Username: `admin`
- Password: `admin123`

⚠️ **CATATAN:** Ganti password setelah login pertama kali!

---

## 🔒 Keamanan

⚠️ **PENTING:**
- File database (`edulearn_blog.sql`) **TIDAK boleh di-push ke GitHub**
- File sudah di-exclude di `.gitignore`
- Hanya simpan di local atau kirim via Google Drive/OneDrive
- Database berisi password dan data sensitif

---

## 🆘 Troubleshooting

### Error: "Database connection error"
**Solusi:** 
- Pastikan MySQL sudah running di Laragon
- Cek `wp-config.php` apakah DB_NAME, DB_USER, DB_PASSWORD sudah benar

### Error: "Error establishing database connection"
**Solusi:**
- Database belum di-import
- Nama database salah (harus `edulearn_blog`)

### Error: "Table doesn't exist"
**Solusi:**
- Import ulang database
- Pastikan import selesai 100%

### Artikel tidak muncul
**Solusi:**
- Login ke wp-admin
- Cek Posts → All Posts
- Pastikan status "Published"

---

## 📞 Contact

Jika ada masalah saat import database, hubungi:

**Naisya Gina Azzahra**  
NIM: 434241068  
Email: naisya.gina.azzahra-2022@vokasi.unair.ac.id

---

**Last Updated:** 28 Desember 2024
