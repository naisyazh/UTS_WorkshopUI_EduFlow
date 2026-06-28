# 📚 EduFlow - Platform Pembelajaran Online

![EduFlow Banner](img/hero.jpg)

Platform pembelajaran online (e-learning) modern yang mengintegrasikan HTML/CSS/JavaScript dengan WordPress CMS untuk pengelolaan konten artikel dan blog.

**Project UAS Workshop Desain UI**  
Fakultas Vokasi - Universitas Airlangga  
Tahun Akademik 2024/2025

---

## 👤 Author

**Nama:** Naisya Gina Azzahra  
**NIM:** 434241068  
**Prodi:** D4 Teknologi Rekayasa Internet  
**Dosen:** Pak Alifian

---

## 📖 Deskripsi Project

EduFlow adalah platform e-learning yang dirancang untuk memudahkan pengguna dalam mengakses berbagai kursus digital berkualitas. Platform ini menggabungkan kekuatan static pages (HTML/CSS/JS) untuk performa optimal dengan dynamic content management (WordPress) untuk kemudahan pengelolaan konten.

### 🎯 Tujuan

1. Menyediakan platform pembelajaran online yang modern dan user-friendly
2. Mengintegrasikan WordPress sebagai CMS untuk pengelolaan artikel
3. Memberikan pengalaman belajar yang terstruktur dan interaktif
4. Memudahkan administrator dalam mengelola konten tanpa coding

---

## ✨ Features

### For Students (Users):

- ✅ **Browse Kursus** - Lihat katalog kursus dengan filter dan search
- ✅ **Detail Kursus** - Informasi lengkap kursus dengan kurikulum
- ✅ **Shopping Cart** - Keranjang belanja dengan coupon code
- ✅ **Secure Checkout** - Proses pembayaran yang aman
- ✅ **Dashboard** - Pantau progress pembelajaran
- ✅ **Interactive Quiz** - Quiz dengan timer dan scoring
- ✅ **Digital Certificate** - Sertifikat digital setelah selesai kursus
- ✅ **Transaction History** - Riwayat transaksi dengan export PDF/CSV
- ✅ **Blog Articles** - Baca artikel edukatif dari WordPress

### For Admin:

- ✅ **Dashboard Admin** - Overview statistik sistem
- ✅ **Manage Courses** - CRUD operations untuk kursus
- ✅ **Manage Users** - Kelola data pengguna
- ✅ **Manage Transactions** - Monitor dan kelola transaksi
- ✅ **Manage Articles** - Kelola artikel via WordPress admin
- ✅ **Export Reports** - Export data ke CSV

---

## 🛠️ Tech Stack

### Frontend:
- **HTML5** - Semantic markup
- **CSS3** - Flexbox, Grid, Animations
- **JavaScript** - Vanilla JS untuk interaktivity
- **Responsive Design** - Mobile-first approach

### Backend/CMS:
- **WordPress 6.4** - Content Management System
- **PHP 8.1** - Server-side scripting
- **MySQL** - Database untuk WordPress

### Tools:
- **Figma** - Wireframe & UI Design
- **Draw.io** - Use Case Diagram, Activity Diagram
- **VS Code** - Code editor
- **Laragon** - Local development environment
- **Git** - Version control

---

## 📁 Project Structure

