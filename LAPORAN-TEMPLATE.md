# LAPORAN PROJECT UAS
## Workshop UI - Integrasi WordPress & HTML/CSS

---

## BAB I: PENDAHULUAN

### 1.1 Latar Belakang
EduFlow adalah platform pembelajaran online yang dirancang untuk memudahkan pengguna dalam mengakses kursus digital berkualitas. Project ini merupakan pengembangan dari project UTS yang sebelumnya dibuat menggunakan HTML, CSS, dan JavaScript murni. Untuk memenuhi requirements UAS Workshop UI, project ini diintegrasikan dengan WordPress sebagai Content Management System (CMS) untuk mengelola konten artikel/blog.

### 1.2 Tujuan
1. Mengintegrasikan WordPress dengan website HTML/CSS existing
2. Memanfaatkan CMS untuk pengelolaan konten yang lebih efisien
3. Memahami konsep hybrid web development (Static + Dynamic)
4. Mengimplementasikan best practices dalam web development

### 1.3 Ruang Lingkup
Project ini mencakup:
- **HTML/CSS Pages:** Landing, Katalog Kursus, Detail Kursus, Keranjang, Pembayaran, Dashboard, Admin Panel
- **WordPress Pages:** Blog Listing, Single Post, WordPress Admin
- **Integration:** Navigation seamless antara HTML dan WordPress dengan styling konsisten

---

## BAB II: LANDASAN TEORI

### 2.1 HTML & CSS
HTML (HyperText Markup Language) adalah bahasa markup standar untuk membuat halaman web. CSS (Cascading Style Sheets) digunakan untuk styling dan layout.

### 2.2 WordPress
WordPress adalah Content Management System (CMS) open-source yang paling populer di dunia. WordPress memudahkan pengelolaan konten tanpa perlu coding.

**Keunggulan WordPress:**
- User-friendly admin interface
- Plugin ecosystem yang luas
- Theme customization
- SEO-friendly
- Community support yang besar

### 2.3 PHP
PHP adalah server-side scripting language yang digunakan WordPress. PHP memproses logic di server sebelum mengirim HTML ke browser.

### 2.4 MySQL
MySQL adalah database management system yang digunakan WordPress untuk menyimpan data (posts, users, settings, dll).

### 2.5 Hybrid Web Development
Hybrid approach menggabungkan static pages (HTML/CSS) dengan dynamic pages (WordPress/CMS) untuk mendapatkan keuntungan dari kedua metode:
- Static pages: Fast loading, simple deployment
- Dynamic pages: Easy content management, scalability

---

## BAB III: ANALISIS & PERANCANGAN

### 3.1 Analisis Kebutuhan

#### Functional Requirements:
1. User dapat melihat daftar artikel dari WordPress
2. User dapat membaca detail artikel
3. Admin dapat mengelola artikel via WordPress admin
4. Navigation seamless antara HTML dan WordPress
5. Styling konsisten di semua halaman

#### Non-Functional Requirements:
1. Responsive design (mobile & desktop)
2. Fast loading time
3. SEO-friendly URLs
4. Accessible (WCAG guidelines)
5. Cross-browser compatible

### 3.2 User Persona (dari UTS)

**Nama:** Andy  
**Usia:** 29 tahun  
**Pekerjaan:** Mahasiswa  
**Lokasi:** Tingkat di Kos, Surabaya Timur  
**Tech Literacy:** Cukup Baik  

**Karakteristik:**
- User Friendly: ⭐⭐⭐⭐⭐
- Vibes: ⭐⭐⭐⭐
- Kualitas: ⭐⭐⭐⭐
- Color: ⭐⭐⭐

**Quote:** "Kalau ada yang Cepat, Ngapain Ribet"

**Needs:**
- Platform yang cepat dan mudah digunakan
- Konten berkualitas
- Interface yang menarik
- Akses dari berbagai device

### 3.3 Arsitektur System

```
┌─────────────────────────────────────────┐
│         EduFlow Platform                │
├─────────────────────────────────────────┤
│                                         │
│  ┌──────────────┐    ┌──────────────┐  │
│  │  HTML/CSS    │    │  WordPress   │  │
│  │  Static      │◄──►│  Dynamic     │  │
│  │  Pages       │    │  Blog        │  │
│  └──────────────┘    └──────────────┘  │
│         │                    │          │
│         └────────┬───────────┘          │
│                  │                      │
│         ┌────────▼────────┐             │
│         │   MySQL DB      │             │
│         │   (WordPress)   │             │
│         └─────────────────┘             │
└─────────────────────────────────────────┘
```

