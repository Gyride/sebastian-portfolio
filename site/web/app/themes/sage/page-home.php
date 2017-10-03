<?php
/**
 * Template Name: Home Template
 */
 // TEMPLATE
?>
<?php if (have_posts() ): ?>
    <?php while (have_posts() ) : the_post(); ?>
        <div id="pinContainer">
            <?php get_template_part('templates/components/banner-section'); ?>
            <?php get_template_part('templates/components/about-me'); ?>
            <?php get_template_part('templates/components/projects'); ?>
            <?php get_template_part('templates/components/contact'); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>