```
UTS_WorkshopUI_EduFlow/
├── index.html                 # Landing page
├── login.html                 # Login page
├── register.html              # Registration page
├── katalog-kursus.html        # Course catalog
├── detail-kursus.html         # Course detail
├── keranjang.html             # Shopping cart
├── pembayaran.html            # Checkout page
├── history-transaksi.html     # Transaction history
├── dashboard.html             # User dashboard
├── profil.html                # User profile
├── quiz.html                  # Interactive quiz
├── sertifikat.html            # Certificates page
├── arsip-artikel.html         # Blog archive
├── detail-artikel.html        # Article detail
├── admin-dashboard.html       # Admin dashboard
├── admin-artikel.html         # Admin manage articles
├── admin-produk.html          # Admin manage courses
├── admin-pengguna.html        # Admin manage users
├── admin-transaksi.html       # Admin manage transactions
├── 404.html                   # Error page
├── style.css                  # Main stylesheet
├── script.js                  # Main JavaScript
├── img/                       # Images folder
├── blog/                      # WordPress installation
│   └── wp-content/
│       └── themes/
│           └── edulearn-theme/   # Custom WordPress theme
│               ├── style.css
│               ├── functions.php
│               ├── header.php
│               ├── footer.php
│               ├── index.php
│               ├── single.php
│               ├── archive.php
│               ├── search.php
│               └── 404.php
├── wordpress-theme/           # Theme source (for reference)
├── LOGBOOK-TEMPLATE.md        # Development logbook
├── LAPORAN-TEMPLATE.md        # Project report template
├── DOKUMENTASI-FRONTEND.md    # Frontend documentation
├── DOKUMENTASI-TESTING.md     # Testing documentation
├── PROJECT-CHECKLIST.md       # Project checklist
├── QUICK-CHECKLIST.md         # Quick reference
└── WORDPRESS-SETUP-GUIDE.md   # WordPress installation guide
```

---

## 🚀 Installation & Setup

### Prerequisites:

- Laragon/XAMPP/WAMP (Apache + MySQL + PHP)
- WordPress 6.4+
- Modern web browser
- Text editor (VS Code recommended)

### Step 1: Clone Repository

```bash
git clone https://github.com/naisyagina/UTS_WorkshopUI_EduFlow.git
cd UTS_WorkshopUI_EduFlow
```

### Step 2: Setup WordPress

1. Start Apache and MySQL di Laragon
2. Buat database baru `edulearn_blog`
3. Import SQL file `setup-wordpress-db.sql` (optional)
4. Navigate to `http://localhost/UTS_WorkshopUI_EduFlow/blog/`
5. Follow WordPress installation wizard

**WordPress Credentials (default):**
- Username: `admin`
- Password: `admin123`
- Database: `edulearn_blog`

### Step 3: Activate Custom Theme

1. Login ke WordPress admin: `/blog/wp-admin/`
2. Go to Appearance → Themes
3. Activate "EduLearn Theme"

### Step 4: Import Sample Content (optional)

1. Download sample content dari `/blog/wp-content/sample-content.xml`
2. Go to Tools → Import
3. Install WordPress Importer
4. Import XML file

### Step 5: Access the Platform

- **Landing Page:** `http://localhost/UTS_WorkshopUI_EduFlow/`
- **WordPress Blog:** `http://localhost/UTS_WorkshopUI_EduFlow/blog/`
- **WordPress Admin:** `http://localhost/UTS_WorkshopUI_EduFlow/blog/wp-admin/`

---

## 📱 Responsive Breakpoints

- **Desktop:** 1920px+ (Full layout)
- **Laptop:** 1366px (Optimized layout)
- **Tablet:** 768px (2 columns, hamburger menu)
- **Mobile:** 375px (1 column, touch-optimized)

---

## 🎨 Design System

### Color Palette:

