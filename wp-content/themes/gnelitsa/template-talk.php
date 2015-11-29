<?php 
/*
Template Name: Разговор с пациентом

*/
 ?>

<?php get_header(); ?>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="crosh">
                    <a href="#">Главная </a><span>/ Разговор с пациентом</span>
                </div>
                <h1 class="talk-h1 talk_h1">Разговор с пациентом</h1>
                <div class="question">
                    <a href="#">Задать вопрос</a>
                </div>
                <?php 
                  wp_reset_query(); 
                  $wp_query = new WP_Query(array(
                   'post_type' => 'talk',
                   'post_status' => 'publish',
                   'caller_get_posts'=> 1)
                   ); ?>
                  <?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="question-answer">
                    <div class="question-user">
                        <span class="user-name"><?php echo (get_post_meta($post->ID, 'автор_вопроса', true)); ?> </span>
                        <span class="date"><? the_time('d.m.Y'); ?></span>
                        <p class="question-text">
                           <?php echo (get_post_meta($post->ID, 'текст_вопроса', true)); ?> 
                        </p>
                    </div>
                    <div class="answer">
                        <span class="admin-name"><?php echo (get_post_meta($post->ID, 'автор_ответа', true)); ?> </span>
                        <span class="date"><? the_time('d.m.Y'); ?></span>
                        <div class="img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/admin-icon.jpg" alt="">
                        </div>
                        <p class="answer-text">
                            <?php echo (get_post_meta($post->ID, 'текст_ответа', true)); ?> 
                        </p>
                    </div>

                    <div class="hide-answer">
                        <a href="#" >скрыть ответ</a>
                    </div>
                </div>
                <?php endwhile; ?>
                
                <div class="pagination">
                    <hr>
                    <a href="#"><span class="current">1</span></a>
                    <a href="#"><span>2</span></a>
                    <a href="#"><span>3</span></a>
                    <a href="#"><span>4</span></a>
                    <a href="#"><span>5</span></a>
                    <a href="#"><span>...</span></a>
                    <a href="#"><span>20</span></a>
                    <a href="#"><span class="current button-right"></span></a>
                </div>

                <div class="q-answer">
                    <a class="blue-but-review" href="#">Задать вопрос</a>
                </div>

                
            </div>
        </div>
    </section>

<?php get_footer(); ?>