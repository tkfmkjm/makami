<!DOCTYPE html>
<?php get_header(); ?>

<?php if (have_posts()): ?>

<div id="main-content">

    <?php if ( is_tag() ) : ?> Tag:
    <?php single_cat_title(); ?>
    <?php elseif ( is_category() ) : ?> Category:
    <?php single_cat_title(); ?>
    <?php elseif ( is_date() ) : ?> Date:
    <?php echo get_the_date('M(n) Y'); ?>
    <?php else: ?>
    <!-- NA -->
    <?php endif; ?>

    <?php while (have_posts()) : ?>
    <article>

        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p>
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>

            <!-- Show none if it doesn't exist -->
            <?php endif ; ?>
        </p>

        <p>
            <?php the_excerpt(); ?>
        </p>

    </article>
    <?php endwhile; ?>

</div>
<!-- /#main-content -->

<?php endif; ?>

<!-- Sidebar -->
<?php get_sidebar(); ?>

<!-- Footer -->
<?php get_footer(); ?>