<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mbbm
 */

?>

<footer class="footer">
    <div class="container">
        <div class="section-padding section-gray">
            <div class="footer-content">
                <ul class="footer-list">
                    <li class="footer-list__item">
                        Консультационные услуги, описанные на данном сайте, оказываются ООО УК ФФМ (ИНН 9723068649) и/или ТОО MBBM (ИИН/БИН 230640004833).
                    </li>
                    <li class="footer-list__item">
                        Информация, представленная на сайте, является рекламно-ознакомительной и не попадает под определение закона об оферте.
                    </li>
                    <li class="footer-list__item">
                        Конечная стоимость услуг определяется индивидуально в договоре оказания услуг между исполнителем и заказчиком.
                    </li>
                    <li class="footer-list__item">
                        Владелец сайта не несёт ответственность за любые убытки, прямые или косвенные, возникшие в результате использования информации,
                        представленной на сайте.
                    </li>
                </ul><!-- /.footer-list -->
                <a href="/" class="footer-logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo.webp" alt="logo" >
                </a>
            </div><!-- /.footer-content -->
        </div><!-- /.section-padding -->
    </div><!-- /.container -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
