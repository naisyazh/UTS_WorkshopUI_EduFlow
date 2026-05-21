<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<main class="container" style="text-align: center; padding: 5rem 0;">
    <h1 style="font-size: 6rem; margin-bottom: 1rem;">404</h1>
    <h2 style="margin-bottom: 1rem;">Halaman Tidak Ditemukan</h2>
    <p style="margin-bottom: 2rem; color: #666;">Maaf, halaman yang Anda cari tidak ada.</p>
    
    <div style="display: flex; gap: 1rem; justify-content: center;">
        <a href="<?php echo home_url('/'); ?>" class="btn">Kembali ke Blog</a>
        <a href="../index.html" class="btn-outline">Ke Halaman Utama</a>
    </div>
</main>

<?php get_footer(); ?>
