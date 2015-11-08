<?php
// Include this file on pages where
// you want to display blog posts.

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>

        <h3> <?php the_title(); ?> </h3>
        <div class="post_content"> <?php the_content(); ?></div>

<?php    
} // end while
} // end if
?>