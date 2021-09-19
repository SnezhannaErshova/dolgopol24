<?php
/**
 * Template Name: Study Page
 * Template Post Type: page
 */

get_header();

?>
<div class="study-page another-page">
    <div class="container">
        <div class="breadcrumbs">
          <?php echo true_breadcrumbs();?>
        </div>
        <h2 class="title services-title black-title"><?php echo get_the_title();?></h2>
        <div class="study_block">
            <?php foreach (get_field('study_item') as $item): ?>
            <div class="study-item flex-fs-fs">
                <div class="study-item-left flex-c">
                    <div class="study-item-text">
                        <h2 class="study-item-title title"><?php echo $item['title'];?></h2>
                        <div class="study-item-level m-title"><?php echo $item['level'];?></div>
                        <div class="study-item-desc"><?php echo $item['desc'];?></div>
                    </div>
                    <div class="study-item-img">
                        <div class="study-item-bg"></div>
                        <img src="<?php echo $item['img']['url'];?>" alt="">
                    </div>
                </div>
                <div class="study-item-right">
                    <?php if($item['scheme']['title']):?>
                    <div class="m-title blue-title"><?php echo $item['scheme']['title'];?></div>
                    <?php endif;?>
                    <?php foreach ($item['scheme']['steps'] as $step):?>
                    <div class="study-item-step flex-fs-fs">
                        <div class="day m-title"><?php echo $step['day'];?></div>
                        <div class="text"><?php echo $step['text'];?></div>
                    </div>
                    <?php endforeach;?>
                    <div class="study-item-price">
                        <div class="m-title blue-title">Стоимость: <?php echo $item['price']['title'];?></div>
                        <div class="text"><?php echo $item['price']['text'];?></div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <div class="study-warning ta-c">
                <div class="study-warning-title flex-c"><?php echo get_field('study_warning', 5)['title'];?></div>
                <div class="study-warning-text"><?php echo get_field('study_warning', 5)['text'];?></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>