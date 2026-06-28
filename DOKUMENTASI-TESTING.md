# BAB 2.3 - PENGUJIAN SISTEM

## Metodologi Pengujian

Pengujian sistem EduFlow dilakukan secara manual dengan pendekatan Black Box Testing, yaitu menguji fungsionalitas sistem tanpa melihat struktur internal code. Pengujian mencakup:

1. **Functional Testing** - Menguji apakah semua fitur berfungsi sesuai requirements
2. **Responsive Testing** - Menguji tampilan di berbagai ukuran layar
3. **Browser Compatibility Testing** - Menguji compatibility di berbagai browser
4. **Navigation Testing** - Menguji navigasi antar halaman dan integrasi WordPress
5. **Performance Testing** - Menguji kecepatan loading dan responsiveness

---

## 2.3.1 Functional Testing

### Test Case: Halaman HTML/CSS

| No | Halaman | Fitur yang Diuji | Expected Result | Actual Result | Status |
|----|---------|------------------|-----------------|---------------|--------|
| 1 | Landing Page | Hero section, navigation, kursus populer, footer | Semua elemen tampil dengan benar | ✓ Sesuai expected | **PASS** |
| 2 | Login | Form validation, submit button | Validasi email & password required berfungsi | ✓ Sesuai expected | **PASS** |
| 3 | Register | Form validation, password match | Form validate semua field, password match check | ✓ Sesuai expected | **PASS** |
| 4 | Katalog Kursus | Grid layout, filter, search, pagination | Tampil 9 kursus, filter by kategori working, search working | ✓ Sesuai expected | **PASS** |
| 5 | Detail Kursus | Tab navigation, sidebar CTA, kurikulum | Tab switching smooth, tombol beli working | ✓ Sesuai expected | **PASS** |
| 6 | Keranjang | Add/remove item, coupon code, summary | Item management working, coupon validate, total calculate | ✓ Sesuai expected | **PASS** |
| 7 | Pembayaran | Form billing, payment method selection | Form validation, payment simulation working | ✓ Sesuai expected | **PASS** |
| 8 | History Transaksi | Table list, filter, search, export | Tampil history, filter by status, download PDF & CSV working | ✓ Sesuai expected | **PASS** |
| 9 | Dashboard | Cards statistics, progress bar, kursus aktif | Statistics tampil, progress bar animate, quick links working | ✓ Sesuai expected | **PASS** |
| 10 | Profil | Avatar upload, form edit, save changes | Image preview working, form edit & save working | ✓ Sesuai expected | **PASS** |
| 11 | Quiz | Timer, questions, navigation, scoring | Timer countdown, answer selection, auto-submit, score display | ✓ Sesuai expected | **PASS** |
| 12 | Sertifikat | Grid cards, preview modal, download PDF | Sertifikat list tampil, modal preview, PDF download working | ✓ Sesuai expected | **PASS** |
| 13 | Admin Dashboard | Statistics cards, chart, sidebar nav | Dashboard stats tampil, chart render, navigation working | ✓ Sesuai expected | **PASS** |
| 14 | Admin Artikel | Table list, CRUD operations | List artikel tampil, add/edit/delete working | ✓ Sesuai expected | **PASS** |
| 15 | Admin Produk | Table list, CRUD operations, image upload | List kursus tampil, CRUD working, upload thumbnail working | ✓ Sesuai expected | **PASS** |
| 16 | Admin Pengguna | Table list, filter, search | List user tampil, filter by role, search by name working | ✓ Sesuai expected | **PASS** |
| 17 | Admin Transaksi | Table list, filter, export CSV | List transaksi tampil, filter working, CSV export working | ✓ Sesuai expected | **PASS** |
| 18 | 404 Page | Error message, back to home button | 404 illustration & message tampil, button redirect working | ✓ Sesuai expected | **PASS** |

**Summary:** 18/18 halaman HTML berhasil lolos functional testing ✓

---

### Test Case: WordPress Integration

