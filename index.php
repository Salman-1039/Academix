<?php get_header(); ?>

<main>
    <h2>Welcome to AcademiX</h2>
    <p>This is a custom WordPress Theme For AcademiX.</p>

    <!-- Blog Posts -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_content(); ?></p>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer();?>
