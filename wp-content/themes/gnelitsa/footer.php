<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnelitsa
 */

?>

<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12 col-sm-12">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img//footer-logo.png" class="footer-logo" alt="">
					</a>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 footer-nav-center">
					<div class="footer-nav">
						<span>Ссылки</span>
						<ul>
							<div class="left-nav col-md-6 col-xs-12 col-sm-6">
							<? 
						       $args = array(
						         'theme_location'  => '',
						         'menu'            => 'footer1', 
						         'container'       => flase, 
						         'container_class' => '', 
						         'container_id'    => '',
						         'menu_class'      => 'menu', 
						         'menu_id'         => '',
						         'echo'            => true,
						         'fallback_cb'     => 'wp_page_menu',
						         'before'          => '',
						         'after'           => '',
						         'link_before'     => '',
						         'link_after'      => '',
						         'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
						         'depth'           => 0
						       );
						       wp_nav_menu($args ); 
						      ?>
							</div>
							<div class="right-nav col-md-6 col-xs-12 col-sm-6 ">
							<? 
						       $args = array(
						         'theme_location'  => '',
						         'menu'            => 'footer2', 
						         'container'       => flase, 
						         'container_class' => '', 
						         'container_id'    => '',
						         'menu_class'      => 'menu', 
						         'menu_id'         => '',
						         'echo'            => true,
						         'fallback_cb'     => 'wp_page_menu',
						         'before'          => '',
						         'after'           => '',
						         'link_before'     => '',
						         'link_after'      => '',
						         'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
						         'depth'           => 0
						       );
						       wp_nav_menu($args ); 
						      ?>
							</div>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-12 footer-social">
					<span>соцсети</span><br>
					<div class="social-icons">
						<a href="#" class="youtube"><img src="<?php echo get_template_directory_uri(); ?>/img/social-1.png" alt=""> </a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-2.png" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-3.png" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-4.png" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>

<?php wp_footer(); ?>


