# WordPress Integration Guide - EduLearn Platform

## Step 1: Install WordPress

### A. Download & Setup WordPress
1. Download WordPress dari https://wordpress.org/download/
2. Extract ke folder `blog` di dalam project kamu
3. Struktur folder jadi:
   ```
   project/
   ├── index.html
   ├── style.css
   ├── script.js
   ├── blog/              ← WordPress di sini
   │   ├── wp-admin/
   │   ├── wp-content/
   │   └── wp-config.php
   └── ...
   ```

### B. Setup Database
1. Buka phpMyAdmin (via XAMPP/WAMP/MAMP)
2. Buat database baru: `edulearn_blog`
3. Catat info ini:
   - Database Name: `edulearn_blog`
   - Username: `root` (default XAMPP)
   - Password: `` (kosong untuk XAMPP)
   - Host: `localhost`

### C. Install WordPress
1. Buka browser: `http://localhost/[nama-project]/blog/`
2. Pilih bahasa: English atau Indonesia
3. Klik "Let's go!" / "Ayo!"
4. Isi database info:
   - Database Name: `edulearn_blog`
   - Username: `root`
   - Password: (kosong)
   - Database Host: `localhost`
   - Table Prefix: `wp_` (biarkan default)
5. Klik "Submit" → "Run the installation"
6. Isi Site Information:
   - Site Title: `EduLearn Blog`
   - Username: `admin` (atau terserah)
   - Password: (buat password kuat)
   - Email: email kamu
7. Klik "Install WordPress"

## Step 2: Install Custom Theme

1. Download theme `edulearn-theme` yang sudah saya buatkan
2. Extract ke: `blog/wp-content/themes/edulearn-theme/`
3. Login ke WordPress Admin: `http://localhost/[nama-project]/blog/wp-admin/`
4. Pergi ke: **Appearance → Themes**
5. Activate theme **EduLearn Theme**

## Step 3: Setup Menu & Content

### A. Buat Menu
1. **Appearance → Menus**
2. Buat menu baru: "Main Menu"
3. Tambahkan:
   - Home (Custom Link: `../index.html`)
   - Katalog Kursus (Custom Link: `../katalog-kursus.html`)
   - Blog (Custom Link: `/blog/`)
   - Dashboard (Custom Link: `../dashboard.html`)
4. Assign ke "Primary Menu"
5. Save Menu

### B. Buat Sample Posts
1. **Posts → Add New**
2. Buat 3-5 artikel contoh tentang:
   - Tips belajar programming
   - Review kursus
   - Tutorial singkat
   - Berita teknologi
3. Tambahkan Featured Image untuk setiap post
4. Publish

### C. Setup Permalink
1. **Settings → Permalinks**
2. Pilih: **Post name** (URL jadi lebih bagus)
3. Save Changes

## Step 4: Update HTML Files

File-file HTML sudah saya update dengan link ke WordPress blog.

## Step 5: Testing

1. Buka: `http://localhost/[nama-project]/index.html`
2. Klik menu "Artikel" → harus redirect ke WordPress blog
3. Test navigasi bolak-balik HTML ↔ WordPress
4. Pastikan styling konsisten

## Step 6: Demo untuk Dosen

### Yang perlu ditunjukkan:
1. **HTML/CSS Pages:**
   - Landing page
   - Katalog kursus
   - Detail kursus
   - Keranjang & pembayaran
   - Dashboard user
   - Admin produk/user/transaksi

2. **WordPress Pages:**
   - Blog listing (arsip artikel)
   - Single post (detail artikel)
   - WordPress admin (kelola artikel)

3. **Integration:**
   - Navigasi seamless antara HTML dan WordPress
   - Styling yang konsisten
   - Latest posts di homepage (optional)

## Troubleshooting

### Error: "Error establishing database connection"
- Cek database name, username, password di `wp-config.php`
- Pastikan MySQL/MariaDB running di XAMPP

### Theme tidak muncul
- Cek folder theme ada di: `blog/wp-content/themes/edulearn-theme/`
- Pastikan ada file `style.css` dan `index.php`

### CSS tidak load
- Cek path di theme
- Clear browser cache (Ctrl + F5)

### Link broken antara HTML dan WordPress
- Pastikan relative path benar
- Cek base URL di WordPress: **Settings → General**

## Deployment (untuk Demo Live)

### Option 1: InfinityFree (Gratis)
1. Daftar di https://infinityfree.net/
2. Upload semua file via FTP
3. Import database via phpMyAdmin
4. Update `wp-config.php` dengan database info baru

### Option 2: 000webhost (Gratis)
1. Daftar di https://www.000webhost.com/
2. Upload via File Manager
3. Setup database
4. Update wp-config.php

### Option 3: Netlify (HTML) + WordPress.com (Blog)
1. HTML files → Netlify
2. Blog → WordPress.com free tier
3. Link keduanya

---

## Checklist UAS

- [ ] WordPress installed dan running
- [ ] Custom theme active
- [ ] Minimal 3 artikel published
- [ ] Navigation working (HTML ↔ WordPress)
- [ ] Styling konsisten
- [ ] Admin panel accessible
- [ ] Screenshot semua halaman
- [ ] Logbook filled
- [ ] Laporan completed
- [ ] Demo live deployed (optional tapi recommended)
- [ ] GitHub/Drive link ready

---

**Need help?** Check file `wordpress-integration.php` untuk kode integrasi tambahan.
