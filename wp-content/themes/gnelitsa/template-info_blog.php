<?php 
/*
Template Name: Статьи

*/
 ?>

<?php get_header(); ?>

    <div class="container-fluid jo_container_fluid">
        <div class="container">
            <div class="row">
                <div class="jo_breadcrumb col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Главная</a></li>
                        <li class="active">Инфоблог</li>
                    </ol>
                </div>
                <div class="jo_big_title col-md-12">
                    <h1>ИНФОБЛОГ</h1>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-12 jo_main_left">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/min_img1.png" alt="min_img1">
                        <a href="#">ПАЦИЕНТАМ</a>
                    </div>
                    <div class="jo_active_block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/min_img2.png" alt="min_img2">
                        <p>ИНТЕРЕСНЫЕ СТАТЬИ</p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/min_img3.png" alt="min_img3">
                        <a href="#">ВИДЕОГАЛЕРЕЯ</a>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/min_img4.png" alt="min_img4">
                        <a href="#">НОВОСТИ</a>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/min_img5.png" alt="min_img5">
                        <a href="#" class="jo_last_btn">КУРСЫ ОБУЧЕНИЯ ПО<br>АРТРОСКОПИЧЕСКОЙ<br class="jo_last_btn_br"> ХИРУРГИИ</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 info_blog">
                    <?php 
                         wp_reset_query(); 
                         $wp_query = new WP_Query(array(
                        'post_type' => 'stat',
                        'post_status' => 'publish',
                        'caller_get_posts'=> 1)
                        ); ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="info_blog_block">
                        <?php the_post_thumbnail(); ?>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <span><? the_time('d.m.Y'); ?></span>
                            <p><?php echo (get_post_meta($post->ID, 'небольшое_описание', true)); ?></p>
                            <a href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <nav>
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>