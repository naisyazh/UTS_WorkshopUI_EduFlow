# 📚 Instruksi Instalasi & Testing - EduFlow Platform

**Project UAS Workshop Desain UI**  
**Mahasiswa:** Naisya Gina Azzahra (434241068)  
**Dosen:** Pak Alifian

---

## 📦 File yang Diserahkan

### 1. GitHub Repository
**URL:** https://github.com/naisyazh/UTS_WorkshopUI_EduFlow.git

**Isi Repository:**
- 19 halaman HTML/CSS (Landing, Login, Register, Katalog, Dashboard, dll)
- WordPress theme custom (folder `wordpress-theme/`)
- Dokumentasi lengkap (README, Logbook, Testing, Frontend docs)
- .gitignore (untuk keamanan)

### 2. Database ZIP File
**File:** `EduFlow-Database.zip` (0.36 MB)

**Isi ZIP:**
- `edulearn_blog.sql` - Database WordPress (3.3 MB uncompressed)
- `DATABASE-README.md` - Panduan import database
- `CARA-EXPORT-DATABASE.md` - Referensi export

---

## 🚀 Cara Install & Run Project

### Step 1: Clone Repository

```bash
git clone https://github.com/naisyazh/UTS_WorkshopUI_EduFlow.git
cd UTS_WorkshopUI_EduFlow
```

### Step 2: Setup Web Server

**Menggunakan Laragon (Recommended):**
1. Install Laragon: https://laragon.org/download/
2. Copy folder project ke: `C:\laragon\www\`
3. Start Apache & MySQL di Laragon
4. Akses: `http://localhost/UTS_WorkshopUI_EduFlow/`

**Menggunakan XAMPP:**
1. Copy folder project ke: `C:\xampp\htdocs\`
2. Start Apache & MySQL
3. Akses: `http://localhost/UTS_WorkshopUI_EduFlow/`

### Step 3: Import Database

**Via phpMyAdmin:**
1. Buka: `http://localhost/phpmyadmin/`
2. Login (username: `root`, password: kosong atau `root`)
3. Buat database baru: `edulearn_blog`
4. Klik database tersebut
5. Tab "Import" → Choose File → Pilih `edulearn_blog.sql`
6. Klik "Import" → Tunggu hingga selesai

**Via Command Line:**
```bash
mysql -u root edulearn_blog < edulearn_blog.sql
```

### Step 4: Konfigurasi WordPress

Edit file `blog/wp-config.php` (jika perlu):

```php
define( 'DB_NAME', 'edulearn_blog' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );  // Kosongkan untuk Laragon/XAMPP default
define( 'DB_HOST', 'localhost' );
```

### Step 5: Akses Project

**Landing Page (HTML):**  
http://localhost/UTS_WorkshopUI_EduFlow/

**WordPress Blog:**  
http://localhost/UTS_WorkshopUI_EduFlow/blog/

**WordPress Admin:**  
http://localhost/UTS_WorkshopUI_EduFlow/blog/wp-admin/  
- Username: `admin`  
- Password: `admin123`

---

## ✅ Testing Checklist untuk Dosen

### 1. Frontend HTML (19 Halaman)

| No | Halaman | URL | Test |
|----|---------|-----|------|
| 1 | Landing Page | `/index.html` | Hero, navbar, kursus populer |
| 2 | Login | `/login.html` | Form login |
| 3 | Register | `/register.html` | Form registrasi |
| 4 | Katalog Kursus | `/katalog-kursus.html` | Grid kursus, filter, search |
| 5 | Detail Kursus | `/detail-kursus.html` | Tab, kurikulum, CTA |
| 6 | Keranjang | `/keranjang.html` | Cart, coupon, summary |
| 7 | Pembayaran | `/pembayaran.html` | Form billing, payment |
| 8 | History Transaksi | `/history-transaksi.html` | Table, filter, export |
| 9 | Dashboard | `/dashboard.html` | Stats, progress |
| 10 | Profil | `/profil.html` | Avatar, edit profile |
| 11 | Quiz | `/quiz.html` | Timer, questions, scoring |
| 12 | Sertifikat | `/sertifikat.html` | Grid sertifikat, download |
| 13 | Admin Dashboard | `/admin-dashboard.html` | Stats, chart |
| 14 | Admin Artikel | `/admin-artikel.html` | CRUD artikel |
| 15 | Admin Produk | `/admin-produk.html` | CRUD kursus |
| 16 | Admin Pengguna | `/admin-pengguna.html` | User management |
| 17 | Admin Transaksi | `/admin-transaksi.html` | Transaction list |
| 18 | Arsip Artikel | `/arsip-artikel.html` | Blog listing |
| 19 | 404 Page | `/404.html` | Error page |

