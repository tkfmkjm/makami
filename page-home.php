<?php 
/**
 * Template Name: Top Page Themplate
 */
get_header(); ?>

<?php if (have_posts()) : ?>

<div id="main-content--full">

    <article>
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

        <?php else : ?>
        <h3>Not Found</h3>
        <p>Sorry, but you are looking for something that isn't here.</p>

        <?php endif; ?>
    </article>

</div>
<!-- /#main-content -->

<?php get_footer(); ?>

