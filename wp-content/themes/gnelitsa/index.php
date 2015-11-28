<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gnelitsa
 */
// fgfg
//новое изменение
get_header(); ?>

	<section class="content">
		<div class="slider-box">
			<div class="container">
				<div class="row">
					<div id="owl-demo" class=" owl-carousel owl-theme ">
						<?php 
				          wp_reset_query(); 
				          $wp_query = new WP_Query(array(
				           'post_type' => 'slider',
				           'posts_per_page' => 3,
				           'post_status' => 'publish',
				           'caller_get_posts'=> 1)
				           );
				          while ($wp_query->have_posts()) : $wp_query->the_post();
				        ?>
						<div class="item">
                            <div class="slider_text_block">
                                <h2><?php echo (get_post_meta($post->ID, 'заголовок', true)); ?></h2>
                                <p><?php echo (get_post_meta($post->ID, 'текст2', true)); ?></p>
                                <hr>
                                <h3><?php echo (get_post_meta($post->ID, 'текст3', true)); ?></h3>
                            </div>    
						    <?php $image2 = get_field('картинка'); ?>
     						<img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
				        </div>
						<?php
						    endwhile; 			
		        		?>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="container">
			<div class="row">
				<div class="content-bio col-md-5 col-xs-12 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/img//bio.jpg" class="img-responsive" alt="Responsive image" alt="">
					<div class="content-bio_title">
						<h3>гнелица НИКОЛАЙ НИКОЛАЕВИЧ</h3>
						<span>Травматолог - ортопед, к.м.н.</span>
						<p>Гнелица Николай Николаевич травматолог-ортопед, кандидат медицинских наук, ассистент кафедры травматологии и ортопедии Российского Университета Дружбы Народов, закончил Российскую военно-медицинскую академию. Проходил клиническую ординатуру на кафедре травматологии и ортопедии в Российском университете дружбы народов.Стажировался в клиниках Австрии.Член Российского артроскопического общества. Член Польского общества спортивной травматологии. Член Международного общества травматологов-ортопедов.</p>
					</div>
					<hr>
					<a class="blue-but" href="#">Подробнее</a>
				</div>
				<div class="col-md-7 col-xs-12 col-sm-12 content-image">
					<a href="#" class="min_btn1"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic1.png" alt=""></a>
					<a href="#" class="min_btn2"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic2.png" alt=""></a>
					<a href="#" class="min_btn3"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_3.png" alt=""></a>
					<a href="#" class="min_btn4"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_4.png" alt=""></a>
					<a href="#" class="min_btn5"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_5.png" alt=""></a>
				</div>
				<div class="clearfix"></div>
				<div class="content-video col-md-7 col-xs-12 col-sm-12">
					<span class="video-span">Видео-отзывы</span>
					<span class="trx"></span>
					<div id="owl-demo-video" class="owl-carousel owl-theme content-video_main">
						<?php 
				          wp_reset_query(); 
				          $wp_query = new WP_Query(array(
				           'post_type' => 'video_review',
				           'post_status' => 'publish',
				           'caller_get_posts'=> 1)
				           );
				          while ($wp_query->have_posts()) : $wp_query->the_post();
				        ?>
						<div class="item video-item">
							<iframe class="video-frame" src="<?php echo (get_post_meta($post->ID, 'ссылка', true)); ?>" frameborder="0" allowfullscreen></iframe>
							<br><br>
							<span class="user"><?php echo (get_post_meta($post->ID, 'автор', true)); ?></span>
							<span class="date"><? the_time('d.m.Y'); ?></span>
						</div>
						<?php
						    endwhile; 			
		        		?>
					</div>
					<a href="#" class="video-all-review">Посмотреть все отзывы</a>
				</div>
				
				<div class="content-review col-md-5 col-xs-12 col-sm-12">
					<span class="review-span">отзывы</span>
					<span class="trx-2"></span>
					<div id="owl-demo-review" class="owl-carousel owl-theme content-review_main">
						<?php 
				          wp_reset_query(); 
				          $wp_query = new WP_Query(array(
				           'post_type' => 'review',
				           'post_status' => 'publish',
				           'caller_get_posts'=> 1)
				           );
				          while ($wp_query->have_posts()) : $wp_query->the_post();
				        ?>

						<div class="item">
							<p><?php echo (get_post_meta($post->ID, 'текст_отзыва', true)); ?> <a href="#">читать далее</a></p>
							<span class="user"><?php echo (get_post_meta($post->ID, 'автор', true)); ?></span>
							<span class="date"><? the_time('d.m.Y'); ?></span>
						</div>

						<?php
						    endwhile; 			
		        		?>
						
					</div>
					<div class="review-but">
						<a class="blue-but-review" href="#">Написать отзыв</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="content-partners col-md-12">
					<span class="partners-span">партнёры</span>
					<hr>
					<div class="clearfix"></div>
					<?php 
				          wp_reset_query(); 
				          $wp_query = new WP_Query(array(
				           'post_type' => 'partner',
				           'posts_per_page' => 6,
				           'post_status' => 'publish',
				           'caller_get_posts'=> 1)
				           );
				          while ($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
					<div class="col-md-2 col-xs-4">
						<?php $image2 = get_field('логотип'); ?>
     					<img src="<?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
					</div>
					<?php
						endwhile; 			
		        	?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
