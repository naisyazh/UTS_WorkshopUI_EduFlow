# LOGBOOK PROJECT UAS
## Workshop UI - Integrasi WordPress & HTML/CSS

**Nama:** Naisya Gina Azzahra  
**NIM:** 434241068  
**Kelas:** D4 Teknologi Rekayasa Internet  
**Dosen:** Pak Alifian  
**Project:** EduFlow - Platform Pembelajaran Online

---

## Week 1: Planning & Setup (24-30 November 2024)

### Aktivitas:
- [x] Review brief UTS dan requirements UAS
- [x] Analisis project existing (HTML/CSS)
- [x] Planning integrasi WordPress
- [x] Setup environment Laragon
- [x] Install WordPress di folder `/blog/`
- [x] Buat database `edulearn_blog`

### Progress:
- WordPress berhasil diinstall di `localhost/UTS_WorkshopUI_EduFlow/blog/`
- Database `edulearn_blog` created successfully
- WordPress admin accessible di `/wp-admin/`
- Environment development siap digunakan

### Kendala:
- Sempat error database connection saat first install
- Perlu adjust wp-config.php untuk local environment

### Solusi:
- Update database credentials di wp-config.php
- Set DB_HOST ke 'localhost'
- Pastikan MySQL service running di Laragon

### Screenshot:
- [x] WordPress installation success
- [x] WordPress admin dashboard accessible

---

## Week 2: Theme Development (1-7 Desember 2024)

### Aktivitas:
- [x] Buat custom WordPress theme "EduLearn Theme"
- [x] Design header & footer matching HTML pages
- [x] Styling blog listing page (index.php)
- [x] Styling single post page (single.php)
- [x] Tambah archive.php, search.php, 404.php
- [x] Test responsive design semua template
- [x] Setup theme functions (thumbnails, menus, widgets)

### Progress:
- Custom theme "EduLearn Theme" successfully created di `/wordpress-theme/`
- Header & footer styling 100% match dengan HTML pages (purple gradient, Poppins font)
- Navigation seamless antara HTML ↔ WordPress
- Responsive breakpoint 768px working perfectly
- Theme support untuk featured images, HTML5, title-tag

### Kendala:
- Styling navbar sempat tidak konsisten antara HTML dan WordPress
- Featured image tidak muncul di listing page

### Solusi:
- Copy paste exact CSS dari style.css HTML ke theme style.css
- Tambahkan `add_theme_support('post-thumbnails')` di functions.php
- Update template tags untuk featured image dengan fallback

### Screenshot:
- [x] Theme activated di WordPress admin
- [x] Blog listing page dengan styling custom
- [x] Single post page responsive
- [x] Mobile view (375px) tested

---

## Week 3: Content & Integration (8-14 Desember 2024)

### Aktivitas:
- [x] Buat sample posts (3 artikel edukatif)
- [x] Upload featured images untuk artikel
- [x] Setup categories & tags
- [x] Update navigation HTML → WordPress (link menu "Blog")
- [x] Update navigation WordPress → HTML (link back to home, kursus, dashboard)
- [x] Test integration HTML ↔ WordPress
- [x] Fix sticky navbar behavior di WordPress pages

### Progress:
- 3 artikel berkualitas published:
  1. "Tips Belajar Efektif di Platform Online"
  2. "Panduan Memilih Kursus yang Tepat"
  3. "Membangun Karir di Bidang Teknologi"
- Featured images uploaded dan displaying correctly
- Navigation 100% seamless: klik "Blog" dari HTML → WordPress, klik "Home/Kursus" dari WordPress → kembali ke HTML
- Categories: Tutorial, Tips & Tricks, Career
- Sticky navbar working dengan `position: sticky` di kedua environment

### Kendala:
- Navigation dari WordPress ke HTML sempat 404 error
- Sticky navbar tidak berfungsi di WordPress pages
- Scroll behavior artikel tidak smooth

### Solusi:
- Update relative path di header.php: `../index.html`, `../katalog-kursus.html`
- Copy CSS sticky navbar dari HTML ke WordPress theme
- Tambahkan `scroll-behavior: smooth` di CSS

### Screenshot:
- [x] 3 Published posts dengan featured images
- [x] Navigation HTML ↔ WordPress working
- [x] Categories & tags setup di WordPress admin

---

## Week 4: Testing & Documentation (15-21 Desember 2024)

### Aktivitas:
- [x] Testing semua 19 halaman HTML
- [x] Testing WordPress theme (blog listing, single post, admin)
- [x] Fix bugs yang ditemukan
- [x] Browser compatibility testing (Chrome, Firefox, Edge)
- [x] Responsive testing (desktop, tablet, mobile)
- [x] Performance optimization
- [x] Buat dokumentasi lengkap
- [x] Prepare laporan UAS

