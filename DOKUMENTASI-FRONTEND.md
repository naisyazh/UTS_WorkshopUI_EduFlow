# BAB 2.2 - IMPLEMENTASI FRONTEND

## Deskripsi Halaman Platform EduFlow

Platform EduFlow terdiri dari 19 halaman HTML/CSS dan 3 halaman WordPress yang terintegrasi. Berikut adalah penjelasan detail setiap halaman:

---

## 2.2.1 Landing Page (index.html)

**Deskripsi:**
Halaman utama yang menyambut pengunjung dengan hero section yang menarik, menampilkan value proposition platform dan call-to-action untuk mendaftar atau menjelajahi kursus.

**Fitur Utama:**
- Hero section dengan gradient background purple
- Navigation bar sticky yang tetap terlihat saat scroll
- Section "Kursus Populer" menampilkan 3 kursus unggulan
- Section "Mengapa Pilih EduFlow" dengan icon dan deskripsi
- Footer dengan social media links dan copyright

**Teknologi:** HTML5, CSS3 (Flexbox, Grid), JavaScript (smooth scroll)

---

## 2.2.2 Login (login.html)

**Deskripsi:**
Halaman autentikasi untuk pengguna yang sudah terdaftar. Desain minimalis dengan form di tengah layar.

**Fitur Utama:**
- Form login dengan email dan password
- Validasi input required
- Link "Lupa Password"
- Link "Belum punya akun? Daftar di sini"
- Tombol "Masuk" dengan hover effect

**Teknologi:** HTML5, CSS3 (form styling), JavaScript (validation)

---

## 2.2.3 Register (register.html)

**Deskripsi:**
Halaman pendaftaran untuk pengguna baru dengan form yang user-friendly dan validasi input.

**Fitur Utama:**
- Form registrasi lengkap (nama, email, password, confirm password)
- Validasi password match
- Checkbox terms & conditions
- Link "Sudah punya akun? Login di sini"
- Tombol "Daftar" dengan loading state

**Teknologi:** HTML5, CSS3, JavaScript (form validation)

---

## 2.2.4 Katalog Kursus (katalog-kursus.html)

**Deskripsi:**
Halaman yang menampilkan daftar semua kursus yang tersedia dengan fitur filter dan search.

**Fitur Utama:**
- Grid layout 3 kolom untuk course cards
- Sidebar filter berdasarkan kategori, harga, rating
- Search bar untuk mencari kursus
- Sort dropdown (Terbaru, Terpopuler, Harga)
- Pagination untuk navigasi halaman
- Responsive: 2 kolom di tablet, 1 kolom di mobile

**Teknologi:** HTML5, CSS3 (Grid Layout), JavaScript (filter & search)

---

## 2.2.5 Detail Kursus (detail-kursus.html)

**Deskripsi:**
Halaman yang menampilkan informasi lengkap tentang satu kursus termasuk kurikulum, instruktur, dan reviews.

**Fitur Utama:**
- Hero section dengan course thumbnail dan overview
- Tab navigation (Overview, Kurikulum, Instruktur, Review)
- Sidebar dengan CTA "Beli Sekarang" atau "Tambah ke Keranjang"
- List modul dan materi pembelajaran
- Rating dan testimonial dari students
- Related courses section

**Teknologi:** HTML5, CSS3, JavaScript (tabs interaction)

---

## 2.2.6 Keranjang (keranjang.html)

**Deskripsi:**
Halaman yang menampilkan kursus yang telah ditambahkan ke keranjang belanja dengan summary harga.

**Fitur Utama:**
- Table list course di keranjang
- Tombol delete untuk menghapus item
- Input coupon code
- Summary harga (subtotal, diskon, total)
- Tombol "Lanjutkan ke Pembayaran"
- Empty state jika keranjang kosong

**Teknologi:** HTML5, CSS3, JavaScript (cart management, coupon validation)

---

## 2.2.7 Pembayaran (pembayaran.html)

**Deskripsi:**
Halaman checkout dengan form billing dan pilihan metode pembayaran.

**Fitur Utama:**
- Form billing information (nama, email, alamat)
- Pilihan metode pembayaran (Credit Card, Bank Transfer, E-Wallet)
- Order summary sidebar
- Tombol "Bayar Sekarang"
- Payment gateway simulation

**Teknologi:** HTML5, CSS3, JavaScript (payment simulation, form validation)

---

