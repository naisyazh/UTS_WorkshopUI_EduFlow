# EduFlow - Platform Pembelajaran Online

Project UAS Workshop UI - Integrasi HTML/CSS + WordPress (CMS)

## Tech Stack
- HTML, CSS, JavaScript (static pages)
- WordPress (CMS untuk blog/artikel)
- PHP + MySQL

## Struktur Project

```
UTS_WorkshopUI_EduFlow/
├── index.html              # Landing page
├── katalog-kursus.html     # Katalog kursus
├── detail-kursus.html      # Detail kursus
├── keranjang.html          # Keranjang belanja
├── pembayaran.html         # Pembayaran
├── history-transaksi.html  # Riwayat transaksi
├── dashboard.html          # Dashboard user
├── profil.html             # Profil user
├── sertifikat.html         # Sertifikat
├── quiz.html               # Quiz
├── arsip-artikel.html      # Arsip artikel (HTML)
├── detail-artikel.html     # Detail artikel (HTML)
├── admin-artikel.html      # Admin artikel
├── admin-produk.html       # Admin produk
├── admin-pengguna.html     # Admin pengguna
├── admin-transaksi.html    # Admin transaksi
├── login.html              # Login
├── register.html           # Register
├── style.css               # Main stylesheet
├── script.js               # Main JavaScript
├── blog/                   # WordPress (CMS)
│   └── wp-content/
│       └── themes/
│           └── edulearn-theme/  # Custom WordPress theme
└── wordpress-theme/        # Source theme files
```

## Cara Menjalankan

### HTML/CSS Pages
Buka langsung di browser atau gunakan live server.

### WordPress (Blog)
1. Install Laragon/XAMPP
2. Jalankan Apache & MySQL
3. Import database `edulearn_blog`
4. Buka `localhost/UTS_WorkshopUI_EduFlow/blog/`

## Halaman

### HTML/CSS (13 halaman)
- Landing Page, Katalog Kursus, Detail Kursus
- Keranjang, Pembayaran, History Transaksi
- Dashboard, Profil, Sertifikat, Quiz
- Admin: Artikel, Produk, Pengguna, Transaksi

### WordPress/CMS (3 halaman)
- Blog listing (arsip artikel)
- Single post (detail artikel)
- WordPress Admin (kelola konten)