### Progress:
- Testing functional: 19/19 halaman HTML working ✓
- Testing WordPress: Blog listing, single post, admin panel working ✓
- Browser tested: Chrome ✓, Firefox ✓, Edge ✓
- Responsive tested: 1920px ✓, 1366px ✓, 768px ✓, 375px ✓
- Performance: Page load < 2 detik
- No major bugs found
- Documentation completed (Use Case Diagram, Wireframe, Activity Diagram, Sitemap)

### Kendala:
- Beberapa bug minor di tampilan mobile
- Performance issue di halaman dengan banyak gambar
- CSS conflict antara HTML dan WordPress

### Solusi:
- Fix mobile layout dengan media queries
- Implement lazy loading untuk images
- Isolate WordPress CSS dengan specific selectors
- Optimize image size (compress to WebP format)

### Screenshot:
- [x] All 19 pages functional
- [x] WordPress integration working
- [x] Mobile responsive tested
- [x] Documentation complete

---

## Week 5: Finalisasi & Submission (22-28 Desember 2024)

### Aktivitas:
- [x] Final testing seluruh sistem
- [x] Code cleanup & commenting
- [x] Finalisasi dokumentasi (Laporan, Logbook)
- [x] Buat README.md yang comprehensive
- [x] Setup .gitignore untuk WordPress files
- [x] Push ke GitHub repository
- [x] Prepare demo presentation
- [x] Submit project

### Progress:
- Final testing: All features working 100%
- Code cleanup: Remove console.logs, add comments
- Documentation: Laporan 43 halaman completed
- GitHub repository: All files pushed successfully
- Project structure organized & clean
- Ready for submission & responsi

### Kendala:
- Git ignore WordPress wp-config.php dan database files
- File size terlalu besar untuk GitHub (blog folder)
- Conflict merge saat push

### Solusi:
- Tambahkan `.gitignore` untuk exclude wp-config.php, wp-content/uploads/
- Compress large files atau exclude blog folder dari git
- Resolve conflict dengan git merge strategy
- Push only essential WordPress files (theme folder only)

### Screenshot:
- [x] Final project structure
- [x] GitHub repository updated
- [x] Documentation completed

---

## Checklist Requirements

### HTML/CSS Pages (dari UTS):
- [x] Landing Page
- [x] Katalog Kursus
- [x] Detail Kursus
- [x] Keranjang
- [x] Pembayaran
- [x] History Transaksi
- [x] Dashboard
- [x] Admin Produk
- [x] Admin Pengguna
- [x] Admin Transaksi
- [x] Login/Register

### WordPress Pages (UAS):
- [x] Blog Listing (arsip artikel)
- [x] Single Post (detail artikel)
- [x] WordPress Admin (kelola artikel)

### Integration:
- [x] Navigation HTML → WordPress
- [x] Navigation WordPress → HTML
- [x] Consistent styling
- [x] Responsive design

### Documentation:
- [x] Logbook
- [x] Laporan
- [x] Setup guide
- [x] Screenshots

### Deployment:
- [ ] GitHub repository
- [ ] Live demo (optional)
- [ ] Video demo

---

## Notes & Reflections

### What Went Well:
- WordPress integration berjalan smooth tanpa major issues
- Styling consistency terjaga antara HTML dan WordPress pages
- Navigation seamless memberikan user experience yang baik
- Custom theme development lebih mudah dari yang dibayangkan
- Responsive design working perfect di semua devices
- Team work dengan dosen dan teman-teman sangat membantu

### What Could Be Improved:
- Bisa lebih banyak artikel (saat ini 3, ideal 5-10)
- Performance optimization bisa lebih baik (image compression)
- Git workflow bisa lebih terorganisir dari awal
- Code documentation bisa lebih detail
- Testing bisa lebih comprehensive (automated testing)

### Lessons Learned:
- WordPress adalah CMS yang powerful dan flexible
- Hybrid approach (static + dynamic) sangat efektif untuk project seperti ini
- CSS consistency penting untuk branding yang kuat
- Git version control essential untuk project management
- Planning yang baik di awal menghemat waktu development
- Testing berkala lebih baik daripada testing di akhir
- Documentation sama pentingnya dengan coding

---

## Resources Used

- WordPress Documentation: https://wordpress.org/documentation/
- WordPress Theme Handbook: https://developer.wordpress.org/themes/
- PHP Manual: https://www.php.net/manual/
- MDN Web Docs: https://developer.mozilla.org/
- W3Schools: https://www.w3schools.com/
- Google Fonts (Poppins): https://fonts.google.com/
- Figma (untuk wireframe): https://www.figma.com/
- Draw.io (untuk diagram): https://app.diagrams.net/

---

## Contact & Links

- **GitHub:** https://github.com/naisyagina/UTS_WorkshopUI_EduFlow
- **Live Demo:** http://localhost/UTS_WorkshopUI_EduFlow/ (local)
- **Email:** naisya.gina.azzahra-2022@vokasi.unair.ac.id
- **Phone:** -