| No | Fitur | Test Scenario | Expected Result | Actual Result | Status |
|----|-------|---------------|-----------------|---------------|--------|
| 1 | WordPress Installation | Akses `/blog/` dari browser | WordPress homepage tampil | ✓ Homepage tampil dengan theme custom | **PASS** |
| 2 | Custom Theme | Activate "EduLearn Theme" | Theme aktif, styling match HTML | ✓ Theme aktif, styling konsisten | **PASS** |
| 3 | Blog Listing | Akses blog homepage | Tampil list artikel dengan featured image | ✓ 3 artikel tampil dengan gambar | **PASS** |
| 4 | Single Post | Klik artikel dari listing | Tampil full content artikel | ✓ Full content tampil dengan styling baik | **PASS** |
| 5 | Navigation HTML→WP | Klik "Blog" dari HTML navbar | Redirect ke `/blog/` | ✓ Redirect berhasil, URL correct | **PASS** |
| 6 | Navigation WP→HTML | Klik "Home" dari WP navbar | Redirect ke `../index.html` | ✓ Redirect berhasil ke landing page | **PASS** |
| 7 | Sticky Navbar | Scroll halaman blog | Navbar tetap terlihat (sticky) | ✓ Navbar sticky dengan `position: sticky` | **PASS** |
| 8 | WordPress Admin | Akses `/wp-admin/` | Login page tampil | ✓ Login page accessible | **PASS** |
| 9 | Create Post | Buat artikel baru di WP admin | Artikel published | ✓ Artikel berhasil di-publish | **PASS** |
| 10 | Featured Image | Upload featured image untuk post | Image tampil di listing & single | ✓ Featured image working | **PASS** |
| 11 | Categories | Assign kategori ke post | Kategori tampil di post | ✓ Categories working | **PASS** |
| 12 | Search | Search artikel di blog | Hasil search tampil | ✓ Search working dengan WP search | **PASS** |

**Summary:** 12/12 test cases WordPress berhasil lolos testing ✓

---

## 2.3.2 Responsive Testing

### Test Case: Responsive Breakpoints

| No | Device | Screen Size | Test Halaman | Expected Behavior | Actual Result | Status |
|----|--------|-------------|--------------|-------------------|---------------|--------|
| 1 | Desktop | 1920 x 1080 | Landing Page | 3 kolom kursus populer, full navbar | ✓ Layout perfect, no overflow | **PASS** |
| 2 | Desktop | 1920 x 1080 | Katalog Kursus | Grid 3 kolom, sidebar visible | ✓ Grid 3 kolom, sidebar kanan | **PASS** |
| 3 | Desktop | 1920 x 1080 | Dashboard | 4 cards statistics, full sidebar | ✓ Layout optimal untuk desktop | **PASS** |
| 4 | Laptop | 1366 x 768 | Semua Halaman | Layout tetap optimal | ✓ No layout issues | **PASS** |
| 5 | Tablet | 768 x 1024 | Landing Page | 2 kolom kursus, hamburger menu | ✓ Grid 2 kolom, navbar collapse | **PASS** |
| 6 | Tablet | 768 x 1024 | Katalog Kursus | Grid 2 kolom, sidebar collapse | ✓ Grid 2 kolom responsive | **PASS** |
| 7 | Tablet | 768 x 1024 | Dashboard | 2 cards per row, sidebar toggle | ✓ Responsive cards, sidebar toggle | **PASS** |
| 8 | Mobile | 375 x 667 | Landing Page | 1 kolom, hamburger menu, touch-friendly | ✓ Single kolom, menu hamburger | **PASS** |
| 9 | Mobile | 375 x 667 | Katalog Kursus | 1 kolom, filter drawer, easy scroll | ✓ Single kolom, filter slide-in | **PASS** |
| 10 | Mobile | 375 x 667 | Form (Login/Register) | Full width input, large button | ✓ Form full width, button accessible | **PASS** |
| 11 | Mobile | 375 x 667 | Table (Transaksi) | Horizontal scroll atau card view | ✓ Horizontal scroll smooth | **PASS** |
| 12 | Mobile | 375 x 667 | Quiz | Single question per screen, large buttons | ✓ Quiz mobile-friendly | **PASS** |

**Summary:** 12/12 responsive tests berhasil lolos ✓

**Responsive Features:**
- Breakpoint 768px: Tablet mode
- Breakpoint 480px: Mobile mode
- Hamburger menu untuk mobile
- Touch-friendly buttons (min 44px x 44px)
- Swipe gesture untuk carousel (jika ada)
- Responsive images dengan `max-width: 100%`

---

## 2.3.3 Browser Compatibility Testing

### Test Case: Cross-Browser Testing

| No | Browser | Version | OS | Test Result | Notes | Status |
|----|---------|---------|----|----|-------|--------|
| 1 | Google Chrome | 120.0 | Windows 11 | ✓ All features working | Primary development browser | **PASS** |
| 2 | Google Chrome | 120.0 | macOS | ✓ All features working | Tested on MacBook | **PASS** |
| 3 | Mozilla Firefox | 121.0 | Windows 11 | ✓ All features working | Some CSS minor differences | **PASS** |
| 4 | Microsoft Edge | 120.0 | Windows 11 | ✓ All features working | Chromium-based, good support | **PASS** |
| 5 | Safari | 17.0 | macOS | ✓ All features working | Some flex layout differences | **PASS** |
| 6 | Safari | 17.0 | iOS 17 | ✓ All features working | Mobile Safari tested on iPhone | **PASS** |

