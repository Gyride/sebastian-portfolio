<?php $args = array( 'post_type' => 'project', ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php $i = 0; ?>

<?php if ($loop->have_posts()): ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <section class="projects" id="project<?php echo $i ?>">
            <div class="light"></div>
            <div class="dark"></div>
            <a href="<?php the_field("github_link") ?>">
                <img src="<?php the_field("thumbnail") ?>" alt="Project Image"/>
            </a>
            <div class="backdrop"></div>
            <div class="desc">
                <h2><?php the_field("project_name") ?></h2>
                <span><?php the_field("type") ?></span>
                <p><?php the_field("description") ?></p>
                <a href="<?php the_field("github_link") ?>">View</a>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ei-sc-github.svg/768px-Ei-sc-github.svg.png" alt="Github">
                <?php $i = $i + 1; ?>
            </div>
            <nav>
                <ul>
                    <li class="a">About</li></a>
                    <li class="p">Projects</li></a>
                    <li class="c">Contact</li></a>
                </ul>
            </nav>
        </section>
    <?php endwhile; ?>
<?php endif; ?>