<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
    <div class="container">
        <div class="row">
            <?php include_once ('breadcramp.php') ?>
            <div class="jo_big_title col-md-12">
                <h1>Курсы обучения по артоскопической хирургии</h1>
                <hr>
            </div>
            <div class="col-lg-4 col-md-12 jo_main_left">
               <?php require_once('infoblog-menu.php'); ?>
            </div>
            <div class="col-lg-8 col-md-12 info_blog">
                <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 wp_reset_query(); 
                 $wp_query = new WP_Query(array(
                    'paged'          => $paged,  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat'=> 12)
                ); ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="info_blog_block">
                    <?php the_post_thumbnail(); ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <span><? the_time('d.m.Y'); ?></span>
                        <?php the_excerpt(); ?>
                        <a class="more" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>