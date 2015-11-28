<?php 
/*
Template Name: Результаты лечения

*/

?>

<?php get_header(); ?>
    
  <div class="container-fluid jo_container_fluid">
        <div class="container">
            <div class="row">
               <div class="jo_breadcrumb col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Лечение</a></li>
                        <li class="active">Результаты лечения</li>
                    </ol>
                </div>
                <div class="jo_big_title col-md-12">
                    <h1>Результаты лечения</h1>
                    <hr>
                </div>
                <?php 
                  wp_reset_query(); 
                  $wp_query = new WP_Query(array(
                   'post_type' => 'result',
                   'post_status' => 'publish',
                   'caller_get_posts'=> 1)
                   );
                  while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div class="jor_resulte">
                    <h2><?php the_title(); ?></h2>
                    <div class="foot_fff">
                      <div class="jos_colmd2_block col-lg-2 col-md12 col-sm-12">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/sec/man_icon.png" alt="">
                          <p><?php echo (get_post_meta($post->ID, 'фио', true)); ?><br><span>25 лет</span></p>
                      </div>
                      <div class="jos_colmd10_block col-lg-10 col-md-12 col-sm-12">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/sec/wrong_icon.png" alt="">
                          <p>ПРОБЛЕМА:<br><span><?php echo (get_post_meta($post->ID, 'проблема', true)); ?> </span></p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-3 col-sm-6 col-xs-6 jos_ren1">
                          <a href="javascript:void(0)" class="blue_block_hide">
                            <p><?php echo (get_post_meta($post->ID, 'описание_на_картинке_1', true)); ?></p>
                          </a>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 jos_ren2">
                          <a href="#"></a>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 jos_ren3">
                          <iframe width="100%" height="165" src="<?php echo (get_post_meta($post->ID, 'видео_1', true)); ?>" frameborder="0" allowfullscreen></iframe>
                          <p><?php echo (get_post_meta($post->ID, 'описание_видео_1', true)); ?></p>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 jos_ren4">
                          <iframe width="100%" height="165" src="<?php echo (get_post_meta($post->ID, 'видео_2', true)); ?>" frameborder="0" allowfullscreen></iframe>
                          <p><?php echo (get_post_meta($post->ID, 'описание_видео_2', true)); ?></p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-12 jos_client_ord">
                          <a href="#">Прочитать отзыв этого пациента</a>
                      </div>
                    </div>
                </div>
                <?php
                  endwhile;       
                ?>
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
  
<?php get_footer(); ?>