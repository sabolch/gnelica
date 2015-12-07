<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
    <div class="container">
        <div class="row">
            <?php include_once ('breadcramp.php') ?>
            <div class="jo_big_title col-md-12">
                <h1>Новости</h1>
                <hr>
            </div>
            <div class="col-lg-4 col-md-12 jo_main_left">
               <?php require_once('infoblog-menu.php'); ?>
            </div>

            <div class="col-md-8 col-md-12 videoblog">
                <div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'; ?>" class="active">Все<br>видео</a></div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'."?kt=kolen"; ?>">Коленный<br>сустав</a></div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'."?kt=plecho"; ?>">Плечевой<br>сустав</a></div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'."?kt=golen"; ?>">Голеностопный<br>сустав</a></div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'."?kt=lokot"; ?>">Локтевой<br>сустав</a></div>
                    <div class="col-md-2 col-sm-4"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/category/videogalereya/'."?kt=taz"; ?>">Тазобедренный<br>сустав</a></div>
                </div>

                <?php 
                $cat = 14;
                if (isset($_GET["kt"]) & $_GET["kt"] == 'kolen'){ $cat = 15; }
                if (isset($_GET["kt"]) & $_GET["kt"] == 'plecho'){ $cat = 16; }
                if (isset($_GET["kt"]) & $_GET["kt"] == 'golen'){ $cat = 17; }
                if (isset($_GET["kt"]) & $_GET["kt"] == 'lokot'){ $cat = 18; }
                if (isset($_GET["kt"]) & $_GET["kt"] == 'taz'){ $cat = 19; }

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                wp_reset_query(); 
                $wp_query = new WP_Query(array(
                    'paged'          => $paged,  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat'=> $cat)
                ); ?>
                <?php $i=0; ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="videothumb" data-toggle="modal" data-target="#video_modal_1">
                        <?php the_post_thumbnail(); ?>
                        <p><?php the_title(); ?></p>
                    </a>
                    <div class="hide-frame">
                        <?php echo get_the_content(); ?>
                    </div>
                    <?php $i++; ?>
                    <?php if ($i > 3) { ?>
                    <?php $i = 0; ?>    

                    <?php } ?>
                </div>

                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="video_modal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog video_modal_dialog">
        <div class="modal-content video_modal_content">
            <div class="modal-header video_modal_header">
                <div class="text_block_pop">
                    <p>Lorem Ipsum. Proin gravidar</p>
                </div>
                <div class="close_block_pop">
                    <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                    </button>
                </div>
            </div>
            <div class="modal-body video_modal_body">
                <iframe width="100%" height="420" src="https://www.youtube.com/embed/8LZJz7GtJA0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>            



