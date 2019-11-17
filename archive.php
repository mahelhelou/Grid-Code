    <?php get_header(); ?>

        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="page-heading"><?php the_archive_title(); ?></h2>
        </a>

        <section>

            <?php
                
                while (have_posts()) {
                    the_post(); ?>

                    <div class="card">
                        <div class="card-image">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                            </a>
                        </div>

                        <div class="card-description">
                            <a href="<?php echo the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="card-meta">
                                Posted by <?php the_author(); ?> On <?php the_time('F j, Y'); ?>
                            </div>
                            <p><?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                } ?></p>
                            <a href="<?php echo the_permalink(); ?>" class="btn-readmore">Read more</a>
                        </div>
                    </div>
                <?php }
            ?>
        </section>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

        <h2 class="section-heading">Source Code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis
                perferendis praesentium
                consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel
                corrupti!
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

    <?php get_footer(); ?>