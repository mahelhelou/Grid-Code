<?php get_header(); ?>

    <?php
        while (have_posts()) {
            the_post(); ?>

        <h2 class="page-heading"><?php the_title(); ?></h2>
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-meta-blogpost">
                        Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(','); ?>
                        <a href="<?php echo the_permalink(); ?>">Web Dev</a>
                    </div>
                    <div class="card-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </div>
                    <div class="card-description">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div id="comments-section">
                    Comments Section
                </div>
            </section>
            <?php } ?>

            <aside id="sidebar">
                <h3>Sidebar Heading</h3>
                <p>Sidebar 1</p>
            </aside>
        </div>

<?php get_footer(); ?>