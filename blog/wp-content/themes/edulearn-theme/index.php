<?php
/**
 * The main template file
 * EduLearn Theme
 */

get_header(); ?>

<main class="container">
    <h1 class="page-title">Artikel & Blog</h1>
    
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
        
        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
            ));
            ?>
        </div>
        
    <?php else : ?>
        <p style="text-align: center; padding: 3rem;">Belum ada artikel. Silakan tambahkan artikel di WordPress Admin.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
