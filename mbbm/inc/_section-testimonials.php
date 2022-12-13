<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-white">
            <div class="section-padding">
                <h1 class="testimonials-heading">Видео отзывы участниц по учебной программе:</h1>
            </div><!-- /.section-padding -->

            <?php //собираем посты по типу
            $thisPostId = get_the_ID();
            $posts = get_posts(array(
                'numberposts' => 100,
                'post_type' => 'testimonials',
                'orderby' => 'id',
                'order' => 'ASC',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));
            ?>

            <!-- Slider main container -->
            <div class="swiper testimonials-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($posts as $post) { setup_postdata($post); ?>
                        <div class="swiper-slide">
                            <video controls="controls" poster="<?= the_field('testimonial-image')?>">
                                <source src="<?= the_field('testimonial-webm')?>" type='video/webm'>
                                <source src="<?= the_field('testimonial-ogv')?>" type='video/ogg'>
                                <source src="<?= the_field('testimonial-mp4')?>" type='video/mp4'>
                                Видео не поддерживается Вашим браузером
                            </video>
                        </div><!-- /.swiper-slide -->
                    <?php } wp_reset_postdata(); // сброс постов ?>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div><!-- /.swiper testimonials-slider -->
            <div class="testimonials-row">
                    <a href="#callback" class="btn testimonials-row__button">Присоединиться</a>
            </div><!-- /.testimonial-row-->
        </div><!-- /.section-white-->
    </div>
</section>