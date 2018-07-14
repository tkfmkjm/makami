<!DOCTYPE html>
<?php get_header(); ?>

<?php if (have_posts()): ?>

<div id="main-content">

    <?php while (have_posts()) : ?>
    <article>

        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <time class="entry-date">
            <?php the_time('Y.m.d'); ?>
        </time>
        <p>
            <?php comments_number( 'No Comment', '1 Comment', '% Comments' ); ?>
        </p>
        <p>
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
            <!-- Show none if it doesn't exist -->
            <?php endif ; ?>
        </p>

        <p>
            <?php
     if( has_excerpt() ){
          the_excerpt();
          echo '<a href="'; the_permalink(); echo '"'. 'class="more-link">'.'&raquo;&nbsp;has excerpt</a>';
     } else {
          the_content('HAS MORE-TAG');
     }
?>
        </p>

    </article>
    <?php endwhile; ?>

    <!-- Pagination -->
    <nav class="post-navigation">
        <?php pagination_bar(); ?>
    </nav>

</div>
<!-- /#main-content -->

<?php endif; ?>

<!-- Sidebar -->
<?php get_sidebar(); ?>

<!-- Footer -->
<?php get_footer(); ?>