### 3.4 Struktur Folder

```
eduflow/
├── index.html              # Landing page
├── katalog-kursus.html     # Course catalog
├── detail-kursus.html      # Course detail
├── keranjang.html          # Shopping cart
├── pembayaran.html         # Payment
├── dashboard.html          # User dashboard
├── admin-*.html            # Admin pages
├── style.css               # Main stylesheet
├── script.js               # Main JavaScript
├── img/                    # Images
└── blog/                   # WordPress installation
    ├── wp-admin/           # WordPress admin
    ├── wp-content/
    │   └── themes/
    │       └── edulearn-theme/  # Custom theme
    │           ├── style.css
    │           ├── functions.php
    │           ├── header.php
    │           ├── footer.php
    │           ├── index.php
    │           ├── single.php
    │           ├── archive.php
    │           ├── search.php
    │           └── 404.php
    └── wp-config.php       # WordPress config
```

### 3.5 Database Design

WordPress menggunakan default tables:
- `wp_posts` - Menyimpan artikel
- `wp_users` - Menyimpan user data
- `wp_postmeta` - Metadata artikel
- `wp_terms` - Categories & tags
- `wp_comments` - Comments

---

## BAB IV: IMPLEMENTASI

### 4.1 Setup Environment

**Tools yang digunakan:**
- XAMPP (Apache + MySQL + PHP)
- VS Code (Code editor)
- Browser (Chrome/Firefox)
- Git (Version control)

**Langkah setup:**
1. Install XAMPP
2. Start Apache & MySQL
3. Download WordPress
4. Extract ke `htdocs/eduflow/blog/`
5. Buat database `edulearn_blog`
6. Install WordPress via browser

### 4.2 WordPress Theme Development

#### 4.2.1 Theme Structure
Custom theme "EduLearn Theme" dibuat dengan file-file:
- `style.css` - Theme stylesheet & metadata
- `functions.php` - Theme functions & hooks
- `header.php` - Header template
- `footer.php` - Footer template
- `index.php` - Blog listing
- `single.php` - Single post
- `archive.php` - Archive pages
- `search.php` - Search results
- `404.php` - Not found page

#### 4.2.2 Theme Features
```php
// functions.php
- Theme support (thumbnails, title-tag, html5)
- Navigation menus
- Widget areas
- Custom excerpt length
- REST API CORS for integration
```

