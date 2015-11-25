<?php get_header(); ?>

// Display content of pages
<?php if ( have_posts() ): while ( have_posts() ): the_post();
the_content();
endwhile; endif?>

<?php get_footer(); ?>