### 2. WordPress Integration

**Test Blog:**
1. Akses `/blog/` → Harus tampil 3 artikel
2. Klik artikel → Harus buka detail artikel
3. Cek styling → Harus konsisten dengan HTML pages (purple gradient, Poppins font)
4. Test navigation → Klik "Home" harus kembali ke landing page

**Test WordPress Admin:**
1. Login `/blog/wp-admin/` (admin/admin123)
2. Posts → All Posts → Harus ada 3 artikel
3. Appearance → Themes → "EduLearn Theme" harus active
4. Try create new post → Publish → Harus muncul di blog

### 3. Responsive Design

Test di berbagai ukuran layar:
- Desktop (1920px) ✓
- Laptop (1366px) ✓
- Tablet (768px) ✓
- Mobile (375px) ✓

### 4. Browser Compatibility

Test di browser:
- Google Chrome ✓
- Mozilla Firefox ✓
- Microsoft Edge ✓

---

## 📄 Dokumentasi

Semua dokumentasi ada di repository GitHub:

1. **README.md** - Overview project lengkap
2. **LOGBOOK-TEMPLATE.md** - Timeline development 5 minggu
3. **DOKUMENTASI-FRONTEND.md** - Detail implementasi 19 halaman
4. **DOKUMENTASI-TESTING.md** - 75 test cases (100% pass)
5. **LAPORAN-TEMPLATE.md** - Template laporan UAS
6. **PROJECT-CHECKLIST.md** - Checklist requirements
7. **WORDPRESS-SETUP-GUIDE.md** - Panduan setup WordPress
8. **DATABASE-README.md** - Panduan database

---

## 🎯 Fitur Utama yang Dicapai

### Frontend (HTML/CSS/JS)
✅ 19 halaman responsive  
✅ Design konsisten (Purple gradient, Poppins font)  
✅ Interactive elements (tabs, modals, timer)  
✅ Form validation  
✅ Shopping cart system  
✅ Export PDF & CSV  

### WordPress Integration
✅ Custom theme "EduLearn Theme"  
✅ 3 artikel published  
✅ Navigation seamless HTML ↔ WordPress  
✅ Sticky navbar  
✅ Categories & tags  

### Testing & Quality
✅ 75 test cases passed (100%)  
✅ Browser compatibility tested  
✅ Responsive design verified  
✅ Performance optimized (load < 2s)  

---

## 🆘 Troubleshooting

### Error: "Database connection error"
**Solusi:** 
- Pastikan MySQL running
- Database `edulearn_blog` sudah di-import
- Cek `blog/wp-config.php` credentials

### Error: "404 Not Found" saat akses blog
**Solusi:**
- Pastikan folder `blog/` ada
- Cek file `.htaccess` di folder `blog/`
- Restart Apache

### Artikel tidak muncul di blog
**Solusi:**
- Login wp-admin
- Posts → All Posts → Pastikan status "Published"
- Database mungkin belum ter-import dengan benar

### Styling WordPress tidak sama dengan HTML
**Solusi:**
- Pastikan theme "EduLearn Theme" aktif
- Clear browser cache (Ctrl+F5)
- Cek file `blog/wp-content/themes/edulearn-theme/style.css`

---

## 📊 Project Statistics

- **Total Files:** 19 HTML + WordPress theme + Database
- **Lines of Code:** ~5000+ lines (HTML/CSS/JS)
- **Database Size:** 3.3 MB (compressed: 0.36 MB)
- **Documentation Pages:** 8 files
- **Test Cases:** 75 (100% pass rate)
- **Development Time:** 5 weeks (24 Nov - 28 Des 2024)

---

## 📞 Contact

Jika ada pertanyaan atau masalah saat testing:

**Naisya Gina Azzahra**  
NIM: 434241068  
Prodi: D4 Teknologi Rekayasa Internet  
Email: naisya.gina.azzahra-2022@vokasi.unair.ac.id  
GitHub: [@naisyazh](https://github.com/naisyazh)

---

## 🙏 Terima Kasih

Terima kasih Pak Alifian atas bimbingannya selama Workshop UI.  
Project ini adalah hasil pembelajaran dan implementasi materi yang diajarkan.

**Semoga berkenan! 🙏**

---

**Last Updated:** 28 Desember 2024  
**Status:** Ready for Submission ✅
