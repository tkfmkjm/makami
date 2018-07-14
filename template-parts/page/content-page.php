<article>
    <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <h3>
        <?php the_title(); ?>
    </h3>
    <?php the_content(); ?>
    <?php endwhile; ?>

    <?php else : ?>
    <h3>Not Found</h3>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
</article>