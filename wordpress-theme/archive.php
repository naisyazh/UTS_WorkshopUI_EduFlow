<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<main class="container">
    <header class="page-header" style="margin-bottom: 2rem;">
        <h1 class="page-title">
            <?php
            if (is_category()) {
                single_cat_title('Kategori: ');
            } elseif (is_tag()) {
                single_tag_title('Tag: ');
            } elseif (is_author()) {
                echo 'Artikel oleh: ' . get_the_author();
            } elseif (is_date()) {
                echo 'Arsip: ' . get_the_date('F Y');
            } else {
                echo 'Arsip';
            }
            ?>
        </h1>
        <?php if (category_description() || tag_description()) : ?>
            <div class="archive-description" style="color: #666; margin-top: 0.5rem;">
                <?php echo category_description() . tag_description(); ?>
            </div>
        <?php endif; ?>
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
        <p style="text-align: center; padding: 3rem;">Tidak ada artikel dalam arsip ini.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
