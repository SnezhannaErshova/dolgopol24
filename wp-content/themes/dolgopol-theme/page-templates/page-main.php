<?php
/**
 * Template Name: Main Page
 * Template Post Type: page
 */

get_header();

?>
<section class="preview">
    <?php
        $previewSlider = get_field('slider');
    ?>
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($previewSlider as $item): ?>
                  <div class="swiper-slide preview-slide flex-c-sb">
                    <div class="preview-slide-text">
                        <div class="preview-slide-title"><?php echo $item['title']; ?></div>
                        <div class="preview-slide-desc"><?php echo $item['desc']; ?></div>
                        <?php if($item['btn_add']):?>
                        <a href="<?php echo $item['btn_link']; ?>" class="preview-slide-more main-btn"><?php echo $item['btn_text']; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="preview-slide-img">
                        <img src="<?php echo $item['img']['url']; ?>" alt="">
                    </div>
                  </div>
              <? endforeach; ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="about main-p">
    <div class="container flex-c-sb with-bg">
        <div class="about-image-wrap">
            <div class="with-bg-image"></div>
            <div class="about-image">
                <img src="<?php echo get_field('about_img')['url']; ?>" alt="">
            </div>
        </div>

        <div class="about-text">
            <h2 class="title"><?php echo get_field('about_title'); ?></h2>
            <div class="about-text-desc"><?php echo get_field('about_text'); ?></div>
            <a href="<?php echo get_field('about_more_link'); ?>" class="more link"><?php echo get_field('about_more'); ?></a>
        </div>
    </div>
</section>
<section class="advantages main-p">
    <div class="container">
        <div class="advantages-wrap flex-c">
            <?php foreach (get_field('about_advantages') as $item): ?>
            <div class="advantages-item">
                <div class="advantages-item-img">
                    <img src="<?php echo $item['img']['url']; ?>" alt="">
                </div>
                <div class="advantages-item-title m-title"><?php echo $item['title']; ?></div>
                <div class="advantages-item-text"><?php echo $item['desc']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="services main-p">
    <div class="container ta-c">
        <h2 class="title"><?php echo get_field('services_title');?></h2>
        <div class="services-wrap">
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
                $desc = get_field('services_pr_text', $service->ID);
                $img = get_field('services_pr_img', $service->ID);
                $link = get_field('services_pr_link', $service->ID);
                $linkText = get_field('services_pr_btn', $service->ID);
                $class = 'right-img';
                if ($count%2!=0) {
                  $class = 'left-img';
                } else {
                  $class = 'right-img';
                }
            ?>
            <div class="services-item services-item-desk flex-c <?php echo $class; ?>">
              <div class="services-text">
                  <div class="m-title"><?php echo get_the_title($service->ID);?></div>
                  <div class="desc"><?php echo $desc;?></div>
                  <a href="<?php echo $link;?>" class="more link"><?php echo $linkText;?></a>
              </div>

              <div class="services-img">
                  <img src="<?php echo $img['url'];?>" alt="">
              </div>
              <div class="bg-img"></div>
            </div>

                <div class="services-item services-item-mobile flex-c">
                    <div class="services-text">
                        <div class="m-title"><?php echo get_the_title($service->ID);?></div>
                        <div class="services-img-wrap">
                            <div class="services-img">
                                <img src="<?php echo $img['url'];?>" alt="">
                            </div>
                            <div class="bg-img"></div>
                        </div>
                        <div class="desc"><?php echo $desc;?></div>
                        <a href="<?php echo $link;?>" class="more link"><?php echo $linkText;?></a>
                    </div>

                </div>
            <?php $count++; ?>
            <?php endforeach;?>
        </div>
    </div>
</section>
<section class="gallery main-p">
    <div class="container ta-c">
        <h2 class="title"><?php echo get_field('gallery_title'); ?></h2>
        <div class="gallery-wrap flex-fs-sb">
            <?php foreach (get_field('gallery_item') as $item): ?>
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
        <a href="<?php echo get_field('gallery_btn_link');?>" class="main-btn"><?php echo get_field('gallery_btn_text');?></a>
    </div>
