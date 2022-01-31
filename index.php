<?php get_header(); ?>
<main id="x" role="x">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'x' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'x', 'x' ); ?>
</main>
<?php get_footer(); ?>
