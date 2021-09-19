<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 */

get_header();

?>
<div class="about-page another-page">
    <div class="container">
        <div class="breadcrumbs">
          <?php echo true_breadcrumbs();?>
        </div>
        <h2 class="title"><?php echo get_field('pAbout_title');?></h2>
        <div class="aboutImgBlock">
          <?php $count = 0; ?>
          <?php foreach (get_field('pAbout_block') as $item): ?>
          <?php if ($count%2==0) {
              $class = 'textLeft';
          } else {
              $class = 'textRight';
          }
          ?>
              <div class="imgBlock <?php echo $class;?>">
                  <div class="imgBlock-text"><?php echo $item['text'];?></div>
                  <div class="imgBlock-img">
                      <div class="imgBlock-img-wrap" style="background-image: url('<?php echo $item['img']['url'];?>')"></div>
                  </div>
              </div>
          <?php $count++; ?>
          <?php endforeach;?>
        </div>
        <div class="aboutImg">
            <img src="<?php echo get_field('pAbout_img')['url'];?>" alt="">
        </div>

        <section class="advantages main-p">
            <div class="container">
                <div class="advantages-wrap flex-c">
                  <?php foreach (get_field('about_advantages', 5) as $item): ?>
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

        <div class="director flex-fs-fs main-p">
            <div class="director-left">
                <h2 class="title"><?php echo get_field('pAbout_director')['title'];?></h2>
                <div class="director-imgWrap">
                    <div class="director-bg"></div>
                    <img src="<?php echo get_field('pAbout_director')['img']['url'];?>" alt="">
                </div>
            </div>
            <div class="director-right">
              <?php echo get_field('pAbout_director')['text'];?>
            </div>
        </div>

        <div class="work main-p">
            <?php
                $workData = get_field('pAbout_work');
                $count = 0;
                $num = 1;
            ?>
            <h2 class="title ta-c"><?php echo $workData['title'];?></h2>
            <div class="work-block">
                <?php foreach ($workData['steps'] as $item): ?>
                  <?php if ($count%2==0) {
                    $class = 'textLeft';
                  } else {
                    $class = 'textRight';
                  }
                  ?>
                <div class="work-item flex-fs-fs <?php echo $class;?>">
                    <div class="work-item-text">
                        <div class="m-title"><?php echo $item['title'];?></div>
                        <div class="desc"><?php echo $item['desc'];?></div>
                    </div>
                    <div class="work-item-count"><?php echo $num;?></div>

                </div>
                <?php
                  $count++;
                  $num++;

                ?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
   

</div>



<?php get_footer(); ?>