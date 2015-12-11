<?php 
/*
Template Name: Истории пациентов
*/
?>
<?php get_header(); ?>

    <div class="container-fluid jo_container_fluid">
        <div class="container otziv">
            <div class="row">
                <div class="jo_breadcrumb col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#" data-toggle="modal" data-target="#otz_modal">Главная</a></li>
                        <li class="active">Истории пациентов</li>
                    </ol>
                </div>
                <div class="jo_big_title col-md-12">
                    <h1>Истории пациентов</h1>
                    <hr>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 video_ot">
                    <h2>ВИДЕО-ОТЗЫВЫ</h2>
                    <div class="video_ot_block">
                        <div class="four-block">
                            <?php 
                            wp_reset_query(); 
                            $wp_query = new WP_Query(array(
                               'post_type' => 'video_review',
                               'post_status' => 'publish',
                               'caller_get_posts'=> 1)
                               );
                            $i = 0;
                            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="video-frame">
                                    <iframe class="video-frame" src="<?php echo (get_post_meta($post->ID, 'ссылка', true)); ?>" frameborder="0" allowfullscreen></iframe>    
                                </div>
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/user-icon.png" alt="">
                                    <span><?php the_title(); ?></span>
                                    <span class="date"><? the_time('d.m.Y'); ?></span>
                                </p>
                            </div>
                            <?php $i++; ?>

                            <?php if ($i>3) {
                                break;
                            } ?>
                            <?php endwhile; ?>
                            <div class="clearfix"></div>
                            <div class="more-videos" id="more-videos">
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="video_ot_btn">
                            <a id="show-more-video-button" href="#">Показать ещё</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text_ot">
                    <h2>ОТЗЫВЫ</h2>
                    <div class="text_ot_block">
                        <?php 
                          wp_reset_query(); 
                          $wp_query = new WP_Query(array(
                           'post_type' => 'review',
                           'post_status' => 'publish',
                           'caller_get_posts'=> 1)
                           );
                          while ($wp_query->have_posts()) : $wp_query->the_post();
                        ?>
                        <div class="text_ot_blocks">
                            <div class="col-md-12">
                                <h3><?php echo (get_post_meta($post->ID, 'текст_отзыва', true)); ?></h3>
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/user-icon.png" alt="">
                                    <span><?php the_title(); ?></span>
                                    <span class="date"><? the_time('d.m.Y'); ?></span>
                                </p>
                            </div>
                        </div>

                        <?php endwhile; ?>
                        
                        <div class="col-md-12">
                            <nav>
                              <?php the_posts_pagination(); ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="write_ot" data-toggle="modal" data-target="#do_otz_modal">НАПИСАТЬ ОТЗЫВ</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12 pic_ot">
                    <h2>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</h2>
                    <div class="pic_ot_block">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_1"><img src="<?php echo get_template_directory_uri(); ?>/img/pic1.jpg" alt=""></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_2"><img src="<?php echo get_template_directory_uri(); ?>/img/pic2.jpg" alt=""></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_3"><img src="<?php echo get_template_directory_uri(); ?>/img/pic3.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_4"><img src="<?php echo get_template_directory_uri(); ?>/img/pic4.jpg" alt=""></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_5"><img src="<?php echo get_template_directory_uri(); ?>/img/pic5.jpg" alt=""></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_6"><img src="<?php echo get_template_directory_uri(); ?>/img/pic6.jpg" alt=""></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="col-md-12">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_7"><img src="<?php echo get_template_directory_uri(); ?>/img/pic7.jpg" alt=""></a>
                                </div>
                                <div class="col-md-12">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_8"><img src="<?php echo get_template_directory_uri(); ?>/img/pic8.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_9"><img src="<?php echo get_template_directory_uri(); ?>/img/pic9.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_10"><img src="<?php echo get_template_directory_uri(); ?>/img/pic10.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_11"><img src="<?php echo get_template_directory_uri(); ?>/img/pic11.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_12"><img src="<?php echo get_template_directory_uri(); ?>/img/pic14.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="col-md-12">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_13"><img src="<?php echo get_template_directory_uri(); ?>/img/pic12.jpg" alt=""></a>
                            </div>
                            <div class="col-md-12">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#pop_14"><img src="<?php echo get_template_directory_uri(); ?>/img/pic13.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pic_ot_btn">
                            <a href="#">Показать ещё</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="otz_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>ОТЗЫВ</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.riosam, nisi ut aliquid ex ea commodi consequatur slores. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            <h3><img src="img/user-icon.png" alt="">Jon Doe <span>21.08.2015</span></h3>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="do_otz_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>ОСТАВЬТЕ ОТЗЫВ</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <form action="">
                <div class="col-md-6 col-sm-6">
                    <input type="text" placeholder="Имя" name="name">
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <textarea name="" placeholder="Сообщение" id="" cols="30" rows="10"></textarea>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pop_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic1.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic2.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic3.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic4.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic5.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic6.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic7.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic8.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic9.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic10.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic11.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic12.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic13.jpg" alt="">
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pop_14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>БЛАГОДАРСТВЕННЫЕ ПИСЬМА</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pic14.jpg" alt="">
        </div>
    </div>
  </div>
</div>    
<?php get_footer(); ?>    