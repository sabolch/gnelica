<?php 
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>
    
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="crosh">
          <a href="/">Главная </a><span>/ Контакты</span>
        </div>
        <h1 class="talk-h1">Контакты</h1>
        <?php 
              wp_reset_query(); 
              $wp_query = new WP_Query(array(
               'post_type' => 'contacts',
               'post_status' => 'publish',
               'caller_get_posts'=> 1)
               );
              while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
        <div class="col-md-2">
          <div class="telaemails">
            <h4>Телефон №1</h4>
            <span class="tel-icon"><?php echo (get_post_meta($post->ID, 'телефон_№1', true)); ?></span>
          </div>
          <div class="telaemails">
            <h4>Телефон №2</h4>
            <span class="tel-icon"><?php echo (get_post_meta($post->ID, 'телефон_№2', true)); ?></span>
          </div>
          <div class="telaemails">
            <h4>e-mail</h4>
            <span class="mail-icon"> 
              <a href="mailto:ngnelitsa@mail.ru"><?php echo (get_post_meta($post->ID, 'почтовый_адрес', true)); ?></a>
            </span>
          </div>
        </div>
      <?php endwhile; ?>
        <div class="col-md-10">
          <div class="contact-bio">
            <div class="contact_title">
              <h3><?php echo (get_post_meta($post->ID, 'фио', true)); ?></h3>
              <span><?php echo (get_post_meta($post->ID, 'должность', true)); ?></span>
              <p><?php echo (get_post_meta($post->ID, 'текст', true)); ?></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
        <?php 
              wp_reset_query(); 
              $wp_query = new WP_Query(array(
               'post_type' => 'contact_block',
               'post_status' => 'publish',
               'caller_get_posts'=> 1)
               );
              while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-12">
          <div class="map-box">
            <div class="map-box-left col-md-4 col-sm-12">
              <span class="review-span"><?php echo (get_post_meta($post->ID, 'название', true)); ?></span>
              <p><?php echo (get_post_meta($post->ID, 'адрес', true)); ?>
              </p>
              <div class="times">
                <span class="budni">Будни</span>
                <span class="hours"><?php echo (get_post_meta($post->ID, 'будни', true)); ?></span><br>
                <span class="budni">Cб-Вс</span>
                <span class="hours"><?php echo (get_post_meta($post->ID, 'выходные', true)); ?></span>
              </div>
            </div>
            <div class="map-box-right col-md-8 col-sm-12">
              <?php echo (get_post_meta($post->ID, 'карта', true)); ?>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <?php
          endwhile;       
        ?>

    </div>
    </div>
  
<?php get_footer(); ?>