</section>
<section class="study main-p">
    <div class="container ta-c">
        <h2 class="title"><?php echo get_field('study_title');?></h2>
        <div class="study-text"><?php echo get_field('study_text');?></div>
        <div class="study-wrap flex-fs-sb">
            <?php foreach (get_field('study_item') as $item):?>
            <div class="study-item">
                <a href="<?php echo $item['link'];?>" class="ta-c">
                    <img src="<?php echo $item['img']['url'];?>" alt="">
                    <div class="study-item-title"><?php echo $item['title'];?></div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="study-warning ta-c">
            <div class="study-warning-title flex-c"><?php echo get_field('study_warning')['title'];?></div>
            <div class="study-warning-text"><?php echo get_field('study_warning')['text'];?></div>
        </div>
    </div>
</section>
<section class="questions main-p">
    <div class="container ta-c">
        <h2 class="title"><?php echo get_field('questions_title'); ?></h2>
        <div class="questions-wrap flex-fs-fs">
          <?php
          $questionItem = 0;
          $questionAnswer = 0;
          ?>
          <div class="questions-left">
            <?php foreach (get_field('questions_item_left') as $item): ?>
                <div class="questions-item">
                    <div class="accordion-header" id="questionItem<?php echo $questionItem;?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionAnswer<?php echo $questionAnswer;?>" aria-expanded="true" aria-controls="collapseOne">
                          <?php echo $item['question'];?>
                        </button>
                    </div>
                    <div id="questionAnswer<?php echo $questionAnswer;?>" class="accordion-collapse collapse" aria-labelledby="questionItem<?php echo $questionItem;?>" >
                        <div class="accordion-body">
                          <?php echo $item['answer'];?>
                        </div>
                    </div>
                </div>
              <?php $questionItem++;
              $questionAnswer++; ?>
            <?php endforeach;?>
          </div>
            <div class="questions-right">
              <?php foreach (get_field('questions_item_right') as $item): ?>
                  <div class="questions-item">
                      <div class="accordion-header" id="questionItem<?php echo $questionItem;?>">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionAnswer<?php echo $questionAnswer;?>" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $item['question'];?>
                          </button>
                      </div>
                      <div id="questionAnswer<?php echo $questionAnswer;?>" class="accordion-collapse collapse" aria-labelledby="questionItem<?php echo $questionItem;?>" >
                          <div class="accordion-body">
                            <?php echo $item['answer'];?>
                          </div>
                      </div>
                  </div>
                <?php $questionItem++;
                $questionAnswer++; ?>
              <?php endforeach;?>
            </div>

        </div>
    </div>
</section>
<section class="reviews" style="background-image: url('<?php echo get_field('reviews_bg')['url']; ?>')">
    <div class="container ta-c">
        <h2 class="title"><?php echo get_field('reviews_title'); ?></h2>
        <div class="reviews-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach (get_field('reviews_item') as $item): ?>
                    <div class="swiper-slide flex-c">
                        <div class="reviews-photo">
                            <img src="<?php echo $item['img']['url'];?>" alt="">
                        </div>
                        <div class="reviews-desc">
                            <div class="reviews-text"><?php echo $item['text'];?></div>
                            <div class="reviews-name"><?php echo $item['name'];?></div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<section class="contacts main-p">
    <div class="container flex-fs-fs">
        <div class="contacts-left">
            <div class="contacts-left-wrap">
                <h2 class="title"><?php echo get_field('contacts_title'); ?></h2>
                <div class="contacts-block">
                    <div class="contacts-item contacts-address flex-fs-fs"><?php echo get_field('address', 'options'); ?></div>
                    <div class="contacts-item contacts-time flex-fs-fs"><?php echo get_field('work_time', 'options'); ?></div>
                    <a href="tel:<?php echo preg_replace("/[^0-9]/", '', get_field('phone', 'options'));?>" class="contacts-item contacts-phone flex-fs-fs"><?php echo get_field('phone', 'options'); ?></a>
                    <a href="<?php echo get_field('instagram', 'options'); ?>" class="contacts-item contacts-insta flex-c">
                      <?php echo get_field('instagram_text', 'options'); ?>
                    </a>
                </div>
            </div>

        </div>
        <div id="map"></div>
    </div>
</section>

<?php get_footer(); ?>