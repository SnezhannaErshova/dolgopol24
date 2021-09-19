<?php
/**
 * Template Name: Contacts Page
 * Template Post Type: page
 */

get_header();

?>
<div class="contacts-page another-page">
    <div class="container">
        <div class="breadcrumbs">
          <?php echo true_breadcrumbs();?>
        </div>
        <h2 class="title services-title black-title"><?php echo get_the_title();?></h2>
        <div class="contacts-block flex-fs-fs">
            <div class="contacts-left">
                <div class="contacts-item contacts-address"><?php echo get_field('address', 'options');?></div>
                <a href="tel:<?php echo preg_replace("/[^0-9]/", '', get_field('phone', 'options'));?>" class="contacts-item contacts-phone"><?php echo get_field('phone', 'options');?></a>
                <div class="contacts-item contacts-work"><?php echo get_field('work_time', 'options');?></div>
                <a href="<?php echo get_field('instagram', 'options');?>" target="_blank" class="contacts-item contacts-insta"><?php echo get_field('instagram_text', 'options');?></a>
                <a href="<?php echo get_field('vk', 'options');?>" target="_blank" class="contacts-item contacts-vk"><?php echo get_field('vk_text', 'options');?></a>
                <a href="<?php echo get_field('ok', 'options');?>" target="_blank" class="contacts-item contacts-ok"><?php echo get_field('ok_text', 'options');?></a>
                <a href="https://wa.me/<?php echo preg_replace("/[^0-9]/", '', get_field('whatsapp', 'options'));?>" target="_blank" class="main-btn contacts-item contacts-wa"><?php echo get_field('whatsapp_text', 'options');?></a>
            </div>
            <div id="map" class="contacts-page-map"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>