<?php
/**
 * Template Name: Policy Page
 * Template Post Type: page
 */

get_header();

?>
<div class="policy-page another-page">
  <div class="container">
    <h2><?php echo get_the_title();?></h2>
    <?php echo the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>
