<?php get_header(); ?>

<div id="main-content" class="container">
<?php 

// Comment this out if you don't want to
// display blog posts in on your index.
include 'blog_posts.php';

?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>