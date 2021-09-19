<?php
/**
 * Template Name: Services Page
 * Template Post Type: page
 */

get_header();

?>
<div class="services-page another-page">
    <div class="container">
        <div class="breadcrumbs">
          <?php echo true_breadcrumbs();?>
        </div>
        <h2 class="title services-title"><?php echo get_field('services_page_title');?></h2>
        <div class="services-items">
          <?php
          $services = get_posts( array(
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'services',
          ) );
          $count=0;
          ?>
          <?php foreach ($services as $service):?>
          <?php
            $desc = get_field('services_d_desc', $service->ID);
            $img = get_field('services_d_img', $service->ID);
            $id = get_field('services_d_id', $service->ID);
            $class = 'right-img';
            $texts = get_field('services_d_block', $service->ID);
            if ($count%2!=0) {
              $class = 'left-img';
            } else {
              $class = 'right-img';
            }
          ?>
            <div class="item <?php echo $class;?>" id="<?php echo $id;?>">
                <div class="item-top flex-fs-fs">
                    <div class="item-top-desc">
                        <h2 class="title"><?php echo get_the_title($service->ID);?></h2>
                        <div class="text"><?php echo $desc;?></div>
                    </div>
                    <div class="item-top-img">
                        <img src="<?php echo $img['url'];?>" alt="">
                    </div>
                </div>
                <?php if (get_field('services_d_block_add', $service->ID)):?>
                <div class="item-types flex-fs-fs">
                    <div class="item-types-left item-types-item">
                        <?php foreach ($texts['left'] as $typeItem):?>
                        <div class="types-item">
                            <div class="m-title"><?php echo $typeItem['title'];?></div>
                            <div class="desc"><?php echo $typeItem['text'];?></div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="item-types-right item-types-item">
                      <?php foreach ($texts['right'] as $typeItem):?>
                          <div class="types-item">
                              <div class="m-title"><?php echo $typeItem['title'];?></div>
                              <div class="desc"><?php echo $typeItem['text'];?></div>
                          </div>
                      <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
            </div>
          <?php $count++; ?>
          <?php endforeach;?>
        </div>
        <div class="services-price" id="services-price">
            <h2 class="title"><?php echo get_field('services_page_price_title');?></h2>
            <?php foreach(get_field('services_page_price') as $item):?>
            <div class="services-price-item flex-fs-fs">
                <div class="services-price-left">
                    <div class="services-price-title m-title"><?php echo $item['title'];?></div>
                    <div class="services-price-wrap">
                      <div class="services-price-num m-title"><?php echo $item['price'];?></div>
                      <?php if ($item['price_text']):?>
                      <div class="services-price-num-text"><?php echo $item['price_text'];?></div>
                      <?php endif;?>
                    </div>
                    <?php if ($item['desc']):?>
                    <div class="services-price-desc"><?php echo $item['desc'];?></div>
                    <?php endif;?>
                </div>
                <div class="services-price-right">
                    <div class="services-price-right-title m-title"><?php echo $item['include']['title'];?></div>
                    <div class="services-price-right-text"><?php echo $item['include']['text'];?></div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="services-rent main-p study-page">
            <div class="container">
                <div class="study-item flex-fs-fs">
                    <div class="study-item-left flex-c">
                        <div class="study-item-img">
                            <img src="<?php echo get_field('rent_img', 'option')['url'];?>" alt="">
                        </div>
                    </div>
                    <div class="study-item-right">
                      <?php if(get_field('rent_title', 'option')):?>
                          <div class="m-title blue-title"><?php echo get_field('rent_title', 'option');?></div>
                      <?php endif;?>
                        <div class="study-item-price">
                            <div class="text"><?php echo get_field('rent_text', 'option');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery main-p">
            <div class="container ta-c">
                <h2 class="title"><?php echo get_field('gallery_title', 5); ?></h2>
                <div class="gallery-wrap flex-fs-sb">
                  <?php foreach (get_field('gallery_item', 5) as $item): ?>
                      <div class="gallery-block">
                        <?php foreach ($item['images'] as $image): ?>
                            <div class="gallery-item">
                                <img src="<?php echo $image['img']['url'];?>" alt="">
                              <?php if($image['add_title']):?>
                                  <div class="gallery-item-title"><?php echo $image['title'];?></div>
                              <?php endif;?>
                            </div>
                        <?php endforeach; ?>
                      </div>
                  <?php endforeach; ?>
                </div>
                <a href="<?php echo get_field('gallery_btn_link', 5);?>" class="main-btn"><?php echo get_field('gallery_btn_text', 5);?></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>