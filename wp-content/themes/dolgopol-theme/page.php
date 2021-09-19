<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?>
<div class="container">
    <?php the_content(); ?>
</div>


<?php get_footer(); ?> 