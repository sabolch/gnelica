	<?php get_header(); ?>

	<div class="container-fluid jo_container_fluid">
        <div class="container">
            <div class="row">
                <?php include_once ('breadcramp.php') ?>
                <div class="jo_big_title col-md-12">
                    <h1>Результаты поиска</h1>
                    <hr>
                </div>
                
                <?php if ( have_posts() ) : ?>

             

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a> <br><br>
                

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

                <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>
               
            </div>
        </div>
    </div>
					

	<?php get_footer(); ?>
