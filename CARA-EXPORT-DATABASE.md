# Cara Export Database WordPress

## Method 1: Via phpMyAdmin (Recommended)

1. Buka Laragon
2. Klik "Database" atau buka browser: http://localhost/phpmyadmin/
3. Login (biasanya username: `root`, password: kosong atau `root`)
4. Klik database `edulearn_blog` di sidebar kiri
5. Klik tab **"Export"** di atas
6. Pilih **"Quick"** export method
7. Format: **SQL**
8. Klik tombol **"Export"**
9. File `edulearn_blog.sql` akan terdownload
10. Pindahkan file ke folder project: `C:\laragon\www\UTS_WorkshopUI_EduFlow\`

## Method 2: Via WP-CLI (Advanced)

Buka Terminal di folder project, jalankan:

```bash
cd blog
wp db export ../edulearn_blog.sql
```

## Method 3: Via WordPress Plugin

1. Install plugin "All-in-One WP Migration" atau "Duplicator"
2. Export dari WordPress admin
3. Download backup file

## Setelah Export

File database akan bernama: `edulearn_blog.sql`

⚠️ **JANGAN PUSH KE GITHUB!** 
Database berisi password dan data sensitif.

Simpan di local saja atau kirim via Google Drive/OneDrive.
