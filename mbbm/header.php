<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mbbm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container">
        <div class="section-padding header-bg">
            <div class="header-line">
                <a href="/"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.webp" alt="logo" class="header-logo"></a>
                <div class="header-socials">
                    <div class="socials-icons">
                        <a href="https://t.me/+W38CD53dyPExZmJi" target="_blank">
                            <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                <path d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
                            </svg>
                        </a>
                        <a href="https://vk.com/mbbm.club" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path class="st0" d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="socials-tel">
                        <a href="tel:+79037913869">+7-903-791-38-69</a>
                    </div>
                </div>
                <nav class="nav mobile">
                    <ul class="nav-menu">
                        <li class="nav-menu__item"><a href="#autors">Авторы</a></li>
                        <li class="nav-menu__item"><a href="#program">Программа</a></li>
                        <li class="nav-menu__item"><a href="#callback">Присоединиться</a></li>
                    </ul>
                    <div class="header-socials mobile">
                        <div class="socials-icons">
                            <a href="https://t.me/+W38CD53dyPExZmJi" target="_blank">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                    <path d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
                                </svg>
                            </a>
                            <a href="https://vk.com/mbbm.club" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path class="st0" d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="socials-tel">
                            <a href="tel:+79037913869">+7-903-791-38-69</a>
                        </div>
                    </div>

                </nav>
                <div class="header-hamburger">
                    <button class="hamburger hamburger--squeeze" id="hamburger" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div><!-- /.header-line -->
            <div class="header-content">
                <h1 class="header-content__heading">
                    Малый бизнес <br><span>без мужчин</span>
                </h1>
                <div class="header-content__subheading">
                    <span>Как научиться останавливать на скаку коней и входить в горящие избы, сохраняя женственность и ресурсное состояние.</span>
                </div>
                <img src="<?= get_template_directory_uri() ?>/assets/img/header-autors.webp" alt="authors" class="header-content__image">
                <div class="header-content__description">
                    <p>Сегодня из-за сложившейся в России ситуации, ответственность за семью и финансовую независимость легла на хрупкие женские плечи.
                        В 2022-2023 именно женщинам предстоит «выводить в люди» детей, поддерживать и развивать семейное предприятие, преодолевать страхи, трудности и сомнения, связанные с ведением бизнеса и обеспечением достойного уровня жизни себе и близким.
                        Учебная программа «Малый бизнес без мужчин» ориентирована на активную женскую аудиторию, вынужденно принимающую вызовы времени в стремлении создать или развить свой бизнес, который станет надёжным гарантом финансовой свободы для начинающей бизнес-леди и её семьи.
                    </p>
                </div>
            </div><!-- /.header-content -->
        </div><!-- /.header-bg -->
    </div><!-- /.container -->
</header>