- **Primary:** Purple Gradient (#667eea → #764ba2)
- **Secondary:** White (#ffffff)
- **Text:** Dark Gray (#333333)
- **Accent:** Orange (#ff6b6b)
- **Success:** Green (#51cf66)
- **Error:** Red (#ff6b6b)

### Typography:

- **Font Family:** Poppins (Google Fonts)
- **Headings:** 600 weight
- **Body:** 400 weight
- **Buttons:** 500 weight

### Components:

- Border Radius: 10px
- Box Shadow: rgba(0,0,0,0.1)
- Transitions: 0.3s ease-in-out

---

## 🧪 Testing

Platform telah melalui comprehensive testing:

- ✅ **Functional Testing:** 30/30 tests passed
- ✅ **Responsive Testing:** 12/12 devices tested
- ✅ **Browser Compatibility:** Chrome, Firefox, Edge, Safari
- ✅ **Navigation Testing:** HTML ↔ WordPress seamless
- ✅ **Performance:** Load time < 2s, Lighthouse 90+
- ✅ **Security:** Input validation, XSS prevention

Lihat detail di [DOKUMENTASI-TESTING.md](DOKUMENTASI-TESTING.md)

---

## 📄 Documentation

- **[LOGBOOK](LOGBOOK-TEMPLATE.md)** - Development timeline & progress
- **[LAPORAN](LAPORAN-TEMPLATE.md)** - Comprehensive project report
- **[FRONTEND DOCS](DOKUMENTASI-FRONTEND.md)** - Frontend implementation details
- **[TESTING DOCS](DOKUMENTASI-TESTING.md)** - Testing results & methodology
- **[WORDPRESS GUIDE](WORDPRESS-SETUP-GUIDE.md)** - WordPress setup instructions
- **[PROJECT CHECKLIST](PROJECT-CHECKLIST.md)** - Complete project checklist

---

## 📊 Project Status

**Current Status:** ✅ **COMPLETE & READY FOR SUBMISSION**

```
Overall Progress: ████████████████████ 100%

✅ HTML/CSS Pages:          19/19 (100%)
✅ WordPress Integration:   100%
✅ Testing:                 100%
✅ Documentation:           100%
✅ Responsive Design:       100%
```

---

## 🎓 Use Case Diagram

Platform mendukung 3 actor utama:

**Guest:**
- Lihat landing page
- Browse katalog kursus
- Baca artikel blog
- Registrasi akun

**User (Student):**
- Login ke sistem
- Beli kursus
- Ikuti quiz
- Download sertifikat
- View transaction history

**Administrator:**
- Kelola artikel (via WordPress)
- Kelola kursus
- Kelola pengguna
- Kelola transaksi

---

## 🌐 Browser Support

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

---

## ⚡ Performance

- **Page Load:** < 2 seconds
- **Time to Interactive:** < 3 seconds
- **Lighthouse Score:** 90+
- **Mobile Performance:** 88+

---

## 🔒 Security

- Input validation & sanitization
- XSS prevention
- SQL injection protection (WordPress built-in)
- CSRF protection for forms
- Password hashing (production ready)

---

## 🚀 Future Enhancements

- [ ] Implement actual payment gateway (Midtrans/Stripe)
- [ ] Add real-time chat support
- [ ] Video streaming untuk course content
- [ ] Progressive Web App (PWA) features
- [ ] Multi-language support (i18n)
- [ ] Advanced analytics dashboard
- [ ] Email notifications
- [ ] Social login (Google, Facebook)

---

## 📝 License

This project is created for educational purposes as part of Workshop UI course assignment at Universitas Airlangga.

---

## 🙏 Acknowledgments

- **Pak Alifian** - Workshop UI lecturer
- **Fakultas Vokasi UNAIR** - Educational institution
- **WordPress Community** - CMS platform
- **Google Fonts** - Poppins font family

---

## 📧 Contact

**Naisya Gina Azzahra**
- Email: naisya.gina.azzahra-2022@vokasi.unair.ac.id
- GitHub: [@naisyagina](https://github.com/naisyagina)

---

## 📅 Project Timeline

- **Week 1 (24-30 Nov 2024):** Planning & Setup
- **Week 2 (1-7 Des 2024):** Theme Development
- **Week 3 (8-14 Des 2024):** Content & Integration
- **Week 4 (15-21 Des 2024):** Testing & Documentation
- **Week 5 (22-28 Des 2024):** Finalisasi & Submission

---

**⭐ If you find this project useful, please give it a star!**

**Last Updated:** 28 Desember 2024