#### 4.2.3 Styling
CSS dirancang untuk match dengan HTML pages:
- Font: Poppins (sama dengan HTML)
- Colors: Purple gradient (#667eea, #764ba2)
- Border radius: 10px
- Shadows: Consistent dengan HTML
- Responsive breakpoints: 768px

### 4.3 Integration

#### 4.3.1 Navigation
HTML navbar diupdate dengan link ke WordPress:
```html
<nav>
  <a href="index.html">Beranda</a>
  <a href="katalog-kursus.html">Kursus</a>
  <a href="blog/">Blog</a>  <!-- Link ke WordPress -->
  <a href="#kontak">Kontak</a>
</nav>
```

WordPress header.php include link kembali ke HTML:
```php
<nav>
  <a href="../index.html">Home</a>
  <a href="../katalog-kursus.html">Kursus</a>
  <a href="<?php echo home_url('/'); ?>">Blog</a>
  <a href="../dashboard.html">Dashboard</a>
</nav>
```

#### 4.3.2 Styling Consistency
- Same font family (Poppins)
- Same color scheme
- Same button styles
- Same card designs
- Same spacing & padding

### 4.4 Content Management

#### 4.4.1 Sample Posts
Dibuat 5 artikel sample:
1. "Tips Belajar Programming untuk Pemula"
2. "Review Kursus UI/UX Design Terbaik 2025"
3. "Cara Memilih Kursus Online yang Tepat"
4. "Tutorial: Membuat Portfolio Website"
5. "Tren Teknologi yang Wajib Dipelajari"

#### 4.4.2 Categories
- Tutorial
- Tips & Tricks
- Review
- News
- Career

#### 4.4.3 Featured Images
Setiap post dilengkapi featured image yang relevan.

---

## BAB V: TESTING

### 5.1 Functional Testing

| No | Test Case | Expected Result | Actual Result | Status |
|----|-----------|----------------|---------------|--------|
| 1 | Klik menu "Blog" dari HTML | Redirect ke WordPress blog | ✓ Berhasil | PASS |
| 2 | Klik "Home" dari WordPress | Redirect ke HTML landing | ✓ Berhasil | PASS |
| 3 | View blog listing | Tampil semua posts | ✓ Berhasil | PASS |
| 4 | Click post title | Open single post | ✓ Berhasil | PASS |
| 5 | WordPress admin login | Access admin panel | ✓ Berhasil | PASS |
| 6 | Create new post | Post published | ✓ Berhasil | PASS |
| 7 | Edit post | Changes saved | ✓ Berhasil | PASS |
| 8 | Delete post | Post deleted | ✓ Berhasil | PASS |
| 9 | Search posts | Show results | ✓ Berhasil | PASS |
| 10 | Pagination | Navigate pages | ✓ Berhasil | PASS |

### 5.2 Responsive Testing

| Device | Screen Size | Status |
|--------|-------------|--------|
| Desktop | 1920x1080 | ✓ PASS |
| Laptop | 1366x768 | ✓ PASS |
| Tablet | 768x1024 | ✓ PASS |
| Mobile | 375x667 | ✓ PASS |

### 5.3 Browser Compatibility

| Browser | Version | Status |
|---------|---------|--------|
| Chrome | Latest | ✓ PASS |
| Firefox | Latest | ✓ PASS |
| Edge | Latest | ✓ PASS |
| Safari | Latest | ✓ PASS |

### 5.4 Performance Testing

- Page Load Time: < 2 seconds
- Time to Interactive: < 3 seconds
- Lighthouse Score: 90+

---

## BAB VI: HASIL & PEMBAHASAN

### 6.1 Hasil Implementasi

Project berhasil diimplementasikan dengan:
- ✓ 11 halaman HTML/CSS (dari UTS)
- ✓ 3 halaman WordPress (blog listing, single post, admin)
- ✓ Integration seamless
- ✓ Consistent styling
- ✓ Responsive design
- ✓ All features working

### 6.2 Kelebihan

1. **Separation of Concerns:** Static pages untuk UI, WordPress untuk content management
2. **Easy Content Management:** Admin bisa update artikel tanpa coding
3. **Scalability:** Mudah menambah fitur baru
4. **Performance:** Static pages load cepat
5. **SEO-Friendly:** WordPress built-in SEO features

### 6.3 Kekurangan

1. **Dual Maintenance:** Perlu maintain HTML dan WordPress
2. **Styling Sync:** Harus ensure consistency manual
3. **Deployment Complexity:** Perlu setup server untuk WordPress
4. **Database Dependency:** WordPress butuh MySQL

### 6.4 Solusi untuk Kekurangan

1. Buat style guide untuk consistency
2. Use CSS variables untuk easy theming
3. Automate deployment dengan scripts
4. Regular backup database

---

## BAB VII: KESIMPULAN & SARAN

### 7.1 Kesimpulan

1. Integrasi WordPress dengan HTML/CSS berhasil dilakukan
2. Hybrid approach memberikan flexibility dan ease of use
3. WordPress sangat powerful untuk content management
4. Styling consistency adalah challenge utama dalam hybrid development
5. Project memenuhi semua requirements UAS Workshop UI

### 7.2 Saran

**Untuk Development:**
1. Gunakan CSS framework (Tailwind/Bootstrap) untuk consistency
2. Implement REST API untuk better integration
3. Add caching untuk improve performance
4. Use version control (Git) dari awal

**Untuk Future Enhancement:**
1. Implement user authentication system
2. Add comment system di blog
3. Integrate payment gateway
4. Add real-time notifications
5. Implement PWA features

---

## LAMPIRAN

### A. Screenshots
[Tambahkan screenshots semua halaman]

### B. Source Code
[Link ke GitHub repository]

### C. Demo Video
[Link ke video demo]

### D. Live Demo
[Link ke live demo jika ada]

### E. References
1. WordPress Documentation: https://wordpress.org/documentation/
2. PHP Manual: https://www.php.net/manual/
3. MDN Web Docs: https://developer.mozilla.org/
4. W3C Standards: https://www.w3.org/

---

**Nama:** [Nama Kamu]  
**NIM:** [NIM Kamu]  
**Tanggal:** [Tanggal Submit]  
**Dosen:** Pak Alifian
