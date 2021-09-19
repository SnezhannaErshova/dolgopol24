<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
<footer>
  <?php
  $logo = get_field('logo', 'options');
  $address = get_field('address', 'options');
  $phone = get_field('phone', 'options');
  $phone_num = preg_replace("/[^0-9]/", '', $phone);
  $instagram = get_field('instagram', 'options');
  ?>
    <div class="container">
        <div class="footer-nav">
            <div class="footer-nav-left">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu-left',
                'menu' => '',
                'echo' => true,
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'walker' => '',
              ));
              ?>
            </div>
            <a href="/" class="footer-logo">
                <img src="<?php echo $logo['url'];?>" alt="">
            </a>
            <div class="footer-nav-right">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu-right',
                'menu' => '',
                'container' => 'div',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'walker' => '',
              ));
              ?>
            </div>
        </div>
        <div class="footer-contacts flex-c-c">
            <div class="contacts-item contacts-address flex-fs-fs"><?php echo get_field('address', 'options'); ?></div>
            <a href="tel:<?php echo $phone_num;?>" class="contacts-item contacts-phone flex-fs-fs"><?php echo get_field('phone', 'options'); ?></a>
            <a href="<?php echo get_field('instagram', 'options'); ?>" class="contacts-item contacts-insta flex-c">
              <?php echo get_field('instagram_text', 'options'); ?>
            </a>
        </div>
        <div class="footer-copy flex-c-sb">
            <a href="https://asmart-group.ru/" target="_blank" class="footer-copy-text"><?php echo get_field('copyright', 'options');?></a>
            <a href="/privacy-policy/" class="footer-policy"><?php echo get_field('policy', 'options');?></a>
        </div>
    </div>
</footer>
<!--			<footer>-->
<!--                <div class="container">-->
<!--                    <div class="footer-wrap flex-fs-sb">-->
<!--                        <div class="footer-contacts">-->
<!--                            <a href="mailto:--><?//= get_field('email', 'options'); ?><!--" class="footer-contacts-mail">-->
<!--                                --><?//= get_field('email', 'options'); ?>
<!--                            </a>-->
<!--                            <div class="footer-contacts-address">--><?//= get_field('address', 'options'); ?><!--</div>-->
<!--                        </div>-->
<!--                        <div class="footer-menu flex-fs-c">-->
<!--                            <div class="footer-menu-left">-->
<!--                                --><?php
//                                wp_nav_menu(array(
//                                    'theme_location' => 'footer-menu-left',
//                                    'menu' => '',
//                                    'container' => 'div',
//                                    'container_class' => '',
//                                    'container_id' => '',
//                                    'menu_class' => 'menu',
//                                    'menu_id' => '',
//                                    'echo' => true,
//                                    'fallback_cb' => 'wp_page_menu',
//                                    'before' => '',
//                                    'after' => '',
//                                    'link_before' => '',
//                                    'link_after' => '',
//                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//                                    'depth' => 0,
//                                    'walker' => '',
//                                ));
//                                ?>
<!--                            </div>-->
<!--                            <div class="footer-menu-right">-->
<!--                                --><?php
//                                wp_nav_menu(array(
//                                    'theme_location' => 'footer-menu-right',
//                                    'menu' => '',
//                                    'container' => 'div',
//                                    'container_class' => '',
//                                    'container_id' => '',
//                                    'menu_class' => 'menu',
//                                    'menu_id' => '',
//                                    'echo' => true,
//                                    'fallback_cb' => 'wp_page_menu',
//                                    'before' => '',
//                                    'after' => '',
//                                    'link_before' => '',
//                                    'link_after' => '',
//                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//                                    'depth' => 0,
//                                    'walker' => '',
//                                ));
//                                ?>
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div class="footer-info">-->
<!--                            <div class="footer-info-policy">-->
<!--                                <a href="/privacy-policy/">Политика конфиденциальности</a>-->
<!--                            </div>-->
<!--                            <div class="footer-info-asmart">-->
<!--                                <a target="_blank" href="https://asmart-group.ru/">Сайт разработан IT-Company <span>ASMART</span></a>-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--			</footer>-->




    <!-- Modal -->
    <div class="modal fade" id="getCall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="getCall-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--                        <img src="--><?//= getImgUrl('close.svg');?><!--" alt="">-->
                    </button>
                    <h2 class="getCall-title">Записаться на замер</h2>
                    <div class="getCall-text">Заполните необходимые данные, и наш специалист свяжется с Вами в ближайшее время!</div>
                    <div class="getCall-form">
                        <?= do_shortcode('[contact-form-7 id="99" title="Записаться на замер"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="getCall2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="getCall-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!--                        <img src="--><?//= getImgUrl('close.svg');?><!--" alt="">-->
                    </button>
                    <h2 class="getCall-title">Заказать звонок</h2>
                    <div class="getCall-text">Заполните необходимые данные, и наш специалист свяжется с Вами в ближайшее время!</div>
                    <div class="getCall-form">
                        <?= do_shortcode('[contact-form-7 id="476" title="Заказать звонок"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="getCall-contacts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="getCall-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!--                        <img src="--><?//= getImgUrl('close.svg');?><!--" alt="">-->
                    </button>
                    <h2 class="getCall-title">Получить консультацию</h2>
                    <div class="getCall-text">Заполните необходимые данные, и наш специалист свяжется с Вами в ближайшее время!</div>
                    <div class="getCall-form">
                        <?= do_shortcode('[contact-form-7 id="477" title="Получить консультацию"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="getCallOK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <h2 class="modal-content">
                <div class="getCall-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                    <h2>Ваше сообщение отправлено</h2>
                    <div class="getCall-text">Наш специалист свяжется с Вами в ближайшее время!</div>
                </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="/local/templates/predgorie/js/google-translate.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    </body>
</html>
<?php wp_footer(); ?>