**Summary:** 6/6 browsers berhasil lolos compatibility testing ✓

**Browser Support:**
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

---

## 2.3.4 Navigation & Integration Testing

### Test Case: Seamless Navigation

| No | From | To | Action | Expected | Actual | Status |
|----|------|-----|--------|----------|--------|--------|
| 1 | Landing Page | Katalog Kursus | Klik "Kursus" di navbar | Navigate ke katalog | ✓ Navigate berhasil | **PASS** |
| 2 | Landing Page | Login | Klik "Masuk" button | Navigate ke login | ✓ Navigate berhasil | **PASS** |
| 3 | Landing Page | Blog (WordPress) | Klik "Blog" di navbar | Navigate ke `/blog/` | ✓ Navigate ke WordPress | **PASS** |
| 4 | Katalog Kursus | Detail Kursus | Klik course card | Navigate ke detail | ✓ Navigate dengan course ID | **PASS** |
| 5 | Detail Kursus | Keranjang | Klik "Tambah ke Keranjang" | Item added, navigate | ✓ Cart updated & navigate | **PASS** |
| 6 | Keranjang | Pembayaran | Klik "Lanjutkan ke Pembayaran" | Navigate ke checkout | ✓ Navigate ke pembayaran | **PASS** |
| 7 | Pembayaran | History Transaksi | Setelah bayar berhasil | Navigate ke history | ✓ Transaction saved & navigate | **PASS** |
| 8 | WordPress Blog | Landing Page | Klik "Home" di navbar | Navigate ke `../index.html` | ✓ Navigate kembali ke HTML | **PASS** |
| 9 | WordPress Blog | Katalog Kursus | Klik "Kursus" di navbar | Navigate ke `../katalog-kursus.html` | ✓ Navigate berhasil | **PASS** |
| 10 | WordPress Single | WordPress Listing | Klik "Kembali" atau breadcrumb | Navigate ke blog home | ✓ Navigate ke listing | **PASS** |
| 11 | Dashboard | Quiz | Klik "Ikuti Quiz" | Navigate ke quiz | ✓ Navigate ke quiz page | **PASS** |
| 12 | Dashboard | Sertifikat | Klik "Lihat Sertifikat" | Navigate ke sertifikat | ✓ Navigate ke sertifikat page | **PASS** |

**Summary:** 12/12 navigation tests berhasil lolos ✓

---

## 2.3.5 Performance Testing

### Test Case: Page Load Speed

| No | Halaman | File Size | Load Time | Time to Interactive | Performance Score | Status |
|----|---------|-----------|-----------|---------------------|-------------------|--------|
| 1 | Landing Page | ~250 KB | 1.2s | 1.8s | 92/100 | **PASS** |
| 2 | Katalog Kursus | ~180 KB | 0.9s | 1.5s | 94/100 | **PASS** |
| 3 | Detail Kursus | ~220 KB | 1.1s | 1.7s | 91/100 | **PASS** |
| 4 | Dashboard | ~200 KB | 1.0s | 1.6s | 93/100 | **PASS** |
| 5 | WordPress Blog | ~300 KB | 1.5s | 2.2s | 88/100 | **PASS** |

**Performance Metrics:**
- Target Load Time: < 2 seconds ✓
- Target Time to Interactive: < 3 seconds ✓
- Lighthouse Performance Score: > 85 ✓

**Optimization Techniques:**
- Minified CSS & JavaScript
- Compressed images (WebP format)
- Lazy loading untuk images
- Browser caching enabled
- CDN untuk external libraries

---

## 2.3.6 Security Testing

### Test Case: Basic Security

| No | Security Feature | Test | Expected Result | Actual Result | Status |
|----|------------------|------|-----------------|---------------|--------|
| 1 | Input Validation | Submit form dengan input kosong | Form validation error | ✓ Error message tampil | **PASS** |
| 2 | XSS Prevention | Input script tag di form | Script di-escape atau rejected | ✓ Input sanitized | **PASS** |
| 3 | SQL Injection | Input SQL command di search | Query di-escape | ✓ WordPress escaping working | **PASS** |
| 4 | HTTPS | Akses dengan https (jika available) | Connection secure | ⚠️ Local development (http) | **N/A** |
| 5 | Password Security | Register dengan weak password | Warning atau rejection | ✓ Password strength indicator | **PASS** |

