<?php
/**
 * The theme header
 *
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=35fec53a-f0a2-471b-a29d-773f15917ec7&lang=ru_RU"
            type="text/javascript">
    </script>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="/wp-content/themes/dolgopol-theme/js/google-translate.js"></script>
</head>
<body>
<header>
    <?php
    $logo = get_field('logo', 'options');
    $address = get_field('address', 'options');
    $phone = get_field('phone', 'options');
    $phone_num = preg_replace("/[^0-9]/", '', $phone);
    $instagram = get_field('instagram', 'options');
    ?>
    <div class="container header-wrapper flex-c-sb">
        <div class="header-left flex-c">
            <a href="/" class="header-logo">
                <img src="<?php echo $logo['url']; ?>" alt="">
            </a>
        </div>
        <div class="header-right">
            <div class="header-top flex-c-fe">
                <div class="header-contacts flex-c">
                    <div class="header-address header-top-item flex-c"><?php echo $address; ?></div>
                    <a href="tel:<?php echo $phone_num; ?>" class="header-phone header-top-item flex-c"><?= $phone; ?></a>
                    <a href="<?php echo $instagram; ?>" target="_blank" class="header-inst header-top-item flex-c"></a>
                </div>

                <div class="header-lang header-top-item flex-c language">
                    <div class="lang-ru" data-google-lang="ru">
                        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.104 12L3.448 7.44H1.688V12H0.232V0.848H3.832C4.67467 0.848 5.384 0.992 5.96 1.28C6.54667 1.568 6.984 1.95733 7.272 2.448C7.56 2.93867 7.704 3.49867 7.704 4.128C7.704 4.896 7.48 5.57333 7.032 6.16C6.59467 6.74667 5.93333 7.136 5.048 7.328L7.848 12H6.104ZM1.688 6.272H3.832C4.62133 6.272 5.21333 6.08 5.608 5.696C6.00267 5.30133 6.2 4.77867 6.2 4.128C6.2 3.46667 6.00267 2.95467 5.608 2.592C5.224 2.22933 4.632 2.048 3.832 2.048H1.688V6.272ZM11.3904 0.848V7.904C11.3904 8.896 11.6304 9.632 12.1104 10.112C12.601 10.592 13.2784 10.832 14.1424 10.832C14.9957 10.832 15.6624 10.592 16.1424 10.112C16.633 9.632 16.8784 8.896 16.8784 7.904V0.848H18.3344V7.888C18.3344 8.816 18.1477 9.6 17.7744 10.24C17.401 10.8693 16.8944 11.3387 16.2544 11.648C15.625 11.9573 14.9157 12.112 14.1264 12.112C13.337 12.112 12.6224 11.9573 11.9824 11.648C11.353 11.3387 10.8517 10.8693 10.4784 10.24C10.1157 9.6 9.93438 8.816 9.93438 7.888V0.848H11.3904Z" fill="black"/>
                        </svg>
                    </div>
                    <span class="line"></span>
                    <div class="lang-en" data-google-lang="en">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.688 2.032V5.76H5.752V6.96H1.688V10.8H6.232V12H0.232V0.832H6.232V2.032H1.688ZM17.2031 12H15.7471L9.89113 3.12V12H8.43513V0.832H9.89113L15.7471 9.696V0.832H17.2031V12Z" fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="header-burger">
                <div class="header-burger-wrap">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

            </div>
            <div class="header-nav">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
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
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => '',
              ));
              ?>
            </div>
            <div class="header-nav header-nav-mobile">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
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
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => '',
              ));
              ?>
                <div class="header-contacts flex-c">
                    <div class="header-address header-top-item flex-c"><?php echo $address; ?></div>
                    <a href="<?php echo $phone_num; ?>" class="header-phone header-top-item flex-c"><?= $phone; ?></a>
                    <a href="<?php echo $instagram; ?>" target="_blank" class="header-inst header-top-item flex-c"></a>
                </div>
            </div>

        </div>
    </div>





</header>