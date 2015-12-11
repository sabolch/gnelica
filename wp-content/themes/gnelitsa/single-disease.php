<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
    <div class="container">
        <div class="row">
            <?php include_once ('breadcramp.php') ?>
            <div class="jo_big_title col-md-12">
                <h1><?php the_title(); ?></h1>
                <hr>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>        
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
