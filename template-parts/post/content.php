<?php the_post(); ?>

<article>

        <!-- Featured Image -->
        <figure>
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                <p>No featured image found!</p>
                <?php endif ; ?>
        </figure>

        <h3>
                <?php the_title(); ?>
        </h3>
        <?php the_category(', ') ?>
        <time class="post-date">
                <?php the_date() ?>
                <?php the_time() ?>
        </time>
        <?php the_content(); ?>

        <!-- Comments -->
        <?php comments_template(); ?>

        <?php previous_post_link(); ?>
        <?php next_post_link(); ?>

</article>