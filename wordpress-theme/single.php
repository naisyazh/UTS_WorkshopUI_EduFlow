<?php
/**
 * The template for displaying single posts
 * EduLearn Theme
 */

get_header(); ?>

<main class="container">
    <?php while (have_posts()) : the_post(); ?>
        <article class="single-post">
            <header class="post-header">
                <h1 class="post-title"><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    <span class="date">📅 <?php echo get_the_date(); ?></span>
                    <span class="author">👤 <?php the_author(); ?></span>
                    <span class="category">📁 <?php the_category(', '); ?></span>
                </div>
            </header>
            
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', array('class' => 'post-thumbnail')); ?>
            <?php endif; ?>
            
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </article>
        
        <!-- Navigation to next/previous post -->
        <div class="post-navigation" style="margin-top: 2rem; display: flex; justify-content: space-between;">
            <div class="nav-previous">
                <?php previous_post_link('%link', '← %title'); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link('%link', '%title →'); ?>
            </div>
        </div>
        
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
