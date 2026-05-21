<?php
/**
 * The template for displaying search results
 */

get_header(); ?>

<main class="container">
    <header class="page-header" style="margin-bottom: 2rem;">
        <h1 class="page-title">
            Hasil Pencarian: "<?php echo get_search_query(); ?>"
        </h1>
        <p style="color: #666;">
            <?php
            global $wp_query;
            echo 'Ditemukan ' . $wp_query->found_posts . ' artikel';
            ?>
        </p>
    </header>
    
    <?php if (have_posts()) : ?>
        <div class="blog-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="article-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="date">📅 <?php echo get_the_date(); ?></span>
                            <span class="author">👤 <?php the_author(); ?></span>
                        </div>
                        
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="article-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
            ));
            ?>
        </div>
        
    <?php else : ?>
        <div style="text-align: center; padding: 3rem;">
            <p style="margin-bottom: 2rem;">Tidak ada hasil untuk pencarian "<?php echo get_search_query(); ?>"</p>
            <p style="margin-bottom: 1rem;">Coba kata kunci lain atau:</p>
            <a href="<?php echo home_url('/'); ?>" class="btn">Lihat Semua Artikel</a>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
