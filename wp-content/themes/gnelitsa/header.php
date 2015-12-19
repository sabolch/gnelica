<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta content="" name="description" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sec_style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/sliderPro/dist/css/slider-pro.min.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/arrow_up.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>

	<?php wp_head(); ?>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function() {
		    $(".single_image").fancybox();
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
		    $("a[rel=group]").fancybox({
				'transitionIn' : 'none',
		        'transitionOut' : 'none',
		        'titlePosition' : 'over',
		        'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
		            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		        }
		    });
		});
	</script>

   	<section class="header">
		<div class="header_top">
			<div class="container">
				<div class="row">

					<div class="logo col-md-4 col-lg-4 col-xs-12">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
					</div>

					<div class="header-search col-md-4 col-lg-4 col-xs-12">
						<form action="#" name="search-inp">
							<span class="search-icon"></span>
							<input type="text" class="no-ou" value="Поиск" name="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"><input type="submit" value="ИСКАТЬ" >
						</form>
					</div>

					<div class="header-phone col-md-4 col-lg-4 col-xs-12">
						<span class="phone-black"><span class="phone-blue">+7 (495) </span>508 08 08</span>
					</div>
				</div>
			</div>
		</div>
		<div class="border-b">
			<div class="container">
			<div class="row">
				<span class="toggle-menu">Меню</span>
				<div class="header-nav center col-md-12 col-lg-12 col-xs-12">
					<? 
				       $args = array(
				         'theme_location'  => '',
				         'menu'            => 'Главное меню', 
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
				         'items_wrap'      => '<ul class="menu_navbar">%3$s</ul>',
				         'depth'           => 0
				       );
				       wp_nav_menu($args ); 
				      ?>
				</div>
			</div>
		</div>
		</div>
		
	</section>