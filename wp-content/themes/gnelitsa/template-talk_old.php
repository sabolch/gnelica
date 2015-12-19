<?php 
/*
Template Name: Разговор с пациентом
*/
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php include_once ('breadcramp.php') ?>
        <div class="jo_big_title col-md-12">
            <h1><?php the_title(); ?></h1>
            <hr>
        </div>
        <div class="col-md-12">
          <div class="question">
              <a href="#">Задать вопрос</a>
          </div>
        </div>
        <?php $a=1; ?>
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
            <div class="answer" id="text<?php echo $a; ?>" style="display:none; text-align:justify;">
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
                <a href="javascript:look('text<?php echo $a; ?>');" id="a-text<?php echo $a; ?>" >Показать</a>
            </div>
        </div>
        <?php $a++; ?>
        <?php endwhile; ?>
        
        <?php the_posts_pagination() ; ?>

        <div class="q-answer">
            <a class="blue-but-review" href="#">Задать вопрос</a>
        </div>
     </div>
</div>

<script>
function look(t){
  p=document.getElementById(t);
  l=document.getElementById("a-"+t);
  if(p.style.display=="none"){
    l.innerHTML="скрыть";
    p.style.display="block";}
  else{
    l.innerHTML="показать";
    p.style.display="none";}
}
</script>

<?php get_footer(); ?>                