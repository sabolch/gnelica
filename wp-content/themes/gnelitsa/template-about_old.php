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
                    <h1>О ДОКТОРЕ</h1>
                    <hr>
                </div>
                 <?php 
			          wp_reset_query(); 
			          $wp_query = new WP_Query(array(
			           'post_type' => 'about',
			           'post_status' => 'publish',
			           'caller_get_posts'=> 1)
			           );
			          while ($wp_query->have_posts()) : $wp_query->the_post();
			        ?>
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
                <?php
				    endwhile; 			
        		?>
               
                <div class="col-md-5 joi_slide">
                    <h2>СЕРТИФИКАТЫ</h2>
                    <div class="joi_slide_mid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_1.png" alt="">
                        <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                          <?php 
                              $v=0;
                            ?>
                          <?php 
                            wp_reset_query(); 
                            $wp_query = new WP_Query(array(
                             'post_type' => 'sert',
                             'post_status' => 'publish',
                             'caller_get_posts'=> 1)
                             );
                            while ($wp_query->have_posts()) : $wp_query->the_post();
                          ?>
                          <?php 
                            if ($v==0) {
                              $z="active";
                              $v++;
                            }
                            else{
                              $z="";
                            }
                          ?>
                            <div class="item <?php echo $z; ?>">
                              <a href="<?php echo get_template_directory_uri(); ?>/javascript:void(0)" data-toggle="modal" data-target="#sert_pop" class="fancybox" rel="gallery">
                                <?php $image2 = get_field('картинка_1'); ?>
                                <img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
                              </a>
                              <a href="<?php echo get_template_directory_uri(); ?>/javascript:void(0)" data-toggle="modal" data-target="#sert_pop" class="fancybox" rel="gallery">
                                <?php $image2 = get_field('картинка_2'); ?>
                                <img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
                              </a>
                              <div class="carousel-caption">
                              </div>
                            </div>
                            <?php
                              endwhile;       
                            ?>
                              <a href="<?php echo get_template_directory_uri(); ?>/#" class="joi_all_pics">Посмотреть все</a>
                          </div>
                          <a class="left carousel-control" href="<?php echo get_template_directory_uri(); ?>/#carousel-example-generic1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          </a>
                          <a class="right carousel-control" href="<?php echo get_template_directory_uri(); ?>/#carousel-example-generic1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 joi_slide">
                    <h2>Видео</h2>
                    <div class="joi_slide_mid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_2.png" alt="">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                            <?php 
                              $v=0;
                            ?>

                            <?php 
                              wp_reset_query(); 
                              $wp_query = new WP_Query(array(
                               'post_type' => 'video',
                               'post_status' => 'publish',
                               'caller_get_posts'=> 1)
                               );
                              while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>

                            <?php 
                              if ($v==0) {
                                $z="active";
                                $v++;
                              }
                              else{
                                $z="";
                              }
                              ?>
                            <div class="item <?php echo $z; ?>">
                              <iframe width="415" height="260" src="<?php echo (get_post_meta($post->ID, 'ссылка', true)); ?>" frameborder="0" allowfullscreen></iframe>
                              <p><?php echo (get_post_meta($post->ID, 'автор', true)); ?></p>
                              <div class="carousel-caption">
                              </div>
                            </div>
                            
                          <a class="left carousel-control" href="<?php echo get_template_directory_uri(); ?>/#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          </a>
                          <a class="right carousel-control" href="<?php echo get_template_directory_uri(); ?>/#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          </a>
                          <?php
                              endwhile;       
                            ?>
                        </div>
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
    <div class="containner">
        <div class="row">
            <div class="col-md-12">
                <div class="joi_foot_blocks">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min1.png" alt="">
                        <hr>
                        <p><a href="/disease_category/kolennyj-sustav/">КОЛЕННЫЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min2.png" alt="">
                        <hr>
                        <p><a href="/disease_category/plechevoj-sustav/">ПЛЕЧЕВОЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min3.png" alt="">
                        <hr>
                        <p><a href="/disease_category/golenostopnyj-sustav/">ГОЛЕНОСТОПНЫЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min4.png" alt="">
                        <hr>
                        <p><a href="/disease_category/loktevoj-sustav/">ЛОКТЕВОЙ СУСТАВ</a></p>
                    </div>
                </div>
                <div class="joi_foot_blocks">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/treat_min5.png" alt="">
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