## 2.2.8 History Transaksi (history-transaksi.html)

**Deskripsi:**
Halaman yang menampilkan riwayat semua transaksi pembelian kursus pengguna.

**Fitur Utama:**
- Table list transaksi (tanggal, invoice, kursus, jumlah, status)
- Filter by status (Semua, Berhasil, Pending, Gagal)
- Search by invoice number
- Tombol "Lihat Detail" untuk setiap transaksi
- Tombol "Download Invoice" (PDF export)
- Tombol "Export CSV" untuk export semua data

**Teknologi:** HTML5, CSS3, JavaScript (filter, search, PDF & CSV export)

---

## 2.2.9 Dashboard (dashboard.html)

**Deskripsi:**
Halaman utama setelah user login yang menampilkan overview aktivitas pembelajaran.

**Fitur Utama:**
- Welcome message dengan nama user
- Cards statistics (Kursus Aktif, Kursus Selesai, Sertifikat)
- List "Kursus yang Sedang Dipelajari" dengan progress bar
- Section "Kursus Rekomendasi"
- Quick links ke Profile, Quiz, Sertifikat, History

**Teknologi:** HTML5, CSS3 (Cards, Grid Layout), JavaScript (progress bar)

---

## 2.2.10 Profil (profil.html)

**Deskripsi:**
Halaman untuk melihat dan mengedit informasi profil pengguna.

**Fitur Utama:**
- Avatar upload dengan preview
- Form edit profil (nama, email, phone, bio)
- Section "Ubah Password"
- Tombol "Simpan Perubahan"
- Tab navigation (Profil, Keamanan, Notifikasi)

**Teknologi:** HTML5, CSS3, JavaScript (image upload preview, form validation)

---

## 2.2.11 Quiz (quiz.html)

**Deskripsi:**
Halaman untuk mengerjakan quiz/kuis pembelajaran dengan timer dan scoring.

**Fitur Utama:**
- Timer countdown
- Progress indicator (soal ke-X dari Y)
- Multiple choice questions dengan radio buttons
- Navigation buttons (Previous, Next, Submit)
- Auto-submit saat waktu habis
- Result page dengan score dan feedback

**Teknologi:** HTML5, CSS3, JavaScript (timer, quiz logic, scoring)

---

## 2.2.12 Sertifikat (sertifikat.html)

**Deskripsi:**
Halaman yang menampilkan daftar sertifikat yang telah diperoleh pengguna.

**Fitur Utama:**
- Grid cards sertifikat dengan thumbnail
- Informasi (nama kursus, tanggal selesai, score)
- Tombol "Lihat Sertifikat" (preview modal)
- Tombol "Download PDF"
- Filter by course category
- Empty state jika belum ada sertifikat

**Teknologi:** HTML5, CSS3, JavaScript (modal, PDF generation)

---

## 2.2.13 Arsip Artikel (arsip-artikel.html)

**Deskripsi:**
Halaman yang menampilkan daftar semua artikel blog dari WordPress.

**Fitur Utama:**
- Grid layout 3 kolom untuk article cards
- Featured image, judul, excerpt, tanggal publish
- Sidebar dengan search dan categories
- Pagination
- Link ke detail artikel

**Teknologi:** HTML5, CSS3, WordPress Loop (PHP)

**Note:** Halaman ini juga di-handle oleh WordPress theme `index.php` untuk dynamic content.

---

## 2.2.14 Detail Artikel (detail-artikel.html)

**Deskripsi:**
Halaman yang menampilkan konten lengkap satu artikel blog.

**Fitur Utama:**
- Article title, author, date, category
- Featured image
- Full article content dengan typography yang baik
- Share buttons (Facebook, Twitter, LinkedIn)
- Related articles section
- Sidebar dengan search dan recent posts

**Teknologi:** HTML5, CSS3, WordPress Template (PHP)

**Note:** Halaman ini juga di-handle oleh WordPress theme `single.php` untuk dynamic content.

---

## 2.2.15 Admin Dashboard (admin-dashboard.html)

**Deskripsi:**
Halaman dashboard administrator dengan overview statistik sistem.

**Fitur Utama:**
- Sidebar navigation (Dashboard, Artikel, Produk, Pengguna, Transaksi)
- Cards statistics (Total User, Total Kursus, Total Transaksi, Revenue)
- Chart revenue per bulan
- Table "Transaksi Terbaru"
- Quick actions buttons

