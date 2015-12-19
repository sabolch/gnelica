<?php 
/*
Template Name: Разговор с пациентом
*/
?>

<?php get_header(); ?>

<div class="container faq">
    <div class="row">
        <?php include_once ('breadcramp.php') ?>
        <div class="jo_big_title col-md-12">
            <h1><?php the_title(); ?></h1>
            <hr>
        </div>
        
        <div class="col-md-12 whide-line">
            <a href="#" class="write_ot" data-toggle="modal" data-target="#do_otz_modal">Задать вопрос</a>
          
        </div>
        <div class="clearfix"></div>
        <?php 
        wp_reset_query(); 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $wp_query = new WP_Query(array(
            'paged'          => $paged,  
            'post_type' => 'talk',
            'post_status' => 'publish',
            'caller_get_posts'=> 1)
        ); ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
        <div class="faq-block">
            <div class="col-md-12">
                <div class="faq-question">
                    <div class="info-line">
                        <span class="autor"><?php echo (get_post_meta($post->ID, 'автор_вопроса', true)); ?></span>
                        <span class="date"><?php the_time('d.m.Y'); ?></span>
                    </div>
                    <?php echo (get_post_meta($post->ID, 'текст_вопроса', true)); ?> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="faq-answer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/admin-icon.jpg" alt="">
                    <div class="info-line">
                        <span class="autor"><?php echo (get_post_meta($post->ID, 'автор_ответа', true)); ?></span>
                        <span class="date"><?php the_time('d.m.Y'); ?></span>
                    </div>
                    <?php echo (get_post_meta($post->ID, 'текст_ответа', true)); ?> 
                </div>
            </div>
            <span class="faq-toggle-button">Показать ответ</span>
        </div>

        <?php endwhile; ?>
        <hr>
        <div class="col-md-10 faq-bottom-left">
            <?php 
            $args = array(
            'show_all'     => False, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __(''),
            'next_text'    => __(''),
            'add_args'     => False,
            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => __( '' ),
            );
            $nav = get_the_posts_pagination($args);
$nav = preg_replace('~<h2.*?h2>~', '', $nav);
echo $nav;
             ?>
        </div>
        <div class="col-md-2 faq-bottom-right">
            <a href="#" class="blue-button" data-toggle="modal" data-target="#do_otz_modal">Задать вопрос</a>
            
        </div>


  

    </div>
        
</div>
         
<div class="modal fade" id="do_otz_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog video_modal_dialog otz_dialog">
    <div class="modal-content video_modal_content otz_content">
        <div class="modal-header video_modal_header otz_header">
            <div class="text_block_pop">
                <p>Задайте вопрос</p>
            </div>
            <div class="close_block_pop">
                <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/close_btn.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal-body video_modal_body otz_body">
            <form action="">
                <div class="col-md-6 col-sm-6">
                    <input type="text" placeholder="Имя" name="name">
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <textarea name="" placeholder="Сообщение" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Отправить" id="ask-question-submit">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
