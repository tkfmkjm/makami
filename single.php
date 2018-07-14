<?php get_header(); ?>

<div id="main-content">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article>
                <!-- Featured Image -->
                <figure>
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                        <p>No featured image found.</p>
                        <?php endif ; ?>
                </figure>
                <!-- /Featured Image -->

                <h3>
                        <?php the_title(); ?>
                </h3>
                
                <?php the_category(', ') ?>
                <time class="post-date">
                        <?php the_date() ?>
                        <?php the_time() ?>
                </time>
                <?php the_content(); ?>

                <!-- Author Information -->
                <div class="author-info">
                        <p>Article by
                                <strong>
                                        <?php the_author_firstname(); ?>
                                        <?php the_author_lastname(); ?>
                                </strong>
                        </p>
                        <p>
                                <?php the_author_meta('user_description',$author); ?>
                        </p>
                </div>
                <!-- /Author Information -->

                <!-- Comments -->
                <?php comments_template(); ?>
                <!-- /Comments -->

                <!-- Next-Prev Links -->
                <?php previous_post_link(); ?>
                <?php next_post_link(); ?>
                <!-- /Next-Prev Links -->


        </article>

        <?php endwhile; ?>

        <?php else : ?>
        <article>
                <h3>Not Found</h3>
                <p>Sorry, but you are looking for something that isn't here.</p>
        </article>

        <?php endif; ?>

</div>
<!-- /#main-content -->

<!-- Sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>