**Teknologi:** HTML5, CSS3, JavaScript (Chart.js untuk visualisasi data)

---

## 2.2.16 Admin Kelola Artikel (admin-artikel.html)

**Deskripsi:**
Halaman untuk administrator mengelola artikel (CRUD operations).

**Fitur Utama:**
- Table list semua artikel
- Action buttons (Edit, Delete)
- Tombol "Tambah Artikel Baru"
- Search & filter
- Pagination

**Teknologi:** HTML5, CSS3, JavaScript (CRUD operations)

**Note:** WordPress Admin juga menyediakan interface native untuk manage articles di `/wp-admin/`.

---

## 2.2.17 Admin Kelola Produk/Kursus (admin-produk.html)

**Deskripsi:**
Halaman untuk administrator mengelola kursus yang tersedia.

**Fitur Utama:**
- Table list semua kursus
- Column: Nama Kursus, Kategori, Harga, Status, Actions
- Tombol "Tambah Kursus Baru"
- Modal form untuk add/edit kursus
- Upload thumbnail kursus

**Teknologi:** HTML5, CSS3, JavaScript (CRUD, image upload)

---

## 2.2.18 Admin Kelola Pengguna (admin-pengguna.html)

**Deskripsi:**
Halaman untuk administrator mengelola data pengguna (students).

**Fitur Utama:**
- Table list semua pengguna
- Column: Nama, Email, Tanggal Daftar, Status, Actions
- Filter by role (Student, Instructor, Admin)
- Search by name/email
- Action: Edit, Delete, Suspend

**Teknologi:** HTML5, CSS3, JavaScript (user management)

---

## 2.2.19 Admin Kelola Transaksi (admin-transaksi.html)

**Deskripsi:**
Halaman untuk administrator monitoring dan mengelola semua transaksi.

**Fitur Utama:**
- Table list semua transaksi
- Column: Invoice, User, Kursus, Jumlah, Status, Tanggal, Actions
- Filter by status (Pending, Success, Failed)
- Filter by date range
- Tombol "Export CSV" untuk laporan
- Detail view setiap transaksi

**Teknologi:** HTML5, CSS3, JavaScript (transaction management, CSV export)

---

## 2.2.20 404 Error Page (404.html)

**Deskripsi:**
Halaman error yang ditampilkan ketika URL tidak ditemukan.

**Fitur Utama:**
- Illustrasi 404 yang friendly
- Pesan "Halaman tidak ditemukan"
- Tombol "Kembali ke Beranda"
- Search box untuk mencari konten

**Teknologi:** HTML5, CSS3

---

## Konsistensi Desain

Semua halaman mengikuti design system yang sama:

**Color Palette:**
- Primary: Purple Gradient (#667eea → #764ba2)
- Secondary: White (#ffffff)
- Text: Dark Gray (#333333)
- Accent: Orange (#ff6b6b)

**Typography:**
- Font Family: Poppins (Google Fonts)
- Heading: 600 weight
- Body: 400 weight
- Button: 500 weight

**Components:**
- Border Radius: 10px untuk cards dan buttons
- Box Shadow: rgba(0,0,0,0.1) untuk depth
- Transitions: 0.3s ease-in-out untuk smooth interactions
- Responsive Breakpoints: 768px (tablet), 480px (mobile)

**Spacing System:**
- Base unit: 8px
- Small: 16px
- Medium: 24px
- Large: 32px
- XL: 48px

---

## WordPress Integration

Halaman yang terintegrasi dengan WordPress:

1. **Arsip Artikel** → WordPress `index.php` template
2. **Detail Artikel** → WordPress `single.php` template
3. **Admin Artikel** → WordPress native `/wp-admin/` interface

Navigation seamless:
- Click "Blog" di HTML → Redirect ke `/blog/` (WordPress)
- Click "Home" di WordPress → Redirect ke `../index.html`
- Click "Kursus" di WordPress → Redirect ke `../katalog-kursus.html`

---

## Accessibility Features

- Semantic HTML5 tags (header, nav, main, article, footer)
- Alt text untuk semua images
- ARIA labels untuk interactive elements
- Keyboard navigation support
- Focus indicators untuk form inputs
- Contrast ratio minimal 4.5:1 untuk readability

---

## Performance Optimization

- Minified CSS & JavaScript
- Lazy loading untuk images
- CDN untuk external libraries
- Compressed images (WebP format)
- Browser caching headers
- Async loading untuk non-critical JS
