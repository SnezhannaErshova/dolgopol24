<div class="breadcrumbs">
  <?php echo true_breadcrumbs();?>
</div>
<h2 class="title"><?php echo get_field('gallery_title');?></h2>
<?php
    $gallery = get_posts( array(
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'gallery',
    ) );
?>
<div class="gallery-nav flex-c">
    <a href="/galereya" class="gallery-nav-item">Все работы</a>
  <?php
    foreach ($gallery as $item):
    $class='';
    if(get_the_permalink()==get_the_permalink($item->ID)) {
        $class='active';
    }
  ?>
      <a href="<?php echo get_the_permalink($item->ID);?>" class="gallery-nav-item <?php echo $class;?>"><?php echo get_the_title($item->ID);?></a>
  <?php endforeach;?>
</div>
<div class="gallery-block flex-fs-fs">
  <?php foreach (get_field('gallery_images') as $item):?>
      <div class="gallery-item">
          <a href="<?php echo $item['url'];?>" data-fancybox="images">
              <img src="<?php echo $item['sizes']['large'];?>" alt="" />
          </a>
      </div>
  <?php endforeach;?>
</div>

