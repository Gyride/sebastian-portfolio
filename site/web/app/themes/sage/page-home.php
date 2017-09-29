<?php
/**
 * Template Name: Home Template
 */
 // TEMPLATE
?>
<?php if (have_posts() ): ?>
    <?php while (have_posts() ) : the_post(); ?>
    <?php get_template_part('templates/components/banner-section'); ?>
    <?php get_template_part('templates/components/about-me'); ?>
    
    <?php get_template_part('templates/components/contact'); ?>
    <nav>
        <ul>
            <li>About</li>
            <li>Projects</li>
            <li>Contact</li>
        </ul>
    </nav>
    <?php endwhile; ?>
<?php endif; ?>