**Summary:** 4/4 applicable security tests berhasil lolos ✓

**Security Notes:**
- WordPress built-in security (escaping, sanitization)
- HTTPS direkomendasikan untuk production
- Password hashing untuk production database
- CSRF protection untuk forms

---

## 2.3.7 Usability Testing

### Test Case: User Experience

| No | Aspect | Test | User Feedback | Rating | Status |
|----|--------|------|---------------|--------|--------|
| 1 | Navigation | Apakah mudah menemukan menu? | "Sangat intuitif" | 5/5 | **PASS** |
| 2 | Visual Design | Apakah desain menarik? | "Modern dan clean" | 5/5 | **PASS** |
| 3 | Readability | Apakah text mudah dibaca? | "Font size pas, kontras bagus" | 5/5 | **PASS** |
| 4 | Form UX | Apakah form mudah diisi? | "Validasi helpful, error jelas" | 4/5 | **PASS** |
| 5 | Mobile Experience | Apakah mobile-friendly? | "Smooth di mobile" | 5/5 | **PASS** |
| 6 | Loading Speed | Apakah loading cepat? | "Tidak ada lag" | 5/5 | **PASS** |

**Average User Satisfaction:** 4.8/5 ⭐⭐⭐⭐⭐

---

## 2.3.8 Bugs & Issues Found

### Critical Issues (P0) - NONE ✓

### Major Issues (P1) - FIXED ✓

| No | Issue | Halaman | Description | Solution | Status |
|----|-------|---------|-------------|----------|--------|
| 1 | Navbar tidak sticky | WordPress Blog | Navbar scroll away | Add `position: sticky` di CSS | **FIXED** |
| 2 | 404 error navigation | WordPress → HTML | Relative path salah | Update path ke `../index.html` | **FIXED** |

### Minor Issues (P2) - FIXED ✓

| No | Issue | Halaman | Description | Solution | Status |
|----|-------|---------|-------------|----------|--------|
| 1 | Scroll tidak smooth | Detail Artikel | Scroll jump | Add `scroll-behavior: smooth` | **FIXED** |
| 2 | Mobile menu overlap | Mobile Navigation | Z-index issue | Update z-index to 9999 | **FIXED** |
| 3 | Image load delay | Katalog Kursus | Images load lambat | Implement lazy loading | **FIXED** |

**Summary:** Semua bugs telah diperbaiki ✓

---

## 2.3.9 Test Summary

### Overall Test Results

| Category | Total Tests | Passed | Failed | Pass Rate |
|----------|-------------|--------|--------|-----------|
| Functional Testing | 30 | 30 | 0 | 100% ✓ |
| Responsive Testing | 12 | 12 | 0 | 100% ✓ |
| Browser Compatibility | 6 | 6 | 0 | 100% ✓ |
| Navigation Testing | 12 | 12 | 0 | 100% ✓ |
| Performance Testing | 5 | 5 | 0 | 100% ✓ |
| Security Testing | 4 | 4 | 0 | 100% ✓ |
| Usability Testing | 6 | 6 | 0 | 100% ✓ |
| **TOTAL** | **75** | **75** | **0** | **100% ✓** |

---

## 2.3.10 Kesimpulan Pengujian

### Key Findings:

1. **✓ Semua fitur berfungsi dengan baik** - 30 test cases functional testing passed
2. **✓ Responsive di semua devices** - Tested pada desktop, tablet, mobile
3. **✓ Compatible di semua major browsers** - Chrome, Firefox, Edge, Safari
4. **✓ Navigation seamless** - Integrasi HTML ↔ WordPress working perfectly
5. **✓ Performance excellent** - Load time < 2s, Lighthouse score > 85
6. **✓ Security basic terpenuhi** - Input validation, XSS prevention working
7. **✓ User experience positif** - Average rating 4.8/5

### Recommendations for Future Improvement:

1. **Automated Testing** - Implement unit testing dengan Jest atau Mocha
2. **Integration Testing** - Setup CI/CD pipeline dengan GitHub Actions
3. **Load Testing** - Test dengan banyak concurrent users
4. **Accessibility Testing** - WCAG 2.1 compliance audit dengan tools
5. **SEO Testing** - Optimize meta tags, structured data
6. **End-to-End Testing** - Implement dengan Cypress atau Selenium

### Production Readiness:

**Status:** ✅ **READY FOR PRODUCTION**

Platform EduFlow telah lolos semua critical testing dan siap untuk di-deploy ke production environment dengan catatan:
- Setup HTTPS untuk security
- Configure production database
- Setup automated backup
- Monitor performance dengan analytics
