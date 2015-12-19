<?php get_header(); ?>

<section class="home-slider-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="main-slider">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
						<div class="gnelitsa visible-md visible-lg">
							<div class="inner">
								<span class="fam">Гнелица</span>
								<span class="name">Николай Николаевич</span>
								<hr>
								<span class="site">ОФИЦИАЛЬНЫЙ САЙТ доктора</span>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
						<div class="gnelitsa visible-md visible-lg">
							<div class="inner">
								<span class="fam">Гнелица</span>
								<span class="name">Николай Николаевич</span>
								<hr>
								<span class="site">ОФИЦИАЛЬНЫЙ САЙТ доктора</span>
							</div>
						</div>

					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
						<div class="gnelitsa visible-md visible-lg">
							<div class="inner">
								<span class="fam">Гнелица</span>
								<span class="name">Николай Николаевич</span>
								<hr>
								<span class="site">ОФИЦИАЛЬНЫЙ САЙТ доктора</span>
							</div>
						</div>
						
					</div>

				</div>
				
			</div>
		</div>
	</div>
</section>

<setion class="page2">
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
				<a class="blue-button" href="/?p=54"><span>Подробнее</span></a>
			</div>
			<div class="col-md-7 col-xs-12 col-sm-12 content-image">
				<a href="/disease_category/plechevoj-sustav/" class="min_btn1"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic1.png" alt=""></a>
				<a href="/disease_category/kolennyj-sustav/" class="min_btn2"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic2.png" alt=""></a>
				<a href="/disease_category/tazobedrennyj-sustav/" class="min_btn3"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_3.png" alt=""></a>
				<a href="/disease_category/kolennyj-sustav/" class="min_btn4"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_4.png" alt=""></a>
				<a href="/disease_category/golenostopnyj-sustav/" class="min_btn5"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_5.png" alt=""></a>
			</div>
		</div>
	</div>
</setion>
<!--
<section class="home-slider-section container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="owl-demo">
				< ?php 
		        wp_reset_query(); 
		        $wp_query = new WP_Query(array(
		           'post_type' => 'slider',
		           'posts_per_page' => 3,
		           'post_status' => 'publish',
		           'caller_get_posts'=> 1)
		           ); ? >
		        < ?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="item">
                    
				    < ?php $image2 = get_field('картинка'); ?>
					<img src="< ?php echo $image2['url']; ?>" alt="<?php the_title(); ?>">
		        </div>
				< ?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
-->



<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


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
					<a class="blue-button" href="/?p=54"><span>Подробнее</span></a>
				</div>
				<div class="col-md-7 col-xs-12 col-sm-12 content-image">
					<a href="/disease_category/plechevoj-sustav/" class="min_btn1"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic1.png" alt=""></a>
					<a href="/disease_category/kolennyj-sustav/" class="min_btn2"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic2.png" alt=""></a>
					<a href="/disease_category/tazobedrennyj-sustav/" class="min_btn3"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_3.png" alt=""></a>
					<a href="/disease_category/kolennyj-sustav/" class="min_btn4"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_4.png" alt=""></a>
					<a href="/disease_category/golenostopnyj-sustav/" class="min_btn5"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_5.png" alt=""></a>
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
							<span class="user"><?php the_title(); ?></span>
							<span class="date"><? the_time('d.m.Y'); ?></span>
						</div>
						<?php
						    endwhile; 			
		        		?>
					</div>
					<a href="/razgovor-s-patsientom/" class="blue-button">Посмотреть все отзывы</a>
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
						<a class="blue-button" href="#">Написать отзыв</a>
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

<?php get_footer(); ?>
