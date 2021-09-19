<?php
/**
 * Template Name: Gallery Page
 * Template Post Type: page
 */

get_header();

?>
<div class="gallery-page another-page">
    <div class="container">
        <div class="breadcrumbs">
            <?php echo true_breadcrumbs();?>
        </div>
        <h2 class="title"><?php echo get_the_title();?></h2>

      <?php
          $gallery = get_posts( array(
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'gallery',
          ) );
      ?>
      <?php if (get_the_id()=='11'):?>
      <?php
        $gallery_new = array();
        foreach ($gallery as $item) {
          $images = get_field('gallery_images', $item->ID);
          foreach ($images as $image) {
            array_push($gallery_new, $image);
          }
        }
        shuffle($gallery_new);
      ?>
      <div class="gallery-nav flex-c">
          <div class="gallery-nav-item active">Все работы</div>
          <?php foreach ($gallery as $item):?>
          <a href="<?php echo get_the_permalink($item->ID);?>" class="gallery-nav-item"><?php echo get_the_title($item->ID);?></a>
          <?php endforeach;?>
      </div>
      <div class="gallery-block flex-fs-fs">
        <?php foreach ($gallery_new as $item):?>
<!--        --><?php //var_dump($item);?>
        <div class="gallery-item">
            <a href="<?php echo $item['url'];?>" data-fancybox="images">
                <img src="<?php echo $item['sizes']['large'];?>" alt="" />
            </a>
        </div>
        <?php endforeach;?>
      </div>
      <?php endif;?>
    </div>
</div>




<?php get_footer(); ?>