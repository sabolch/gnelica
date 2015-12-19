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

<section class="page2">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-xs-12 col-sm-12">
				<div class="content-bio whitebox">
					<img src="<?php echo get_template_directory_uri(); ?>/img//bio.jpg" class="img-responsive" alt="Responsive image" alt="">
					<div class="content-bio_title">
						<h3>гнелица НИКОЛАЙ НИКОЛАЕВИЧ <br>
						<span>Травматолог - ортопед, к.м.н.</span><h3>
					</div>
					<p>Гнелица Николай Николаевич травматолог-ортопед, кандидат медицинских наук, ассистент кафедры травматологии и ортопедии Российского Университета Дружбы Народов, закончил Российскую военно-медицинскую академию. Проходил клиническую ординатуру на кафедре травматологии и ортопедии в Российском университете дружбы народов.Стажировался в клиниках Австрии.Член Российского артроскопического общества. Член Польского общества спортивной травматологии. Член Международного общества травматологов-ортопедов.</p>
					<hr>
					<a class="blue-button" href="/?p=54"><span>Подробнее</span></a>
				</div>
			</div>
			<div class="col-md-7 col-xs-12 col-sm-12 visible-md visible-lg">
				<div class="content-image">
					<a href="/disease_category/plechevoj-sustav/" class="min_btn1"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic1.png" alt=""></a>
					<a href="/disease_category/kolennyj-sustav/" class="min_btn2"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic2.png" alt=""></a>
					<a href="/disease_category/tazobedrennyj-sustav/" class="min_btn3"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_3.png" alt=""></a>
					<a href="/disease_category/kolennyj-sustav/" class="min_btn4"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_4.png" alt=""></a>
					<a href="/disease_category/golenostopnyj-sustav/" class="min_btn5"><img src="<?php echo get_template_directory_uri(); ?>/img//min_ic_5.png" alt=""></a>					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonails">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<h4>Видео-ОТЗЫВЫ</h4>
				<div class="testimonail-box whitebox">
					<span class="circle video"></span>
					<div id="video-testimonails-slider" class="video-testimonails-slider">
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
				<a class="blue-button b1" href="/?p=162">Посмотреть все отзывы</a>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				<h4>ОТЗЫВЫ</h4>
				<div class="testimonail-box whitebox">
					<span class="circle testimonail"></span>
					<div id="testimonails-slider" class="video-testimonails-slider">
						<?php 
				        wp_reset_query(); 
				        $wp_query = new WP_Query(array(
				           'post_type' => 'review',
				           'post_status' => 'publish',
				           'caller_get_posts'=> 1)
				        ); ?>
				        <? while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="item">
							<div class="video-box">
								<div class="video-inner">
									<p><?php echo (get_post_meta($post->ID, 'текст_отзыва', true)); ?><a href="<?php the_permalink(); ?>">читать далее</a></p>
								</div>
								<span class="user"><?php echo (get_post_meta($post->ID, 'автор', true)); ?></span>
								<span class="date"><? the_time('d.m.Y'); ?></span>
							</div>
						</div>
						<?php endwhile; ?>
					</div>		

				</div>	
				<a class="blue-button b2" href="#">Написать отзыв</a>	
			</div>
		</div>
	</div>
</section>

<section class="partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Партнеры</h4>
				<hr>
				<div id="partners-slider">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p1_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p1.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p2_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p2.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p3_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p3.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p1_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p1.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p2_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p2.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p3_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p3.png';" >					
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/p1_hover.png';" onMouseOut="this.src='<?php echo get_template_directory_uri(); ?>/img/p1.png';" >					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
