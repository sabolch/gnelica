<?php 
/*
Template Name: О докторе
*/
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php include_once ('breadcramp.php') ?>
        <div class="jo_big_title col-md-12">
            <h1><?php the_title(); ?></h1>
            <hr>
        </div>
        <div class="clearfix"></div>       
        <div class="col-md-12">
            <?php 
            wp_reset_query(); 
                $wp_query = new WP_Query(array(
                'post_type' => 'about',
                'post_status' => 'publish',
                'caller_get_posts'=> 1)
            ); ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="col-md-4 col-sm-4 jo_about_col4">
                <?php $image2 = get_field('главная_картинка'); ?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="col-md-8 col-sm-8 jo_about_col8">
            <h2><?php echo (get_post_meta($post->ID, 'должность', true)); ?><br>
            <?php echo (get_post_meta($post->ID, 'фио', true)); ?></h2>
            <p><?php echo (get_post_meta($post->ID, 'вступительный_текст', true)); ?></p>
            <h2>образование и работа:</h2>
            <p><?php echo (get_post_meta($post->ID, 'образование_и_работа1', true)); ?></p>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-8 col-sm-8 jo_about_col8">
               <p><?php echo (get_post_meta($post->ID, 'образование_и_работа2', true)); ?></p>
            </div>
            <div class="col-md-4 col-sm-4 jo_about_col4">
                <?php $image2 = get_field('картинка_2'); ?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-4 jo_about_col4">
                <?php $image2 = get_field('картинка_3'); ?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="col-md-8 col-sm-8 jo_about_col8">
            <p><?php echo (get_post_meta($post->ID, 'образование_и_работа3', true)); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
        

       

<section class="testimonails ">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <h4>Сертификаты</h4>
                <div class="testimonail-box whitebox">
                    <span class="circle sert"></span>
                    <div id="sert-slider" class="sert-slider">
                        <?php 
                        wp_reset_query(); 
                        $wp_query = new WP_Query(array(
                           'post_type' => 'sert',
                           'post_status' => 'publish',
                           'caller_get_posts'=> 1)
                        ); ?>
                        <? while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div class="item">
                            <div class="sert-box">
                                <div class="sert-inner">
                                    <p>
                                        <?php $image = get_field('картинка'); ?>
                                        <a rel="group" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>      

                </div>  
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <h4>Видео</h4>
                <div class="testimonail-box whitebox">
                    <span class="circle video"></span>
                    <div id="video-testimonails-slider-2" class="video-testimonails-slider">
                        <?php 
                        wp_reset_query(); 
                        $wp_query = new WP_Query(array(
                           'post_type' => 'video_review',
                           'post_status' => 'publish',
                           'caller_get_posts'=> 1)
                        ); ?>
                        <? while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div class="item">
                            <div class="video-box">
                                <div class="video-inner">
                                    <iframe src="<?php echo (get_post_meta($post->ID, 'ссылка', true)); ?>" frameborder="0" width="100%" height="100%" allowfullscreen></iframe>
                                </div>
                                <span class="user"><?php the_title(); ?></span>
                                <span class="date"><? the_time('d.m.Y'); ?></span>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    
                </div>  
                
            </div>            
        </div>
    </div>
</section>  

<section class="about-lechenie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Лечение</h4>
                <div class="joi_foot_blocks">
                    <div>
                        <a href="/disease_category/kolennyj-sustav/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min1.png" alt="">
                        </a>
                        <hr>
                        <p><a href="/disease_category/kolennyj-sustav/">КОЛЕННЫЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <a href="/disease_category/plechevoj-sustav/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min2.png" alt="">
                        </a>
                        <hr>
                        <p><a href="/disease_category/plechevoj-sustav/">ПЛЕЧЕВОЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <a href="/disease_category/golenostopnyj-sustav/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min3.png" alt="">
                        </a>
                        <hr>
                        <p><a href="/disease_category/golenostopnyj-sustav/">ГОЛЕНОСТОПНЫЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <a href="/disease_category/loktevoj-sustav/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min4.png" alt="">
                        </a>    
                        <hr>
                        <p><a href="/disease_category/loktevoj-sustav/">ЛОКТЕВОЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <a href="/disease_category/tazobedrennyj-sustav/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min5.png" alt="">
                        </a>
                        <hr>
                        <p><a href="/disease_category/tazobedrennyj-sustav/">ТАЗОБЕДРЕННЫЙ СУСТАВ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 

    <div class="modal fade" id="sert_pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog sert_modal_dialog">
    <div class="modal-content video_modal_content sert_modal_content">
        <div class="modal-header video_modal_header sert_modal_header">
            <div class="text_block_pop">
                <p>Сертификаты</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body sert_modal_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diplom.png" alt="">
        </div>
    </div>
  </div>
</div>

	
<?php get_footer(); ?>