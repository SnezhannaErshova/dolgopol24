<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?>
<div class="gallery-page another-page single-gallery">
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content-gallery', get_post_format() );
        endwhile; // End of the loop.
        ?>
    </div>
</div>



<?php get_footer(); ?> 
