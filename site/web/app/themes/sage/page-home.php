<?php
/**
 * Template Name: Home Template
 */
 // TEMPLATE
?>
<?php 
$args = array("post_type" => "project");
$projects_query = new WP_Query($args);
?>
<?php if ($projects_query->have_posts()):?>
    <?php while ($projects_query->have_posts()):?>
        <?php $projects_query->the_post();?>
        <h1><?php the_field("client");?></h1>
        <h2><?php the_field("project_name");?></h2>
        <img src="<?php the_field("thumbnail");?>" alt="thumbnail">
        <?php if (have_rows("tech_stack")):?>
            <?php while (have_rows("tech_stack")):?>
                <?php the_row();?>
                    <p><?php the_sub_field("languages");?><p>
            <?php endwhile;?>
        <?php endif;?>
        <?php if (has_post_thumbnail()):?>
            <?php the_post_thumbnail();?>
        <?php endif;?>
    <?php endwhile;?>
<?php endif;?>
